<?php
 /**
  * Title: Default Header
  * Slug: evit-fse/header-default
  * Categories: evit-fse
  */
?>

<!-- wp:columns {"verticalAlignment":null,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"55px","right":"55px"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|cyan-bluish-gray","width":"2px"}}},"gradient":"very-light-gray-to-cyan-bluish-gray","fontSize":"small"} -->
<div class="wp-block-columns has-very-light-gray-to-cyan-bluish-gray-gradient-background has-background has-small-font-size"
    style="border-bottom-color:var(--wp--preset--color--cyan-bluish-gray);border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:55px;padding-bottom:var(--wp--preset--spacing--50);padding-left:55px;font-style:normal;font-weight:500;text-transform:uppercase">
    <!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"left":"0"}}}} -->
    <div class="wp-block-column is-vertically-aligned-center" style="padding-left:0;flex-basis:25%">
        <!-- wp:site-logo {"shouldSyncIcon":true} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"elements":{"link":{"color":{"text":"#fcfcfc"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","lineHeight":"0.4","textDecoration":"none","textTransform":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"textColor":"white","layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center has-white-color has-text-color has-link-color"
        style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:700;line-height:0.4;text-decoration:none;text-transform:none;flex-basis:60%">
        <!-- wp:navigation {"ref":224,"textColor":"white","icon":"menu","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained","justifyContent":"right","contentSize":"120px"}} -->
    <div class="wp-block-column is-vertically-aligned-center"
        style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:25%">
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"align":"center","id":263,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}},"className":"is-style-default"} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border is-style-default"><img
                        src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bag.jpg" alt=""
                        class="wp-image-263" style="border-style:none;border-width:0px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"align":"center","id":261,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img
                        src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/search.jpg" alt=""
                        class="wp-image-261" style="border-style:none;border-width:0px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:image {"align":"center","id":262,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img
                        src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/dots.jpg" alt=""
                        class="wp-image-262" style="border-style:none;border-width:0px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->