<?php
/**
 * Title: Services Section
 * Slug: bizdomly/services-section
 * Categories: bizdomly, featured
 * Description: A services section with heading and three service cards in a grid.
 * Keywords: services, features, grid, cards
 */
?>
<!-- wp:group {"className":"services-section","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"48px","right":"48px"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group services-section has-white-background-color has-background" style="padding-top:120px;padding-right:48px;padding-bottom:120px;padding-left:48px">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"80px"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-bottom:80px">
        <!-- wp:paragraph {"className":"section-label","style":{"typography":{"fontSize":"14px","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"light-gray"} -->
        <p class="section-label has-light-gray-color has-text-color" style="font-size:14px;font-weight:500;letter-spacing:2px;text-transform:uppercase">What We Do</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"section-title","style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"top":"16px"}}},"fontSize":"x-large"} -->
        <h2 class="wp-block-heading section-title has-x-large-font-size" style="letter-spacing:-1px;margin-top:16px">Section heading that<br>describes your <em>services</em></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"className":"services-grid"} -->
    <div class="wp-block-columns services-grid">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"is-style-bizdomly-service-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-bizdomly-service-card">
                <!-- wp:group {"className":"service-icon","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-icon">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
                    <p style="font-size:20px">🛒</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":3,"className":"service-title","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.5px","fontSize":"22px"},"spacing":{"margin":{"bottom":"12px"}}}} -->
                <h3 class="wp-block-heading service-title" style="font-size:22px;font-weight:500;letter-spacing:-0.5px;margin-bottom:12px">First Service</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"service-description","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"gray"} -->
                <p class="service-description has-gray-color has-text-color" style="font-size:15px;line-height:1.6;margin-bottom:28px">Describe your first service and its benefits to potential customers.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"service-features","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group service-features">
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 1</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 2</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"is-style-bizdomly-service-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-bizdomly-service-card">
                <!-- wp:group {"className":"service-icon","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-icon">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
                    <p style="font-size:20px">⚡</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":3,"className":"service-title","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.5px","fontSize":"22px"},"spacing":{"margin":{"bottom":"12px"}}}} -->
                <h3 class="wp-block-heading service-title" style="font-size:22px;font-weight:500;letter-spacing:-0.5px;margin-bottom:12px">Second Service</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"service-description","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"gray"} -->
                <p class="service-description has-gray-color has-text-color" style="font-size:15px;line-height:1.6;margin-bottom:28px">Describe your second service and its benefits to potential customers.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"service-features","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group service-features">
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 1</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 2</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"className":"is-style-bizdomly-service-card","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-bizdomly-service-card">
                <!-- wp:group {"className":"service-icon","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-icon">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
                    <p style="font-size:20px">🤖</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:heading {"level":3,"className":"service-title","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.5px","fontSize":"22px"},"spacing":{"margin":{"bottom":"12px"}}}} -->
                <h3 class="wp-block-heading service-title" style="font-size:22px;font-weight:500;letter-spacing:-0.5px;margin-bottom:12px">Third Service</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"service-description","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"gray"} -->
                <p class="service-description has-gray-color has-text-color" style="font-size:15px;line-height:1.6;margin-bottom:28px">Describe your third service and its benefits to potential customers.</p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"className":"service-features","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group service-features">
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 1</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"className":"service-feature-tag"} -->
                    <p class="service-feature-tag">Feature 2</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
