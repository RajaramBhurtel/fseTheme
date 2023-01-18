<?php
 /**
  * Title: Archive
  * Slug: evit-fse/archive
  * Categories: evit-fse
  */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:query-title {"type":"archive","textAlign":"center","level":2,"showPrefix":false,"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"textColor":"foreground","fontSize":"huge"} /-->

<!-- wp:image {"align":"center","id":650,"width":40,"height":52,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/down-arrow.png" alt="" class="wp-image-650" width="40" height="52"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"80%","style":{"typography":{"textDecoration":"none"}}} -->
<div class="wp-block-column" style="text-decoration:none;flex-basis:80%"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"align":"full","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"evit-post-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group evit-post-box" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"400px"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:group {"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

<!-- wp:post-date {"textColor":"body-text"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}},"textColor":"body-text"} /-->

<!-- wp:separator {"style":{"color":{"background":"#a4a9ad"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#a4a9ad;color:#a4a9ad"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"chevron","style":{"elements":{"link":{"color":{"text":"var:preset|color|boulder"}}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"evit-fse","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->