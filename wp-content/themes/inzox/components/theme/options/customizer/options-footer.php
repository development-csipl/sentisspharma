<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */

$options =[
    'footer_settings' => [
        'title'		 => esc_html__( 'Footer settings', 'inzox' ),

        'options'	 => [

            'footer_style' => array(
                'type'         => 'multi-picker',
                'label'        => false,
                'desc'         => false,
                'picker'       => array(
                    'style' => array(
                        'label'   => esc_html__( 'Select Style', 'inzox' ),
                        'type'    => 'image-picker',
                        'choices'	 => [
                            'style-1' => [
                                'small'	 => [
                                    'height' => 30,
                                    'src'	 => INZOX_IMG. '/admin/footer/footer.png'
                                ],
                                'large'	 => [
                                    'width'	 => 370,
                                    'src'	 => INZOX_IMG. '/admin/footer/footer.png'
                                ],
                            ],
                        ],
                      
                    )
                ),
               
                'show_borders' => false,
            ), 
           
       

           'footer_bg_img' => [
            'label'	        => esc_html__( 'Footer Background Image', 'inzox' ),
            'desc'	           => esc_html__( 'It\'s the main Footer background image', 'inzox' ),
            'type'	           => 'upload',
            'image_only'      => true,
            ],
            'footer_bg_color' => [
                'label'	 => esc_html__( 'Footer Background color', 'inzox'),
                'type'	 => 'color-picker',
                'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'inzox'),
            ],
            'footer_copyright_color' => [
                'label'	 => esc_html__( 'Footer Copyright color', 'inzox'),
                'type'	 => 'color-picker',
                'desc'	 => esc_html__( 'You can change the footer\'s background color with rgba color or solid color', 'inzox'),
            ],
            'footer_social_links' => [
                'type'  => 'addable-popup',
                'template' => '{{- title }}',
                'popup-title' => null,
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
                'value' => [
                   
                ],
            ],
           
       
            'footer_copyright'	 => [
                'type'	 => 'textarea',
                'value'  => '&copy; 2020, Inzox. All rights reserved',
                'label'	 => esc_html__( 'Copyright text', 'inzox' ),
                'desc'	 => esc_html__( 'This text will be shown at the footer of all pages.', 'inzox' ),
            ],

            'footer_padding_top' => [
                'label'	        => esc_html__( 'Footer Padding Top', 'inzox' ),
                'desc'	        => esc_html__( 'Use Footer Padding Top', 'inzox' ),
                'type'	        => 'text',
                'value'         => '50px',
             ],
             'footer_padding_bottom' => [
               'label'	        => esc_html__( 'Footer Padding Bottom', 'inzox' ),
               'desc'	        => esc_html__( 'Use Footer Padding Bottom', 'inzox' ),
               'type'	        => 'text',
               'value'         => '0px',
            ],
             'back_to_top'				 => [
                'type'			 => 'switch',
                'value'			 => 'no',
                'label'			 => esc_html__( 'Back to top', 'inzox'),
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox'),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox'),
                ],
            ],
            
        ],
            
        ]
    ];