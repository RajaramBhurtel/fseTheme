<?php
 /**
  * Title: WooCommerce Latest Products
  * Slug: evit-fse/woc-latest-products
  * Categories: evit-fse
  */
?>
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column -->
    <div class="wp-block-column"><!-- wp:group {"layout":{"type":"default"}} -->
        <div class="wp-block-group">
            <!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg","id":365,"hasParallax":true,"dimRatio":50,"overlayColor":"black","minHeight":89.4,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"align":"full","style":{"color":{}}} -->
            <div class="wp-block-cover alignfull is-light has-parallax" style="min-height:89.4vh"><span
                    aria-hidden="true"
                    class="wp-block-cover__background has-black-background-color has-background-dim"></span>
                <div role="img" class="wp-block-cover__image-background wp-image-365 has-parallax"
                    style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.jpg)">
                </div>
                <div class="wp-block-cover__inner-container"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top"} -->
                        <div class="wp-block-column is-vertically-aligned-top"><!-- wp:spacer {"height":"68px"} -->
                            <div style="height:68px" aria-hidden="true" class="wp-block-spacer"></div>
                            <!-- /wp:spacer -->

                            <!-- wp:group {"style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"},"fontSize":"medium"} -->
                            <div class="wp-block-group has-medium-font-size"
                                style="border-style:none;border-width:0px;padding-top:var(--wp--preset--spacing--60)">
                                <!-- wp:heading {"textAlign":"center","level":5,"align":"full","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","fontSize":"normal"} -->
                                <h5 class="alignfull has-text-align-center has-background-color has-text-color has-normal-font-size"
                                    style="font-style:normal;font-weight:700">Ecommerce built to perfection.</h5>
                                <!-- /wp:heading -->

                                <!-- wp:heading {"textAlign":"center","level":1,"align":"full","textColor":"white"} -->
                                <h1 class="alignfull has-text-align-center has-white-color has-text-color">More than
                                    just a reliable <br>e-commerce platform</h1>
                                <!-- /wp:heading -->

                                <!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
                                <div class="wp-block-buttons alignwide">
                                    <!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"className":"is-style-fill"} -->
                                    <div class="wp-block-button is-style-fill"><a
                                            class="wp-block-button__link wp-element-button"
                                            href="http://localhost/wordpresst/shop/"
                                            style="border-radius:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--70)">Shop Now</a>
                                    </div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns"
        style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0">
        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis:100%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group"
                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|50","left":"0"}}},"textColor":"primary"} -->
                <h5 class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0">
                    LATEST PRODUCTS</h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|60","left":"0"}}}} -->
                <h2 class="has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--60);margin-left:0">
                    Men Collection</h2>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/product-new {"columns":4,"rows":1,"alignButtons":true,"categories":[64,44,48],"contentVisibility":{"image":true,"title":true,"price":true,"rating":true,"button":true},"stockStatus":["","","instock","onbackorder","outofstock"]} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80","left":"0"}}},"backgroundColor":"input-field","layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-group alignfull has-input-field-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0">
    <!-- wp:heading {"textAlign":"center","level":5,"textColor":"primary"} -->
    <h5 class="has-text-align-center has-primary-color has-text-color">POPULAR CATEGORY</h5>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|60","left":"0"}}}} -->
    <h2 class="has-text-align-center"
        style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--60);margin-left:0">
        Clothes For Summer</h2>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"
        style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:woocommerce/featured-category {"editMode":false,"minHeight":284,"categoryId":52,"showDesc":false} -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                            href="http://localhost/wordpresst/product-category/jewellery/">Shop now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
                <!-- /wp:woocommerce/featured-category -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">
                <!-- wp:woocommerce/featured-category {"editMode":false,"minHeight":286,"categoryId":69,"showDesc":false} -->
                <!-- wp:buttons {"lock":{"move":true,"remove":true},"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                            href="http://localhost/wordpresst/product-category/accessories/">Shop now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
                <!-- /wp:woocommerce/featured-category -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns"
            style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">
                <!-- wp:woocommerce/featured-category {"editMode":false,"minHeight":291,"categoryId":64,"showDesc":false} -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                            href="http://localhost/wordpresst/product-category/exclusive-collection/">Shop now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
                <!-- /wp:woocommerce/featured-category -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:woocommerce/featured-category {"editMode":false,"minHeight":290,"categoryId":52,"showDesc":false} -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"
                            href="http://localhost/wordpresst/product-category/jewellery/">Shop now</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
                <!-- /wp:woocommerce/featured-category -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"0","bottom":"var:preset|spacing|80","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns"
        style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0">
        <!-- wp:column {"width":"100%"} -->
        <div class="wp-block-column" style="flex-basis:100%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group"
                style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:heading {"textAlign":"center","level":5,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|50","left":"0"}}},"textColor":"primary"} -->
                <h5 class="has-text-align-center has-primary-color has-text-color"
                    style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0">
                    TOP RATED PRODUCTS</h5>
                <!-- /wp:heading -->

                <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0","bottom":"var:preset|spacing|60","left":"0"}}}} -->
                <h2 class="has-text-align-center"
                    style="margin-top:var(--wp--preset--spacing--50);margin-right:0;margin-bottom:var(--wp--preset--spacing--60);margin-left:0">
                    Women Collection</h2>
                <!-- /wp:heading -->

                <!-- wp:woocommerce/product-top-rated {"columns":4,"rows":2,"alignButtons":true} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->