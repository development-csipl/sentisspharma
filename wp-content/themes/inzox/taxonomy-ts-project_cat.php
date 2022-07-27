<?php
/**
 * the template for displaying archive pages.
 */

get_header(); 
get_template_part( 'template-parts/banner/content', 'banner-project-category' );

?>

<section id="main-content" class="blog main-container wwwww" role="main">
	<div class="container">
		<div class="row">
       
			 
				 <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 ProjectLeftDv">
                    <div class="ProjectLeft">
			    <?php //echo get_cat_name( $category_id = 6 );?>
				<?php
$categories = get_categories( array(
    'taxonomy' =>'ts-project_cat',
    'orderby' => 'name',
    'order'   => 'ASC'
    
) );


foreach( $categories as $category ) {
 echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';   
} 	?>	
</div>
 
			</div>

			<div class="col-md-9 col-sm-12 col-lg-9 col-xl-9 ProjectRight">
    <div class="row">
        <?php
        $pst = get_queried_object_id();
        

$term_object = get_term( $pst ); //echo $term_object->slug;

            $loop = new WP_Query( array( 'post_type' => 'ts-project', 'paged' => $paged ,'tax_query' => array(
                                                                                                            array (
                                                                                                                'taxonomy' => 'ts-project_cat',
                                                                                                                'field' => 'term_id',
                                                                                                                'terms' => $pst
                                                                                                            )
                                                                                                        ),
    ) );
            if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="pindex col-md-4 col-sm-6 col-lg-4 col-xl-4 ProjectItemCol">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="pimage ProjectItem">
                                <a href="<?php the_permalink(); ?>" class="ProjectItemA"><?php the_post_thumbnail(); ?></a>
                                <div class="ProjectItemHvr">
                                    <h3 class="ProjectItemHvrHD"></h3>
                                    <p class="ProjectItemHvr_P"></p>
                                    <a href="<?php the_permalink(); ?>" class="ProjectItemHvr_BTN">Read More +</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php endwhile;
                if (  $loop->max_num_pages > 1 ) : ?>
                    <div id="nav-below" class="navigation">
                        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
                        <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
                    </div>
                <?php endif;
            endif;
            wp_reset_postdata();
        ?>
    </div>
</div>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #main-content -->

<?php get_footer(); ?>