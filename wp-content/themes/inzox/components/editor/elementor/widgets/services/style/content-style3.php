<?php
/**
 * services style 3
 *
 * The default template for displaying content.
 */

?>

<?php if ( $query->have_posts() ) : ?>
   <div class="ts-services-wrapper ts-services-<?php echo esc_attr($services_style); ?>">
      <div class="row">
         <?php while ($query->have_posts()) : $query->the_post();?>
            <div class="col-md-6 col-lg-<?php echo esc_attr($services_col); ?>">
            <div class="service-item service-style-3 text-center">
               <?php 
               if($services_show_image =='yes'):
                  ?>
                  <?php if(has_post_thumbnail()): ?>
                     <div class="img-container">
                        <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>">
                     </div>
                  <?php endif; ?>
               <?php endif; ?>
               <div class="service-details">
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
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
            </div>                   
         <?php endwhile; ?>
      </div>                        
   </div><!-- block-item6 -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>