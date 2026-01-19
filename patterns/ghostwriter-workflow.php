<?php
/**
 * Title: Ghostwriter Workflow Detail
 * Slug: bizdomly/ghostwriter-workflow
 * Categories: ghostwriter
 * Description: Dark section showcasing customizable workflow pipeline.
 * Keywords: workflow, pipeline, ghostwriter, dark
 */
?>
<!-- wp:group {"className":"ghostwriter-workflow-detail","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"48px","right":"48px"}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group ghostwriter-workflow-detail has-white-color has-black-background-color has-text-color has-background" style="padding-top:120px;padding-right:48px;padding-bottom:120px;padding-left:48px">

    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"80px"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:paragraph {"className":"section-label","style":{"typography":{"fontSize":"14px","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"},"color":{"text":"#888888"}}} -->
            <p class="section-label" style="color:#888888;font-size:14px;font-weight:500;letter-spacing:2px;text-transform:uppercase">Customizable Workflows</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"top":"16px","bottom":"24px"}}},"fontSize":"x-large"} -->
            <h2 class="wp-block-heading has-x-large-font-size" style="letter-spacing:-1px;margin-top:16px;margin-bottom:24px">Build your <em>content pipeline</em></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"32px"}},"color":{"text":"#b0b0b0"}}} -->
            <p style="color:#b0b0b0;font-size:17px;line-height:1.7;margin-bottom:32px">Create custom workflows that match your content strategy. Add research steps, citation requirements, statistics gathering, and more to produce authoritative content.</p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">
                <!-- wp:group {"className":"workflow-feature","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group workflow-feature">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:16px">&#x2713;</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
                    <p style="font-size:15px">Web research for up-to-date information</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"workflow-feature","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group workflow-feature">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:16px">&#x2713;</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
                    <p style="font-size:15px">Authority citations from trusted sources</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"workflow-feature","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group workflow-feature">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:16px">&#x2713;</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
                    <p style="font-size:15px">Statistics and data point integration</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"className":"workflow-feature","style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group workflow-feature">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}},"textColor":"accent"} -->
                    <p class="has-accent-color has-text-color" style="font-size:16px">&#x2713;</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}}} -->
                    <p style="font-size:15px">Custom prompts for each workflow stage</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:html -->
            <div class="workflow-visual">
                <div class="workflow-node">
                    <div class="workflow-node-icon">&#x1F50D;</div>
                    <div class="workflow-node-content">
                        <div class="workflow-node-title">Research</div>
                        <div class="workflow-node-desc">Gather latest data</div>
                    </div>
                </div>
                <div class="workflow-connector"></div>
                <div class="workflow-node">
                    <div class="workflow-node-icon">&#x1F4DD;</div>
                    <div class="workflow-node-content">
                        <div class="workflow-node-title">Write</div>
                        <div class="workflow-node-desc">Generate content</div>
                    </div>
                </div>
                <div class="workflow-connector"></div>
                <div class="workflow-node">
                    <div class="workflow-node-icon">&#x1F517;</div>
                    <div class="workflow-node-content">
                        <div class="workflow-node-title">Citations</div>
                        <div class="workflow-node-desc">Add references</div>
                    </div>
                </div>
                <div class="workflow-connector"></div>
                <div class="workflow-node">
                    <div class="workflow-node-icon">&#x1F5BC;</div>
                    <div class="workflow-node-content">
                        <div class="workflow-node-title">Images</div>
                        <div class="workflow-node-desc">Generate visuals</div>
                    </div>
                </div>
                <div class="workflow-connector"></div>
                <div class="workflow-node highlight">
                    <div class="workflow-node-icon">&#x2705;</div>
                    <div class="workflow-node-content">
                        <div class="workflow-node-title">Complete</div>
                        <div class="workflow-node-desc">Ready to publish</div>
                    </div>
                </div>
            </div>
            <!-- /wp:html -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
