<?php
/**
 * the template for displaying archive pages.
 */

get_header(); 
get_template_part( 'template-parts/banner/content', 'banner-blog' );

$inzox_blog_sidebar = inzox_option('blog_sidebar',3); 

$inzox_column = ($inzox_blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-8 mx-auto' : 'col-lg-8 col-md-12';
?>

<section id="main-content" class="blog main-container  99991111" role="main">
	<div class="container">
		<div class="row">
	   <?php if($inzox_blog_sidebar == 2){
				get_sidebar();
			  }  ?>
			<div class="<?php echo esc_attr($inzox_column);?>">
				<?php if ( have_posts() ) : ?>
				
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/blog/contents/content', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/blog/contents/content', 'none' ); ?>
				<?php endif; ?>
			</div><!-- .col-md-8 -->

         <?php if($inzox_blog_sidebar == 3){
				get_sidebar();
			  }  ?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #main-content -->
<?php get_footer(); ?>