<?php
/**
 * project style 2
 *
 * The default template for displaying content.
 */

?>
<div class="project-wrapper">
   <?php if ( $query->have_posts() ) : ?>
      <div data-controls="<?php echo esc_attr($controls); ?>" class="project-carousel owl-carousel ts-project-<?php echo esc_attr($project_style); ?>">
         <?php while ($query->have_posts()) : $query->the_post(); 
       
         ?>
            <div class="project-items"> 
               <div class="row no-gutters">
                  <div class="col-lg-8">
                  <?php if(has_post_thumbnail()): ?>
                        <div class="project-thumb" style="background-image:url(<?php echo esc_attr(esc_url(get_the_post_thumbnail_url(null, 'inzox-medium'))); ?>)"></div>
                  <?php endif; ?>  
                  </div>
                  <div class="col-lg-4">
                     <div class="project-content">
                        <?php
                        $project_image  = inzox_meta_option(get_the_ID(),'projects_image','');
                        $projects_percentage_title  = inzox_meta_option(get_the_ID(),'projects_percentage_title','');
                        $projects_percentage  = inzox_meta_option(get_the_ID(),'projects_percentage','');
                        $project_chart_color  = inzox_meta_option(get_the_ID(),'project_overlay_color','');

                        if(is_array($project_image) && $project_image['url'] != ''):
                        ?>
                        <div class="poroject-icon">
                           <img src="<?php echo esc_url($project_image['url'] );?>" alt="<?php the_title(); ?>"/>
                        </div>
                        <?php endif; ?>
                        <h3 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if($project_show_description =='yes'): ?> 
                           <div class="project-description">
                              <p><?php  echo esc_html(wp_trim_words(get_the_excerpt(), $desc_limit,'')); ?></p>
                           </div>
                           <?php endif; ?>
                        <?php
                        if($projects_percentage != ''):
                        ?>
                        <div class="progress-wrapper">
                           <div class="progress-chart" data-percent="<?php echo esc_attr($projects_percentage); ?>" data-bar-color="<?php echo esc_attr($project_chart_color);?>">
                             <span><?php echo esc_html($projects_percentage); ?><?php echo esc_html__('%','inzox'); ?></span>  
                           </div>
                           <?php if($projects_percentage_title != ''): ?>
                             <div class="progress-content">
                              <h4><?php echo esc_html($projects_percentage_title); ?></h4>
                             </div>
                           <?php endif; ?>
                        </div>
                        <?php
                        endif;
                        ?>
                        <?php if($project_show_read_more_icon =='yes'): ?>
                           <div class="project-read-more">
                              <a href="<?php the_permalink(); ?>" class="inzox-btn">
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
      </div><!-- block-item6 -->
   <?php wp_reset_postdata(); ?>
   <?php endif; ?>
</div>



