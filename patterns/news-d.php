<?php
/**
 * Title: Posts with title, magazine archive
 * Slug: metis/news-d
 * Categories: posts
 * Description: An archive section opened by a large title, listing posts as magazine rows.
 */
?>
<!-- wp:group {"metadata":{"name":"Posts with title, magazine archive"},"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"metadata":{"name":"Eyebrow"},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.01rem"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0.01rem;text-transform:uppercase"><?php esc_html_e('The Almanac Archive', 'metis');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":4,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"excludeCurrent":null},"metadata":{"categories":["posts"],"name":"Posts, media columns"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:columns {"verticalAlignment":null,"metadata":{"name":"Posts, media columns"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"},"blockGap":{"left":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|theme-4","width":"1px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--theme-4);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"66.66%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Media and Content"},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"layout":{"selfStretch":"fixed","flexSize":"27.5%"},"@mobile":{"layout":{"selfStretch":"fill"}},"@tablet":{"layout":{"selfStretch":"fill"}}}} /-->

<!-- wp:group {"metadata":{"name":"Title and Meta"},"style":{"layout":{"selfStretch":"fill"},"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:group {"metadata":{"name":"Meta: Date, Author and Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"no-underline"} /-->

<!-- wp:post-terms {"term":"category","separator":" ⊹ ","prefix":"⊹ ","className":"no-underline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":40,"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"No Results and Pagination"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing was found. Please try a search with different keywords.', 'metis');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
