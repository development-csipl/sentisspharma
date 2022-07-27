<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * register required plugins
 */

function inzox_register_required_plugins() {
	$plugins	 = array(
		array(
			'name'		 => esc_html__( 'Unyson', 'inzox' ),
			'slug'		 => 'unyson',
			'required'	 => true,
		), 
		array(
			'name'		 => esc_html__( 'Elementor', 'inzox' ),
			'slug'		 => 'elementor',
			'required'	 => true,
      	),
		array(
			'name'		 => esc_html__( 'Elementskit Lite', 'inzox' ),
			'slug'		 => 'elementskit-lite',
			'required'	 => true,
		),
      	array(
			'name'		 => esc_html__( 'MetForm', 'inzox' ),
			'slug'		 => 'metform',
			'required'	 => true,
		),
		array(
			'name'		 => esc_html__( 'WP Ultimate Review', 'inzox' ),
			'slug'		 => 'wp-ultimate-review',
			'required'	 => true,
		),
		array(
			'name'		 => esc_html__( 'Inzox Essentials', 'inzox' ),
			'slug'		 => 'inzox-essential',
			'required'	 => true,
			'version'    => '1.3',
			'source'     => 'https://demo.themewinter.com/wp/plugins/inzox/inzox-essential.zip', // The plugin source.
		),

		array(

			'name'		 => esc_html__( 'Slider Revolution', 'inzox' ),
			'slug'		 => 'revslider',
			'required'	 => true,
            'source'	 => 'http://demo.themewinter.com/wp/plugins/online/rev_slider.zip'
		),
	);

	$config = array(
		'id'			 => 'inzox', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'inzox-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => true, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'inzox_register_required_plugins' );