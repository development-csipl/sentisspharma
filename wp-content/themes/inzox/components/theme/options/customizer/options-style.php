<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'style_settings' => [
            'title'		 => esc_html__( 'Style settings', 'inzox' ),
            'options'	 => [
                'style_body_bg' => [
                    'label'	        => esc_html__( 'Body background', 'inzox' ),
                    'desc'	           => esc_html__( 'Site\'s main background color.', 'inzox' ),
                    'type'	           => 'color-picker',
                 ],

                'style_primary' => [
                    'label'	        => esc_html__( 'Primary color', 'inzox' ),
                    'desc'	           => esc_html__( 'Site\'s main color.', 'inzox' ),
                    'type'	           => 'color-picker',
                ],
                'style_primary_dark' => [
                    'label'	        => esc_html__( 'Secondary color', 'inzox' ),
                    'desc'	           => esc_html__( 'Site\'s main secondary color.', 'inzox' ),
                    'type'	           => 'color-picker',
                ],
                
                'title_color' => [
                'label'	        => esc_html__( 'Title color', 'inzox' ),
                'desc'	        => esc_html__( 'title color.', 'inzox' ),
                'type'	        => 'color-picker',
                ],
           
                'body_font'    => array(
                    'type' => 'typography-v2',
                    'label' => esc_html__('Body Font', 'inzox'),
                    'desc'  => esc_html__('Choose the typography for the title', 'inzox'),
                    'value' => array(
                        'family' => 'Roboto',
                        'size'  => '16',
                        'font-weight' => '400',
                    ),
                    'components' => array(
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                    
                    ),
                ),
                
                'heading_font_one'	 => [
                    'type'		 => 'typography-v2',
                    'value'		 => [
                        'family'		 => 'Barlow',
                        'size'  => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H1 Fonts', 'inzox' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'inzox' ),
                ],

                'heading_font_two'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Barlow',
                        'size'        => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H2 Fonts', 'inzox' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'inzox' ),
                ],
                'heading_font_three'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Barlow',
                        'size'        => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H3 Fonts', 'inzox' ),
                    'desc'		    => esc_html__( 'This is for heading google fonts', 'inzox' ),
                ],

                'heading_font_four'	 => [
                    'type'		    => 'typography-v2',
                    'value'		 => [
                        'family'		  => 'Barlow',
                        'size'        => '',
                        'font-weight' => '700',
                    ],
                    'components' => [
                        'family'         => true,
                        'size'           => true,
                        'line-height'    => false,
                        'letter-spacing' => false,
                        'color'          => false,
                        'font-weight'    => true,
                    ],
                    'label'		 => esc_html__( 'Heading H4 Fonts', 'inzox' ),
                    'desc'		 => esc_html__( 'Heading is for heading google fonts', 'inzox' ),
                ],
            ],
        ],
    ];