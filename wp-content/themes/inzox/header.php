<?php
/**
 * The header template for the theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>> 

    <head>
        <meta name="google-site-verification" content="RsTiqL0poqn4NgJBJHsiD0bdyNqq14ZyQJXJOeO_Jxc" />
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php wp_head(); ?>
		
    </head>

	<body <?php body_class(); ?>>
	
	<?php wp_body_open(); ?>

	<?php 
         
		$inzox_header_style             = inzox_option('header_layout_style', 'standard');
		$inzox_page_override_header     = inzox_meta_option(get_the_ID(),'page_header_override');
		$inzox_page_header_layout_style = inzox_meta_option(get_the_ID(),'page_header_layout_style','standard');

		if($inzox_page_override_header=='yes'):
			$inzox_header_style = $inzox_page_header_layout_style;
			endif;  
		

		get_template_part( 'template-parts/headers/header', $inzox_header_style );
    ?>
    
 