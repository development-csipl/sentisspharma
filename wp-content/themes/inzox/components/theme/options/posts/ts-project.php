<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */

$options = array(
	'settings-page' => array(
		'title'		 => esc_html__( 'Projects settings', 'inzox' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
         'projects_image'	 => array(
				'label'	 => esc_html__( 'Project image', 'inzox' ),
				'desc'	 => esc_html__( 'Upload a project image', 'inzox' ),
				'help'	 => esc_html__( "This is a default project image.", 'inzox' ),
				'type'	 => 'upload'
			), 
         'projects_percentage_title' => array(
               'type'  => 'text',
               'value' => '',
               'label' => esc_html__('Project percentage Title', 'inzox'),
         ),
         'projects_percentage' => array(
            'type'  => 'number',
            'value' => '',
            'label' => esc_html__('Project percentage', 'inzox'),
         ),   
         'project_overlay_color' => array(
            'type'  => 'color-picker',
            'value' => '#F77528',
            'palettes' => array( '#F77528', '#28D037', '#00B4FF', '#002BFF', '#9A8D17' ),
            'label' =>esc_html__('Highlight Color', 'inzox'),
         ),
         'header_title'	 => array(
            'type'	 => 'text',
            'label'	 => esc_html__( 'Banner title', 'inzox' ),
            'desc'	 => esc_html__( 'Add your project hero title', 'inzox' ),
         ),   
         'header_image'	 => array(
            'label'	 => esc_html__( ' Banner image', 'inzox' ),
            'desc'	 => esc_html__( 'Upload a project header image', 'inzox' ),
            'help'	 => esc_html__( "This default header image will be used for all your project.", 'inzox' ),
            'type'	 => 'upload'
         ),           
      ),
   )
  
);