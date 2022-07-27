<?php
/**
 * services style 5
 *
 * The default template for displaying content.
 */

?>

<?php if ( $query->have_posts() ) : ?>
   <div class="ts-services-wrapper ts-services-<?php echo esc_attr($services_style); ?>">
      <div class="row">
         <?php while ($query->have_posts()) : $query->the_post();?>
            <div class="col-md-6 col-lg-<?php echo esc_attr($services_col); ?>">
               <div class="service-item service-style-5">                  
                  <div class="service-details">
                     <?php 
                     if($services_show_image =='yes'):
                     ?>
                        <?php if(has_post_thumbnail()): ?>
                           <div class="img-container">
                              <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" alt="<?php echo esc_attr(the_title_attribute()); ?>">
                           </div>
                        <?php endif; ?>
                     <?php endif; ?>                     
                     <div class="services-content">
                        <h3 class="service-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if($services_show_description =='yes'): ?> 
                           <p><?php  echo esc_html(wp_trim_words(get_the_excerpt(), $desc_limit,'')); ?></p>
                        <?php endif; ?>
                     </div> <!-- .services-content -->
                  </div> <!-- .service-details -->

                  <div class="service-details-hover">
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
                     <h3 class="service-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                     </h3>
                     <div class="hover-content">
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
                  </div> <!-- .service-details-hover -->
               </div>
            </div> <!-- .col-md-6 -->                   
         <?php endwhile; ?>
      </div>                        
   </div><!-- block-item6 -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>