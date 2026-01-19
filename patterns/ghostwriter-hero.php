<?php
/**
 * Title: Ghostwriter Hero
 * Slug: bizdomly/ghostwriter-hero
 * Categories: ghostwriter, featured
 * Description: Hero section for Ghostwriter landing page with headline and plugin mockup.
 * Keywords: hero, ghostwriter, ai, plugin
 */
?>
<!-- wp:group {"className":"ghostwriter-hero hero-section","style":{"spacing":{"padding":{"top":"140px","bottom":"100px","left":"48px","right":"48px"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group ghostwriter-hero hero-section has-background-background-color has-background" style="padding-top:140px;padding-right:48px;padding-bottom:100px;padding-left:48px">

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
            <!-- wp:group {"className":"hero-content","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
            <div class="wp-block-group hero-content">
                <!-- wp:paragraph {"className":"hero-label animate-fade-up","style":{"typography":{"fontSize":"14px","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"gray"} -->
                <p class="hero-label animate-fade-up has-gray-color has-text-color" style="font-size:14px;font-weight:500;letter-spacing:2px;text-transform:uppercase">AI-Powered WordPress Plugin</p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":1,"className":"hero-title animate-fade-up-delay-1","style":{"typography":{"lineHeight":"1.05","letterSpacing":"-2px"},"spacing":{"margin":{"top":"24px","bottom":"32px"}}},"fontSize":"xx-large"} -->
                <h1 class="wp-block-heading hero-title animate-fade-up-delay-1 has-xx-large-font-size" style="letter-spacing:-2px;line-height:1.05;margin-top:24px;margin-bottom:32px">Write Smarter,<br>Publish <em>Faster</em></h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"hero-description animate-fade-up-delay-2","style":{"typography":{"fontSize":"18px","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"48px"}}},"textColor":"gray"} -->
                <p class="hero-description animate-fade-up-delay-2 has-gray-color has-text-color" style="font-size:18px;line-height:1.7;margin-bottom:48px">Ghostwriter uses OpenAI to automate article creation with AI-generated images, customizable workflows, and your unique writing style. Create SEO-optimized content at scale.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"hero-buttons animate-fade-up-delay-3","layout":{"type":"flex","justifyContent":"left"}} -->
                <div class="wp-block-buttons hero-buttons animate-fade-up-delay-3">
                    <!-- wp:button {"backgroundColor":"accent","textColor":"black","className":"is-style-bizdomly-primary"} -->
                    <div class="wp-block-button is-style-bizdomly-primary"><a class="wp-block-button__link has-black-color has-accent-background-color has-text-color has-background wp-element-button">Get Started Free</a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"is-style-bizdomly-secondary"} -->
                    <div class="wp-block-button is-style-bizdomly-secondary"><a class="wp-block-button__link wp-element-button">See How It Works</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
            <!-- wp:group {"className":"ghostwriter-mockup","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group ghostwriter-mockup has-white-background-color has-background" style="border-radius:16px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                <!-- wp:html -->
                <div class="mockup-window">
                    <div class="mockup-header">
                        <div class="mockup-dots">
                            <span class="dot red"></span>
                            <span class="dot yellow"></span>
                            <span class="dot green"></span>
                        </div>
                        <span class="mockup-title">Ghostwriter</span>
                    </div>
                    <div class="mockup-content">
                        <div class="mockup-sidebar">
                            <div class="mockup-menu-item active">Dashboard</div>
                            <div class="mockup-menu-item">Articles</div>
                            <div class="mockup-menu-item">Workflows</div>
                            <div class="mockup-menu-item">Settings</div>
                        </div>
                        <div class="mockup-main">
                            <div class="mockup-card">
                                <div class="mockup-card-header">
                                    <span class="mockup-badge">Generating</span>
                                    <span class="mockup-progress">75%</span>
                                </div>
                                <div class="mockup-card-title">10 Best SEO Strategies for 2024</div>
                                <div class="mockup-card-meta">2,450 words | 5 images</div>
                            </div>
                            <div class="mockup-card completed">
                                <div class="mockup-card-header">
                                    <span class="mockup-badge success">Complete</span>
                                </div>
                                <div class="mockup-card-title">How to Build a Content Calendar</div>
                                <div class="mockup-card-meta">1,890 words | 3 images</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /wp:html -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
