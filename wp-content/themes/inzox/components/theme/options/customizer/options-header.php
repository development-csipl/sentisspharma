<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: Header
 */

$options =[
    'header_settings' => [
        'title'		 => esc_html__( 'Header settings', 'inzox' ),

        'options'	 => [

            'header_layout_style' => [
                'label'	        => esc_html__( 'Header style', 'inzox' ),
                'desc'	        => esc_html__( 'This is the site\'s main header style.', 'inzox' ),
                'type'	        => 'image-picker',
                'choices'       => [
                    'standard'    => [
                         'small'     => INZOX_IMG . '/admin/header-style/header.png',
                         'large'     => INZOX_IMG . '/admin/header-style/header.png',
                    ],
                ],
                'value'         => 'standard',
             ], //Header style

            //  nav sticky
            'header_nav_sticky' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Show nav sticky?', 'inzox' ),
                'desc'          => esc_html__('Show or hide the header sticky', 'inzox'),
                'value'         => 'no',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox' ),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox' ),
                ],
            ],
            'shop_btn_show' => [
                'type'			 => 'switch',
                'label'			 => esc_html__( 'Show cart button?', 'inzox' ),
                'desc'          => esc_html__('Show or hide the header cart button', 'inzox'),
                'value'         => 'no',
                'left-choice'	 => [
                    'value'	 => 'yes',
                    'label'	 => esc_html__( 'Yes', 'inzox' ),
                ],
                'right-choice'	 => [
                    'value'	 => 'no',
                    'label'	 => esc_html__( 'No', 'inzox' ),
                ],
            ],
            
             'header_table_button_settings' => [
                'type'        => 'popup',
                'label'       => esc_html__('Header table button settings', 'inzox'),
                'popup-title' => esc_html__('Header table button settings', 'inzox'),
                'button'      => esc_html__('Edit header table button', 'inzox'),
                'size'        => 'small', // small, medium, large
                'popup-options' => [
                
                    'header_btn_show' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show button?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the header button', 'inzox'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                
                    'header_btn_title'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Button title', 'inzox' ),
                        'value'   => esc_html__( 'Order Online', 'inzox' ),
                    ],
                    'header_btn_url'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Button Url', 'inzox' ),
                        'desc'	 => esc_html__( 'Put the url of the button', 'inzox' ),
                        'value'   => '#',
                    ],

                    'header_button_bg_color' =>[
                        'type' => 'color-picker',
                        'label' => esc_html__('Header Button BG color', 'inzox'),
                        'desc'  => esc_html__('button bg color set', 'inzox'),
                        'value' => '#e7272d',
                    ],
                    'header_button_text_color' =>[
                        'type' => 'color-picker',
                        'label' => esc_html__('Header Button text color', 'inzox'),
                        'desc'  => esc_html__('button text color set', 'inzox'),
                        'value' => '#fff',

                    ],

                ],
            ],

            'header_offcanvas_settings' => [
                'type'        => 'popup',
                'label'       => esc_html__('Header Offcanvas menu settings', 'inzox'),
                'popup-title' => esc_html__('Header Offcanvas menu settings', 'inzox'),
                'button'      => esc_html__('Edit header Offcanvas menu', 'inzox'),
                'size'        => 'small', // small, medium, large
                'popup-options' => [
                
                    'header_offcanvas_show' => [
                        'type'			 => 'switch',
                        'label'			 => esc_html__( 'Show offcanvas menu?', 'inzox' ),
                        'desc'          => esc_html__('Show or hide the header button', 'inzox'),
                        'value'         => 'no',
                        'left-choice'	 => [
                            'value'	 => 'yes',
                            'label'	 => esc_html__( 'Yes', 'inzox' ),
                        ],
                        'right-choice'	 => [
                            'value'	 => 'no',
                            'label'	 => esc_html__( 'No', 'inzox' ),
                        ],
                    ],
                
                    'offcanvas_desc'	 => [
                        'type'	 => 'textarea',
                        'label'	 => esc_html__( 'Description', 'inzox' ),
                    ],
                 
                    'offcanvas_email_icon'	 => [
                        'type'	 => 'new-icon',
                        'label'	 => esc_html__( 'Email icon', 'inzox' ),
                    ],
                    'offcanvas_email'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Email', 'inzox' ),
                    ],

                    'offcanvas_phone_icon'	 => [
                        'type'	 => 'new-icon',
                        'label'	 => esc_html__( 'Phone icon', 'inzox' ),
                    ],
                    'offcanvas_phone_number'	 => [
                        'type'	 => 'text',
                        'label'	 => esc_html__( 'Phone', 'inzox' ),
                    ],
                 

                ],
            ],



            'header_top_bar_settings' => [
               'type'        => 'popup',
               'label'       => esc_html__('Header top bar settings', 'inzox'),
               'popup-title' => esc_html__('Header top bar settings', 'inzox'),
               'button'      => esc_html__('Edit header topbar button', 'inzox'),
               'size'        => 'small', // small, medium, large
               'popup-options' => [
                   
                   'header_topbar_show' => [
                       'type'			 => 'switch',
                       'label'			 => esc_html__( 'Show topbar?', 'inzox' ),
                       'desc'          => esc_html__('Show or hide the header topbar', 'inzox'),
                       'value'         => 'no',
                       'left-choice'	 => [
                           'value'	 => 'yes',
                           'label'	 => esc_html__( 'Yes', 'inzox' ),
                       ],
                       'right-choice'	 => [
                           'value'	 => 'no',
                           'label'	 => esc_html__( 'No', 'inzox' ),
                       ],
                   ],
                   'header_topbar_address'	 => [
                       'type'	 => 'text',
                       'label'	 => esc_html__( 'Address', 'inzox' ),
                       'value'   => esc_html__( '85 Bay Meadows Drive, GA 30188, United States ', 'inzox' ),
                       'desc'          => esc_html__('Put the contact address for header style 3', 'inzox'),

                   ],
                   'header_topbar_contact'	 => [
                       'type'	 => 'text',
                       'label'	 => esc_html__( 'Contact number', 'inzox' ),
                       'value'   => '+1 212-333-1220',
                       'desc'          => esc_html__('Put the contact number for header style 3', 'inzox'),

                   ],

               ],
           ],

            'header_contact_show' => [
               'type'			 => 'switch',
               'label'			 => esc_html__( 'Show contact?', 'inzox' ),
               'desc'          => esc_html__('Show or hide the header contact', 'inzox'),
               'value'         => 'no',
               'left-choice'	 => [
                   'value'	 => 'yes',
                   'label'	 => esc_html__( 'Yes', 'inzox' ),
               ],
               'right-choice'	 => [
                   'value'	 => 'no',
                   'label'	 => esc_html__( 'No', 'inzox' ),
               ],
           ],
           'header_contact_title' => [
            'type'	 => 'text',
            'label'	 => esc_html__( 'Title', 'inzox' ),
            'value'   => esc_html__( 'Contact us for reservation', 'inzox' ),
            'desc'          => esc_html__('put contact address for header style 1', 'inzox'),

           ], 
           'header_contact_number' => [
            'type'	 => 'text',
            'label'	 => esc_html__( 'Number', 'inzox' ),
            'value'   => esc_html__( '+123-456 7899', 'inzox' ),
            'desc'          => esc_html__('put contact address for header style 1', 'inzox'),

           ], 
        ], //Options end
    ]
];