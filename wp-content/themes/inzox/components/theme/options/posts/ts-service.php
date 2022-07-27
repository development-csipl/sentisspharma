<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * metabox options for pages
 */

$options = array(
	'settings-page' => array(
		'title'		 => esc_html__( 'Service settings', 'inzox' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
         'services_image'	 => array(
				'label'	 => esc_html__( 'Service image', 'inzox' ),
				'desc'	 => esc_html__( 'Upload a service image', 'inzox' ),
				'help'	 => esc_html__( "This is a default service image.", 'inzox' ),
				'type'	 => 'upload'
			), 
         'member_designation' => array(
               'type'  => 'text',
               'value' => '',
               'label' => esc_html__('Designation', 'inzox'),
            ),
           'member_social' => array(
               'type'      => 'addable-popup',
               'label'     => esc_html__('Social', 'inzox'),
               'template'  => '{{- social_title }}',
               'size'      => 'small', 
               'limit'     => 0, 
               'add-button-text' => esc_html__('Add', 'inzox'),
               'sortable'  => true,
               'popup-options' => array(
                  'social_title'    => array(
                     'label'        => esc_html__('Title', 'inzox'),
                     'type'         => 'text',
                  ),
                  'social_url' => array(
                     'label' => esc_html__('Link', 'inzox'),
                     'value' =>  esc_html__('#','inzox'),
                     'type' => 'text',
                  ),
                  'social_icon'	 => array(
                     'type'  => 'new-icon',
                     'label' => esc_html__('Social Icon', 'inzox'),
                  ),
               ),
            ),

            'header_title'	 => array(
               'type'	 => 'text',
               'label'	 => esc_html__( 'Banner title', 'inzox' ),
               'desc'	 => esc_html__( 'Add your service hero title', 'inzox' ),
            ),   
            'header_image'	 => array(
               'label'	 => esc_html__( ' Banner image', 'inzox' ),
               'desc'	 => esc_html__( 'Upload a service header image', 'inzox' ),
               'help'	 => esc_html__( "This default header image will be used for all your service.", 'inzox' ),
               'type'	 => 'upload'
            ),
                
         ),
      )
  
);