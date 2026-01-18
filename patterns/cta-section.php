<?php
/**
 * Title: Call to Action
 * Slug: bizdomly/cta-section
 * Categories: bizdomly, featured
 * Description: A centered call-to-action section with heading, description, and button.
 * Keywords: cta, call to action, contact, button
 */
?>
<!-- wp:group {"className":"cta-section","style":{"spacing":{"padding":{"top":"140px","bottom":"140px","left":"48px","right":"48px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group cta-section has-background-background-color has-background" style="padding-top:140px;padding-right:48px;padding-bottom:140px;padding-left:48px">
    <!-- wp:heading {"textAlign":"center","className":"cta-title","style":{"typography":{"letterSpacing":"-1px","lineHeight":"1.15"}},"fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-text-align-center cta-title has-x-large-font-size" style="letter-spacing:-1px;line-height:1.15">Ready to get started<br><em>with your project?</em></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","className":"cta-description","style":{"typography":{"fontSize":"17px","lineHeight":"1.7"},"spacing":{"margin":{"top":"24px","bottom":"40px"}}},"textColor":"gray"} -->
    <p class="has-text-align-center cta-description has-gray-color has-text-color" style="font-size:17px;line-height:1.7;margin-top:24px;margin-bottom:40px">Add a compelling message that encourages visitors to take action.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-bizdomly-large"} -->
        <div class="wp-block-button is-style-bizdomly-large"><a class="wp-block-button__link wp-element-button">Get in Touch</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
