<?php
    get_header();
    get_template_part( 'template-parts/banner/content', 'banner-project' );
    echo '<div class="8888888">';
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    echo '</div>';
    get_footer();
?>