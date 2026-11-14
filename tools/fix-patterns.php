<?php
/**
 * Apply output-preserving whitespace fixes to Metis pattern PHP.
 *
 * This formatter deliberately leaves block markup, attributes, styles, and
 * content untouched.
 *
 * @package Metis
 */

$function_names = array(
	'__',
	'_e',
	'_ex',
	'_x',
	'esc_attr__',
	'esc_attr_e',
	'esc_attr_x',
	'esc_html__',
	'esc_html_e',
	'esc_html_x',
	'esc_url',
	'get_theme_file_uri',
	'printf',
	'sprintf',
);

$arguments = array_slice( $argv, 1 );
$check_only = in_array( '--check', $arguments, true );
$files = array_values(
	array_filter(
		$arguments,
		static function ( $argument ) {
			return '--check' !== $argument;
		}
	)
);

if ( empty( $files ) ) {
	$files = glob( 'patterns/*.php' );
}

$needs_formatting = array();

foreach ( $files as $file ) {
	$real_file = realpath( $file );
	$patterns_directory = realpath( 'patterns' );
	if (
		false === $real_file ||
		false === $patterns_directory ||
		! str_starts_with( $real_file, $patterns_directory . DIRECTORY_SEPARATOR ) ||
		'php' !== pathinfo( $real_file, PATHINFO_EXTENSION )
	) {
		fwrite( STDERR, "Refusing to format a file outside patterns/: {$file}\n" );
		exit( 1 );
	}

	$original = file_get_contents( $real_file );
	$content = str_replace( array( "\r\n", "\r" ), "\n", $original );
	$tokens = token_get_all( $content );
	$replace = array();
	$insert_before = array();
	$token_count = count( $tokens );

	for ( $index = 0; $index < $token_count; $index++ ) {
		$token = $tokens[ $index ];
		if ( is_array( $token ) && T_CLOSE_TAG === $token[0] ) {
			$previous = $tokens[ $index - 1 ] ?? '';
			$previous_text = is_array( $previous ) ? $previous[1] : $previous;
			if ( '' !== $previous_text && ! preg_match( '/\s$/', $previous_text ) ) {
				$insert_before[ $index ] = ' ';
			}
			continue;
		}
		if (
			! is_array( $token ) ||
			T_STRING !== $token[0] ||
			! in_array( strtolower( $token[1] ), $function_names, true )
		) {
			continue;
		}

		$opening_index = $index + 1;
		while (
			$opening_index < $token_count &&
			is_array( $tokens[ $opening_index ] ) &&
			T_WHITESPACE === $tokens[ $opening_index ][0]
		) {
			$opening_index++;
		}
		if ( '(' !== ( $tokens[ $opening_index ] ?? null ) ) {
			continue;
		}

		$depth = 0;
		$closing_index = null;
		$contains_newline = false;
		for ( $cursor = $opening_index; $cursor < $token_count; $cursor++ ) {
			$current = $tokens[ $cursor ];
			$text = is_array( $current ) ? $current[1] : $current;
			if ( str_contains( $text, "\n" ) ) {
				$contains_newline = true;
			}
			if ( '(' === $current ) {
				$depth++;
			} elseif ( ')' === $current ) {
				$depth--;
				if ( 0 === $depth ) {
					$closing_index = $cursor;
					break;
				}
			}
		}

		if ( null === $closing_index || $contains_newline ) {
			continue;
		}

		$after_opening = $opening_index + 1;
		if ( ')' !== ( $tokens[ $after_opening ] ?? null ) ) {
			if (
				is_array( $tokens[ $after_opening ] ) &&
				T_WHITESPACE === $tokens[ $after_opening ][0]
			) {
				$replace[ $after_opening ] = ' ';
			} else {
				$insert_before[ $after_opening ] = ' ';
			}
		}

		$before_closing = $closing_index - 1;
		if ( '(' !== ( $tokens[ $before_closing ] ?? null ) ) {
			if (
				is_array( $tokens[ $before_closing ] ) &&
				T_WHITESPACE === $tokens[ $before_closing ][0]
			) {
				$replace[ $before_closing ] = ' ';
			} else {
				$insert_before[ $closing_index ] = ' ';
			}
		}
	}

	$formatted = '';
	foreach ( $tokens as $index => $token ) {
		$formatted .= $insert_before[ $index ] ?? '';
		$formatted .= $replace[ $index ] ?? ( is_array( $token ) ? $token[1] : $token );
	}
	$formatted = preg_replace( '/[\t ]+$/m', '', $formatted );
	$formatted = rtrim( $formatted, "\n" ) . "\n";

	if ( $formatted === $original ) {
		continue;
	}

	$needs_formatting[] = $file;
	if ( ! $check_only ) {
		file_put_contents( $real_file, $formatted );
		fwrite( STDOUT, "Formatted {$file}\n" );
	}
}

if ( $check_only && ! empty( $needs_formatting ) ) {
	fwrite(
		STDERR,
		"Pattern formatting is required:\n- " . implode( "\n- ", $needs_formatting ) . "\n"
	);
	exit( 1 );
}
