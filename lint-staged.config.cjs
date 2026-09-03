module.exports = {
	'patterns/*.php': [
		'php tools/fix-patterns.php',
		'node tools/validate-patterns.mjs',
	],
};
