<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */

$options = array(
	'settings-page' => array(
		'title'		 => esc_html__( 'Page settings', 'inzox' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'header_title'	 => array(
				'type'	 => 'text',
				'label'	 => esc_html__( 'Banner title', 'inzox' ),
				'desc'	 => esc_html__( 'Add your Page hero title', 'inzox' ),
			),
			'header_desc'	 => array(
				'type'	 => 'textarea',
				'label'	 => esc_html__( 'Banner description', 'inzox' ),
				'desc'	 => esc_html__( 'Add your Page hero description', 'inzox' ),
			),

			'header_image'	 => array(
				'label'	 => esc_html__( ' Banner image', 'inzox' ),
				'desc'	 => esc_html__( 'Upload a page header image', 'inzox' ),
				'help'	 => esc_html__( "This default header image will be used for all your service.", 'inzox' ),
				'type'	 => 'upload'
			),
		),
	),
);
