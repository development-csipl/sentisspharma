<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */

$options =[
    'general_settings' => [
            'title'		 => esc_html__( 'General settings', 'inzox' ),
            'options'	 => [
                'preloader_show' => [
                    'type'			 => 'switch',
                    'label'		    => esc_html__( 'Preloader show', 'inzox' ),
                    'desc'			 => esc_html__( 'Do you want to show preloader on your site ?', 'inzox' ),
                    'value'         => 'no',
                    'left-choice'	 => [
                       'value'     => 'yes',
                       'label'	   => esc_html__( 'Yes', 'inzox' ),
                    ],
                    'right-choice'	 => [
                       'value'	 => 'no',
                       'label'	 => esc_html__( 'No', 'inzox' ),
                    ],
                ],
                'general_main_logo' => [
                    'label'	        => esc_html__( 'Main logo', 'inzox' ),
                    'desc'	           => esc_html__( 'It\'s the main logo, mostly it will be shown on "dark or coloreful" type area.', 'inzox' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],
                'general_dark_logo' => [
                    'label'	        => esc_html__( 'Footer logo', 'inzox' ),
                    'desc'	           => esc_html__( 'It will be set footer logo.', 'inzox' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],
                 'offcanvas_logo' => [
                    'label'	        => esc_html__( 'Offcanvas logo', 'inzox' ),
                    'desc'	           => esc_html__( 'put offcanvas logo', 'inzox' ),
                    'type'	           => 'upload',
                    'image_only'      => true,
                 ],
                 
                 'general_sticky_sidebar' => [
                    'type'			    => 'switch',
                    'label'			 => esc_html__( 'Sticky sidebar', 'inzox' ),
                    'desc'			    => esc_html__( 'Use sticky sidebar?', 'inzox' ),
                    'value'          => 'yes',
                    'left-choice' => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__( 'Yes', 'inzox' ),
                    ],
                    'right-choice' => [
                        'value'	 => 'no',
                        'label'	 => esc_html__( 'No', 'inzox' ),
                    ],
               ],
               'blog_breadcrumb_show' => [
                    'type'			    => 'switch',
                    'label'			 => esc_html__( 'Breadcrumb', 'inzox' ),
                    'desc'			    => esc_html__( 'Do you want to show breadcrumb?', 'inzox' ),
                    'value'          => 'yes',
                    'left-choice'	 => [
                        'value'	 => 'yes',
                        'label'	 => esc_html__('Yes', 'inzox'),
                    ],
                    'right-choice'	 => [
                        'value'	 => 'no',
                        'label'	 => esc_html__('No', 'inzox'),
                    ],
                ],
                'blog_breadcrumb_length' => [
                    'type'			    => 'text',
                    'label'			 => esc_html__( 'Breadcrumb word length', 'inzox' ),
                    'desc'			    => esc_html__( 'The length of the breadcumb text.', 'inzox' ),
                    'value'          => '3',
                ],

                'general_social_links' => [
                    'type'          => 'addable-popup',
                    'template'      => '{{- title }}',
                    'popup-title'   => null,
                    'label' => esc_html__( 'Social links', 'inzox' ),
                    'desc'  => esc_html__( 'Add social links and it\'s icon class bellow. These are all fontaweseome-4.7 icons.', 'inzox' ),
                    'add-button-text' => esc_html__( 'Add new', 'inzox' ),
                    'popup-options' => [
                        'title' => [ 
                            'type' => 'text',
                            'label'=> esc_html__( 'Title', 'inzox' ),
                        ],
                        'icon_class' => [ 
                            'type' => 'new-icon',
                            'label'=> esc_html__( 'Social icon', 'inzox' ),
                        ],
                        'url' => [ 
                            'type' => 'text',
                            'label'=> esc_html__( 'Social link', 'inzox' ),
                        ],
                    ],
                   
                ],
            ],
        ],
    ];
