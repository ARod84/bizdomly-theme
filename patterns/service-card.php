<?php
/**
 * Title: Service Card
 * Slug: bizdomly/service-card
 * Categories: bizdomly
 * Description: A single service card with icon, title, description, and feature tags.
 * Keywords: service, card, feature
 */
?>
<!-- wp:group {"className":"is-style-bizdomly-service-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-bizdomly-service-card">
    <!-- wp:group {"className":"service-icon","layout":{"type":"constrained"}} -->
    <div class="wp-block-group service-icon">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
        <p style="font-size:20px">🚀</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:heading {"level":3,"className":"service-title","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.5px","fontSize":"22px"},"spacing":{"margin":{"bottom":"12px"}}}} -->
    <h3 class="wp-block-heading service-title" style="font-size:22px;font-weight:500;letter-spacing:-0.5px;margin-bottom:12px">Service Title</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"service-description","style":{"typography":{"fontSize":"15px","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"28px"}}},"textColor":"gray"} -->
    <p class="service-description has-gray-color has-text-color" style="font-size:15px;line-height:1.6;margin-bottom:28px">Add a brief description of the service you offer and its key benefits.</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"className":"service-features","layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group service-features">
        <!-- wp:paragraph {"className":"service-feature-tag"} -->
        <p class="service-feature-tag">Feature 1</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"service-feature-tag"} -->
        <p class="service-feature-tag">Feature 2</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"className":"service-feature-tag"} -->
        <p class="service-feature-tag">Feature 3</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
