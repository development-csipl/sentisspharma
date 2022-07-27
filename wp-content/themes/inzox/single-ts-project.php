<?php
    get_header();
    get_template_part( 'template-parts/banner/content', 'banner-project-details' );
   ?> 
   <div class="container ProductDetail mt-5">
		<div class="row">
            <div class="col-md-12 col-sm-12 col-lg-3 col-xl-3 ProjectLeftDv mb-4">
                    
                    <div class="ProjectLeft">
			    <?php //echo get_cat_name( $category_id = 6 );?>
			    
				<?php
                    $categories = get_categories( array(
                        'taxonomy' =>'ts-project_cat',
                        'orderby' => 'name',
                        'order'   => 'ASC'
                        
                    ) );

                    echo '<ul>';
                    foreach( $categories as $category ) {
                     echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';  
                     
                    } 
                    echo '</ul>';

                ?>	


            </div>
        </div>

            <div class="col-md-12 col-sm-12 col-lg-9 col-xl-9 ProjectRight ProjectContent">
                <div id="OurCulturalAnchorsHD">
                    <h2><?php echo get_the_title(); ?></h2>
                </div>
                    <?php 
                    
                     while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                     
                    ?>
                    </div>
    
  </div>
  
 </div>
    
   
 <?php   
    get_footer();
?>