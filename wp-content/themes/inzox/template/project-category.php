<?php
/**
 * product-category.php
 *
 * Template Name: Product category  Template
 * Template Post Type: page
 */

//get_header(); 

//get_template_part( 'template-parts/banner/content', 'banner-page' );


 
?>
<?php get_template_part( 'p-category', 'category-page' ); ?>
<!--	<div id="post-<?php the_ID(); ?>" <?php //post_class('home-full-width-content');?> role="main">
		<div class="builder-content">
		 	<?php //while ( have_posts() ) : the_post(); ?>
				<?php //the_content(); ?>
			<?php //endwhile; ?> 
		</div>  
	</div> --> 
<?php get_footer(); ?>