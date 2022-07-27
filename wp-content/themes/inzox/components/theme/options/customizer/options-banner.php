<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: banner
 */

 
$options = [
    'banner_setting' => [
        'title' => esc_html__('Banner Settings', 'inzox'),

        'options' => [
            'page_banner_setting' => [
                'type'        => 'popup',
                'label'       => esc_html__('Page Banner settings', 'inzox'),
                'popup-title' => esc_html__('Page banner settings', 'inzox'),
                'button'      => esc_html__('Edit page Banner Button', 'inzox'),
                'size'        => 'medium', // small, medium, large
                'popup-options' => [
                    'page_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the banner', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'page_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'banner_page_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'inzox' ),
                        'value'  => esc_html__( '', 'inzox' ),
                    ],
                    'banner_page_desc'	 => [
                        'type'	 => 'textarea',
                        'label'	 => esc_html__( 'Banner description', 'inzox' ),
                        'value'  => esc_html__( '', 'inzox' ),
                    ],

                    'banner_page_image'	 =>array(
                        'label'			 => esc_html__( 'Banner image', 'inzox' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
                              
                        )

                ],
            ], 
        
            'blog_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Blog Banner settings', 'inzox'),
                'popup-title'  => esc_html__('Blog banner settings', 'inzox'),
                'button'       => esc_html__('Edit Blog Banner Button', 'inzox'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'blog_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the banner', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'blog_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'banner_blog_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'inzox' ),
                    ],
                   
                    'banner_blog_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'inzox'),
                        'desc'  => esc_html__('Banner blog image', 'inzox'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),
                              
                     
                    )

                ],
            ],
            'shop_banner_settings' => [
                'type' => 'popup',
                'label' => esc_html__('Shop banner settings', 'inzox'),
                'popup-title' => esc_html__('Shop banner settings', 'inzox'),
                'button' => esc_html__('Edit shop banner settings', 'inzox'),
                'size' => 'small', // small, medium, large
                'popup-options' => array(
                    'show' => array(
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'inzox' ),
                        'value' => 'yes',
                        'left-choice'	 => array(
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ),
                        'right-choice'	 => array(
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ),
                    ),
                    'show_breadcrumb' => array(
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show breadcrumb?', 'inzox' ),
                        'value' => 'yes',
                        'left-choice'	 => array(
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ),
                        'right-choice'	 => array(
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ),
                    ),
                    'title'		 => array(
                        'label'	 => esc_html__( 'Shop Banner title', 'inzox' ),
                        'type'	 => 'text',
                    ),
                    'single_title'		 => array(
                        'label'	 => esc_html__( 'Single Shop Banner title', 'inzox' ),
                        'type'	 => 'text',
                    ),
                    'image'			 => array(
                        'label'			 => esc_html__( 'Banner image', 'inzox' ),
                        'type'			 => 'upload',
                        'images_only'	 => true,
                        'files_ext'		 => array( 'jpg', 'png', 'jpeg', 'gif', 'svg' ),
                    ),
                ),
             ],
             'service_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Service Banner settings', 'inzox'),
                'popup-title'  => esc_html__('Service banner settings', 'inzox'),
                'button'       => esc_html__('Edit Service Banner Button', 'inzox'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'service_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the banner', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'service_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'banner_service_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'inzox' ),
                    ],
                   
                    'banner_service_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'inzox'),
                        'desc'  => esc_html__('Banner service image', 'inzox'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),                     
                    )

                ],
            ],
            'project_banner_setting' => [
                'type'         => 'popup',
                'label'        => esc_html__('Project Banner settings', 'inzox'),
                'popup-title'  => esc_html__('Project banner settings', 'inzox'),
                'button'       => esc_html__('Edit Project Banner Button', 'inzox'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                    'project_show_banner' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show banner?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the banner', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'project_show_breadcrumb' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show Breadcrumb?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the Breadcrumb', 'inzox'),
                        'value'         => 'yes',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                    'banner_project_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Banner title', 'inzox' ),
                    ],
                   
                    'banner_project_image'	 =>array(
                        'type'  => 'upload',
                        'label' => esc_html__('Image', 'inzox'),
                        'desc'  => esc_html__('Banner Project image', 'inzox'),
                        'images_only' => true,
                        'files_ext' => array( 'PNG', 'JPEG', 'JPG','GIF'),                     
                    )

                ],
            ],
            'banner_style_settings' => [
                'type'         => 'popup',
                'label'        => esc_html__('Banner Title Style', 'inzox'),
                'popup-title'  => esc_html__('banner settings', 'inzox'),
                'button'       => esc_html__('Edit Banner Button', 'inzox'),
                'size'         => 'medium', // small, medium, large
                'popup-options' => [
                  'banner_overlay_color' => [
                        'label'	        => esc_html__( 'Banner Overlay color', 'inzox' ),
                        'desc'	        => esc_html__( 'banner overlay  color.', 'inzox' ),
                        'type'	        => 'rgba-color-picker',
                    ],
                    'banner_title_color' => [
                        'label'	        => esc_html__( 'Title color', 'inzox' ),
                        'desc'	        => esc_html__( 'title color.', 'inzox' ),
                        'type'	        => 'color-picker',
                    ],
                    'banner_description_color' => [
                        'label'	        => esc_html__( 'Descripton Title color', 'inzox' ),
                        'desc'	        => esc_html__( ' Descripton title color.', 'inzox' ),
                        'type'	        => 'color-picker',
                    ],
                ],
            ],

        ],
    ],
];