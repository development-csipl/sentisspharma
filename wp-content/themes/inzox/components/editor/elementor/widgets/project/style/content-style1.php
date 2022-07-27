<?php
/**
 * project style 1
 *
 * The default template for displaying content.
 */

?>

<?php if ( $query->have_posts() ) : ?>
   <div class="project-wrapper ts-project-<?php echo esc_attr($project_style); ?>">
      <div class="row">
            <?php while ($query->have_posts()) : $query->the_post();?>
               <div class="col-lg-<?php echo esc_attr($project_col); ?>">
                  <div class="project-item project-style-1">   
                     <?php if(has_post_thumbnail()): ?>
                     <div class="project-thumb" style="background-image:url(<?php echo esc_attr(esc_url(get_the_post_thumbnail_url(null, 'inzox-medium'))); ?>)"></div>
                     <?php endif; ?>   
                     <div class="project-content hover-content">
                     <h3 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if($project_show_description =='yes'): ?> 
                           <p><?php  echo esc_html(wp_trim_words(get_the_excerpt(), $desc_limit,'')); ?></p>
                        <?php endif; ?>
                        <?php if($project_show_read_more_icon =='yes'): ?>
                        <div class="project-read-more">
                           <a href="<?php the_permalink(); ?>" class="read-more-icon">
                              <?php if($read_more_text != ''): ?>
                                 <span><?php echo esc_html($read_more_text); ?></span>
                              <?php endif; ?>
                              <?php \Elementor\Icons_Manager::render_icon( $read_more_icon, [ 'aria-hidden' => 'true' ] ); ?>            
                           </a>
                        </div>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>                   
            <?php endwhile; ?>
      </div>                        
   </div><!-- block-item6 -->
   <?php if($show_load_more_button == 'yes'): ?>
   <div class="ts-load-more-projects">
      <?php if($load_more_button_text != '' && $load_more_button_link != ''): ?>
      <a href="<?php echo esc_url($load_more_button_link['url']); ?>" class="load-more-button" <?php echo esc_attr($target);
                                                      echo esc_attr($nofollow); ?>>
         <?php echo esc_html($load_more_button_text); ?> <i class="fas fa-sync-alt"></i>
      </a>
      <?php endif; ?>
   </div>
   <?php endif; ?>
   
   <?php wp_reset_postdata(); ?>
   <?php endif; ?>



