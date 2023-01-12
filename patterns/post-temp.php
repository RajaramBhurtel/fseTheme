<?php
 /**
  * Title: Post List
  * Slug: evit-fse/post-list
  * Categories: evit-fse

  */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|80"}},"color":{"background":"#f9f9f9"},"typography":{"textDecoration":"none"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background" style="background-color:#f9f9f9;padding-top:var(--wp--preset--spacing--80);text-decoration:none"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"textColor":"foreground","fontSize":"huge"} -->
<h1 class="has-text-align-center has-foreground-color has-text-color has-huge-font-size" style="font-style:normal;font-weight:900">Blog Standard</h1>
<!-- /wp:heading -->

<!-- wp:image {"align":"center","id":650,"width":40,"height":52,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/down-arrow.png" alt="" class="wp-image-650" width="40" height="52"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","top":"var:preset|spacing|80"}},"typography":{"textDecoration":"none"}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);text-decoration:none"><!-- wp:column {"width":"80%","style":{"color":{"background":"#f9f9f9"},"typography":{"textDecoration":"none"}}} -->
<div class="wp-block-column has-background" style="background-color:#f9f9f9;text-decoration:none;flex-basis:80%"><!-- wp:query {"queryId":39,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"textDecoration":"none"}}} -->
<!-- wp:group {"style":{"typography":{"textDecoration":"none"}},"textColor":"body-text","layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-group has-body-text-color has-text-color" style="text-decoration:none"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"none","textDecoration":"none"}},"textColor":"foreground"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} /-->

<!-- wp:post-date {"textColor":"body-text"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No Posts Found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"backgroundColor":"background","className":"evit-sidebar"} -->
<div class="wp-block-column evit-sidebar has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50);flex-basis:20%"><!-- wp:heading {"level":4} -->
<h4>Search</h4>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","align":"center","style":{"border":{"width":"1px"}},"borderColor":"body-text"} /-->

<!-- wp:heading {"level":4} -->
<h4>Recent Posts</h4>
<!-- /wp:heading -->

<!-- wp:query {"queryId":54,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textDecoration":"none"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-link-color" style="text-decoration:none"><!-- wp:post-terms {"term":"category","textAlign":"left","separator":"","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:post-date {"textColor":"body-text","fontSize":"extra-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"none","textDecoration":"none"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>No Posts Found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->