<?php
/**
 * Title: Hero Section
 * Slug: bizdomly/hero
 * Categories: bizdomly, featured
 * Description: A hero section with heading, description, and call-to-action buttons.
 * Keywords: hero, header, banner, cta
 */
?>
<!-- wp:group {"className":"hero-section","style":{"spacing":{"padding":{"top":"120px","bottom":"80px","left":"48px","right":"48px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group hero-section has-background-background-color has-background" style="padding-top:120px;padding-right:48px;padding-bottom:80px;padding-left:48px">

    <!-- wp:group {"className":"hero-bg-shape hero-bg-shape-1","style":{"position":{"type":"absolute"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group hero-bg-shape hero-bg-shape-1"></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"hero-bg-shape hero-bg-shape-2","style":{"position":{"type":"absolute"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group hero-bg-shape hero-bg-shape-2"></div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"hero-content","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
    <div class="wp-block-group hero-content">
        <!-- wp:paragraph {"className":"hero-label animate-fade-up","style":{"typography":{"fontSize":"14px","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"gray"} -->
        <p class="hero-label animate-fade-up has-gray-color has-text-color" style="font-size:14px;font-weight:500;letter-spacing:2px;text-transform:uppercase">Your Company Tagline</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":1,"className":"hero-title animate-fade-up-delay-1","style":{"typography":{"lineHeight":"1.05","letterSpacing":"-2px"},"spacing":{"margin":{"top":"24px","bottom":"32px"}}},"fontSize":"xx-large"} -->
        <h1 class="wp-block-heading hero-title animate-fade-up-delay-1 has-xx-large-font-size" style="letter-spacing:-2px;line-height:1.05;margin-top:24px;margin-bottom:32px">Your Main Headline<br>Goes <em>Here</em></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"hero-description animate-fade-up-delay-2","style":{"typography":{"fontSize":"18px","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"48px"}}},"textColor":"gray"} -->
        <p class="hero-description animate-fade-up-delay-2 has-gray-color has-text-color" style="font-size:18px;line-height:1.7;margin-bottom:48px">Add a compelling description that explains your value proposition and encourages visitors to take action.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"hero-buttons animate-fade-up-delay-3","layout":{"type":"flex","justifyContent":"left"}} -->
        <div class="wp-block-buttons hero-buttons animate-fade-up-delay-3">
            <!-- wp:button {"className":"is-style-bizdomly-primary"} -->
            <div class="wp-block-button is-style-bizdomly-primary"><a class="wp-block-button__link wp-element-button">Primary Action</a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-bizdomly-secondary"} -->
            <div class="wp-block-button is-style-bizdomly-secondary"><a class="wp-block-button__link wp-element-button">Secondary Action</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
