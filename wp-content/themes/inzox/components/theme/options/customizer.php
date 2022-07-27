<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * options for wp customizer
 * section name format: inzox_section_{section name}
 */
$options = [
	'inzox_section_theme_settings' => [
		'title'				 => esc_html__( 'Theme settings', 'inzox' ),
		'options'			 => Inzox_Theme_Includes::_customizer_options(),
		'wp-customizer-args' => [
			'priority' => 3,
		],
	],
];
