<?php
/**
 * services style 4
 *
 * The default template for displaying content.
 */

?>
<?php if ( $query->have_posts() ) : ?>
   <div class="ts-services-wrapper ts-services-<?php echo esc_attr($services_style); ?>">
      <div class="row no-gutters">
         <?php while ($query->have_posts()) : $query->the_post();?>
            <div class="col-md-6 col-lg-<?php echo esc_attr($services_col); ?>">
               <div class="service-item service-style-4" style="background-image:url(<?php echo esc_attr(esc_url(get_the_post_thumbnail_url(null,'full'))); ?>)">
                  <?php 
                  if($services_show_image =='yes'):
                  $services_image  = inzox_meta_option(get_the_ID(),'services_image','');
                  if(is_array($services_image) && $services_image['url'] != ''):
                  ?>
                  <div class="icon-container">
                     <img src="<?php echo esc_url($services_image['url'] );?>" alt="<?php the_title(); ?>"/>
                  </div>
                  <?php endif; ?>
                  <?php endif; ?>
                  <h3 class="service-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="services-content">
                  <?php if($services_show_description =='yes'): ?> 
                     <p><?php  echo esc_html(wp_trim_words(get_the_excerpt(), $desc_limit,'')); ?></p>
                  <?php endif; ?>
                  <?php if($services_show_read_more_icon =='yes'): ?>
                  <div class="service-read-more">
                     <a href="<?php the_permalink(); ?>" class="read-more-icon">
                        <?php if($read_more_text != ''): ?>
                           <?php echo esc_html($read_more_text); ?>
                        <?php endif; ?>
                        <?php \Elementor\Icons_Manager::render_icon( $read_more_icon, [ 'aria-hidden' => 'true' ] ); ?>            
                     </a>                     
                  </div><!-- end .service-read-more -->
                  <?php endif; ?>
               </div>
            </div>
         </div>                   
         <?php endwhile; ?>
      </div>                        
   </div><!-- block-item6 -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>