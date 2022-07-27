<?php
/**
 * project style 2
 *
 * The default template for displaying content.
 */

?>
<div class="project-wrapper">
<?php if ( $query->have_posts() ) : ?>
   <div data-controls="<?php echo esc_attr($controls); ?>" class="project-carousel-style3 owl-carousel ts-project-<?php echo esc_attr($project_style); ?>">
      <?php 
        while ($query->have_posts()) : $query->the_post();
        $project_overlay_color  = inzox_meta_option(get_the_ID(),'project_overlay_color','');

      ?>
      
         <div class="project-items">            
            <div class="project-content-inner" style="--overlay-color: <?php echo esc_attr($project_overlay_color);?>">
                    <div class="project-thumb" style="background-image:url(<?php echo esc_attr(esc_url(get_the_post_thumbnail_url(null, 'inzox-medium'))); ?>)"></div>
                <div class="project-content">
                <?php
                    $project_image  = inzox_meta_option(get_the_ID(),'projects_image','');
                    if(is_array($project_image) && $project_image['url'] != ''):
                    ?>
                    <div class="poroject-icon">
                        <img src="<?php echo esc_url($project_image['url'] );?>" alt="<?php the_title(); ?>"/>
                    </div>
                    <?php endif; ?>
                   <div class="bottom-content">
                    <?php
                            $terms = get_the_terms( get_the_ID(), 'ts-project_cat' );
                            $cat = '';
                            if(!empty($terms)):
                        ?>
                            <ul class="projects-category-lists list-unstyled">
                                <?php
                                foreach($terms as $tkey=>$term):
                                    ?>
                                    <li><a href="<?php echo esc_url(get_term_link( $term->slug, 'ts-project_cat' )); ?>"><?php echo esc_html($term->name); ?></a></li>
                                    <?php				     	
                                    
                                endforeach;
                                ?>
                            </ul>
                        <?php
                        endif;
                        ?>
                        <h3 class="project-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                   </div>
                </div><!-- ./project-content -->
            </div>
         </div>                   
      <?php endwhile; ?>                       
   </div><!-- block-item6 -->
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>