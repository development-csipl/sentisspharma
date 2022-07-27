<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue all theme scripts and styles
 */


// stylesheets
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {
	// wp_enqueue_style() $handle, $src, $deps, $version

	// 3rd party css
	wp_enqueue_style( 'inzox-fonts', inzox_google_fonts_url(['Barlow:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'Roboto:300,300i,400,400i,500,500i,700,700i,900,900i']), null, INZOX_VERSION );

	if( is_rtl() ){
		wp_enqueue_style( 'bootstrap-min-rtl', INZOX_CSS . '/bootstrap.min-rtl.css', null, INZOX_VERSION );
	}else{
		wp_enqueue_style( 'bootstrap-min', INZOX_CSS . '/bootstrap.min.css', null, INZOX_VERSION );

	}
	wp_enqueue_style( 'fontawesome-min', INZOX_CSS . '/fontawesome.min.css', null, INZOX_VERSION );
	wp_enqueue_style( 'iconfont', INZOX_CSS . '/iconfont.css', null, INZOX_VERSION );
	wp_enqueue_style( 'magnific-popup', INZOX_CSS . '/magnific-popup.css', null, INZOX_VERSION );
	wp_enqueue_style( 'owl-carousel-min', INZOX_CSS . '/owl.carousel.min.css', null, INZOX_VERSION );

	wp_enqueue_style( 'inzox-woocommerce', INZOX_CSS . '/woocommerce.css', null, INZOX_VERSION );

  // gutenberg css
	wp_enqueue_style( 'inzox-gutenberg-custom', INZOX_CSS . '/gutenberg-custom.css', null, INZOX_VERSION );
	// theme css
	wp_enqueue_style( 'inzox-style', INZOX_CSS . '/master.css', null, INZOX_VERSION );
}

// javascripts
// ----------------------------------------------------------------------------------------
if ( !is_admin() ) {

	// 3rd party scripts
	if ( is_rtl() ) {
		wp_enqueue_script( 'bootstrap-min-rtl', INZOX_JS . '/bootstrap.min-rtl.js', array( 'jquery' ), INZOX_VERSION, true );
	}else{
		wp_enqueue_script( 'bootstrap-min', INZOX_JS . '/bootstrap.min.js', array( 'jquery' ), INZOX_VERSION, true );
	}

	wp_enqueue_script( 'popper-min', INZOX_JS . '/popper.min.js', array( 'jquery' ), INZOX_VERSION, true );
	wp_enqueue_script( 'jquery-magnific-popup-min', INZOX_JS . '/jquery.magnific-popup.min.js', array( 'jquery' ), INZOX_VERSION, true );
	wp_enqueue_script( 'jquery-mixtub',  INZOX_JS . '/jquery-mixtub.js', array( 'jquery' ),  INZOX_VERSION, true );

	wp_enqueue_script( 'owl-carousel-min', INZOX_JS . '/owl.carousel.min.js', array( 'jquery' ), INZOX_VERSION, true );
	wp_enqueue_script( 'jquery-easypiechart-min', INZOX_JS . '/jquery.easypiechart.min.js', array( 'jquery' ), INZOX_VERSION, true );

	wp_enqueue_script( 'instafeed', INZOX_JS . '/instafeed.min.js', array( 'jquery' ), INZOX_VERSION, true );
   

	// theme scripts
	wp_enqueue_script( 'inzox-script', INZOX_JS . '/script.js', array( 'jquery' ), INZOX_VERSION, true );
	
	// Load WordPress Comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


