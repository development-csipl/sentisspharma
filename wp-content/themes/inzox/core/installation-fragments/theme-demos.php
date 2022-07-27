<?php

function inzox_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'https://demo.themewinter.com/wp/demo-content/inzox';
	$demos_array			 = array(
		'default'			 => array(
			'title'			 => esc_html__( 'Main Demo(1-2)', 'inzox' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/default/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'home-red'			 => array(
			'title'			 => esc_html__( 'Home Red', 'inzox' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/home-red/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'illustration'			 => array(
			'title'			 => esc_html__( 'Home Illustration', 'inzox' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/illustration/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
		'finance'			 => array(
			'title'			 => esc_html__( 'Home Finance', 'inzox' ),
			'screenshot'	 => esc_url( $demo_content_installer ) . '/finance/screenshot.png',
			'preview_link'	 => esc_url( 'http://themeforest.net/user/tripples/portfolio' ),
		),
	);
	$download_url			 = esc_url( $demo_content_installer ) . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo						 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', 'inzox_fw_ext_backups_demos' );