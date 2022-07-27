<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: blog
 */

$options =[
    'blog_settings' => [
        'title'		 => esc_html__( 'Blog settings', 'inzox' ),

        'options'	 => [
            'blog_sidebar' =>[
                'type'  => 'select',
                              
                'label' => esc_html__('Sidebar', 'inzox'),
                'desc'  => esc_html__('Description', 'inzox'),
                'help'  => esc_html__('Help tip', 'inzox'),
                'choices' => array(
                    '1' => esc_html__('No sidebar','inzox'),
                    '2' => esc_html__('Left Sidebar', 'inzox'),
                    '3' => esc_html__('Right Sidebar', 'inzox'),
                 
                 ),
              
                'no-validate' => false,
            ],   
            'blog_title' => [
                'label'	 => esc_html__( 'Global blog title', 'inzox' ),
                'type'	 => 'text',
            ],
            'blog_header_image' => [
                'label'	 => esc_html__( 'Global header background image', 'inzox' ),
                'type'	 => 'upload',
             ],
            'blog_breadcrumb' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Breadcrumb', 'inzox' ),
                'desc'			 => esc_html__( 'Do you want to show breadcrumb?', 'inzox' ),
                'value'          => 'yes',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox' ),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox' ),
                ],
            ],
            'blog_author' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Blog author', 'inzox' ),
                'desc'			 => esc_html__( 'Do you want to show blog author?', 'inzox' ),
                'value'          => 'no',
                'left-choice' => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox' ),
                ],
                'right-choice' => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox' ),
                ],
           ],
            'blog_social_share' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Social share', 'inzox' ),
                'desc'			 => esc_html__( 'Do you want to show social share buttons?', 'inzox' ),
                'value'          => 'no',
                'left-choice' => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox' ),
                ],
                'right-choice' => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox' ),
                ],
           ],
        ],
            
        ]
    ];