<?php
    get_header();
    get_template_part( 'template-parts/banner/content', 'banner-service' );
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    get_footer();
?>