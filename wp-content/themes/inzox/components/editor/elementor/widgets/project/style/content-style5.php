<?php

/**
 * project style 2
 *
 * The default template for displaying content.
 */

?>
<div class="project-wrapper">
    <?php if ($query->have_posts()) : ?>
        <div data-controls="<?php echo esc_attr($controls); ?>" class="project-carousel-style5  owl-carousel ts-project-<?php echo esc_attr($project_style); ?>">
            <?php
            while ($query->have_posts()) : $query->the_post();
                $project_overlay_color  = inzox_meta_option(get_the_ID(), 'project_overlay_color', '');

            ?>

                <div class="project-item  project-style-5">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="project-thumb" style="background-image:url(<?php echo esc_attr(esc_url(get_the_post_thumbnail_url(null, 'inzox-medium'))); ?>)"></div>
                    <?php endif; ?>
                    <?php if ($project_show_read_more_icon == 'yes') : ?>
                        <div class="project-read-more">
                            <a href="<?php the_permalink(); ?>" class="read-more-icon">
                                <?php if ($read_more_text != '') : ?>
                                    <span><?php echo esc_html($read_more_text); ?></span>
                                <?php endif; ?>
                                <?php \Elementor\Icons_Manager::render_icon($read_more_icon, ['aria-hidden' => 'true']); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="project-content hover-content">
                        <h3 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if ($project_show_description == 'yes') : ?>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), $desc_limit, '')); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div><!-- block-item6 -->
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>