<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Inzox_OwlSlider_Widget extends Widget_Base {

    public function get_name() {
        return 'inzox-slider';
    }
    

    public function get_title() {
        return esc_html__( 'Inzox main sliders', 'inzox' );
    }

    public function get_icon() {
        return 'fas fa-layer-group';
    }

    public function get_categories() {
        return ['inzox-elements'];
    }

    protected function _register_controls() {
        
        $this->start_controls_section('section_tab_style',
            [
                'label' => esc_html__('Inzox Slider', 'inzox'),
            ]
         );

         $repeater = new \Elementor\Repeater();

         $repeater->add_control(
             'slider_top_title', [
                'label' => esc_html__('Slider Sub Title','inzox'),
                'type'         => Controls_Manager::TEXT,
                'default'      => esc_html__('Hello! We are Inzox', 'inzox'),
                'label_block'  => true,
             ]
         );
         $repeater->add_control(
             'slider_main_title', [
                'label' => esc_html__('Slider Main Title','inzox'),
                'type'         => Controls_Manager::TEXT,
                'default'      => esc_html__('Digital Solutions to Grow Business', 'inzox'),
                'label_block'  => true,
             ]
         );
         $repeater->add_control(
             'slider_main_description', [
                'label' => esc_html__('Slider Description','inzox'),
                'type'         => Controls_Manager::TEXTAREA,
                'default'      => '',
                'label_block'  => true,
             ]
         );
         $repeater->add_control(
             'slider_bg_image', [
                'label'       => esc_html__('Background Image', 'inzox'),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'   => 'after',
             ]
         );
         $repeater->add_control(
             'button_text', [
                'label'        => esc_html__('Button Text', 'inzox'),
                'type'         => Controls_Manager::TEXT,
                'default'      => esc_html__('Get Started ', 'inzox'),
                'label_block'  => true,
             ]
         );
         $repeater->add_control(
             'button_url', [
                'label'            => esc_html__( 'Button URL', 'inzox' ),
                'type'             => \Elementor\Controls_Manager::URL,
                'label_block'      => true,
             ]
         );
         $repeater->add_control(
             'button_icon', [
                'label' => __( 'Button Icon', 'inzox' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ],
                'label_block' => true,
                'separator'        => 'after', 
             ]
         );
         $repeater->add_control(
             'slider_right_image', [
                'label'       => esc_html__('Right Side Image', 'inzox'),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'   => 'after',
             ]
         );
         $repeater->add_control(
             'content_align_text', [
                'label' => esc_html__( 'Content Alignment', 'inzox' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'mr-auto',
                'options' => [
                    'mr-auto'  => esc_html__( 'Left', 'inzox' ),
                    'mx-auto text-center' => esc_html__( 'Center', 'inzox' ),
                    'ml-auto text-right' => esc_html__( 'Right', 'inzox' ),
                
                ],
             ]
         );

        $repeater->add_control(
            'justify_content_text', [
                'label' => esc_html__( 'Justify content', 'inzox' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Yes', 'inzox' ),
                'label_off' => esc_html__( 'No', 'inzox' ),
                'return_value' => 'yes',
                'default' => 'yes'
            ]
        );

        $this->add_control(
			'slider_items',
			[
				'label' => esc_html__( 'Main Slider', 'inzox' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slider_main_title' => esc_html__('Digital Solutions to Grow Business', 'inzox'),
					],
					[
						'slider_main_title' => esc_html__('Digital Solutions to Grow Business', 'inzox'),
					],
					[
						'slider_main_title' => esc_html__('Digital Solutions to Grow Business', 'inzox'),
					],
				],
				'title_field' => '{{{ slider_main_title }}}',
			]
        );
        
        $this->add_responsive_control(
			'thumbnail_height',
			[
				'label' =>esc_html__( 'Slider Height', 'inzox' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 645,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 400,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 400,
					'unit' => 'px',
				],
				'selectors' => [
					'{{WRAPPER}} .slider-item' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_control(
			'heading_type',
			[
				'label' => esc_html__('Heading Type', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h1',
				'options' => [
					'h1'  => esc_html__('H1', 'inzox' ),
					'h2' => esc_html__('H2', 'inzox' ),
					'h3' => esc_html__('H3', 'inzox' ),
					'h4' => esc_html__('H4', 'inzox' ),
					'h5' => esc_html__('H5', 'inzox' ),
					'h6' => esc_html__('H6', 'inzox' ),
					'p' => esc_html__('P', 'inzox' ),
				],
			]
      );
      $this->add_control(
			'title_position',
			[
				'label' => esc_html__( 'Title position', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'before',
				'options' => [
					'after'  => esc_html__( 'After', 'inzox' ),
					'before' => esc_html__( 'Before', 'inzox' ),
				
				],
			]
		);
      $this->end_controls_section();

        //style
        $this->start_controls_section('style_section',
            [
               'label'    => esc_html__( 'Style Section', 'inzox' ),
               'tab'      => Controls_Manager::TAB_STYLE,
            ]
       ); 

       $this->add_control(
        'slider_autoplay',
            [
            'label' => esc_html__( 'Autoplay', 'inzox' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'inzox' ),
            'label_off' => esc_html__( 'No', 'inzox' ),
            'return_value' => 'yes',
            'default' => 'no'
            ]
        );

        $this->add_control(
        'slider_nav_show',
            [
            'label' => esc_html__( 'Nav show', 'inzox' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'inzox' ),
            'label_off' => esc_html__( 'No', 'inzox' ),
            'return_value' => 'yes',
            'default' => 'yes'
            ]
        );
        $this->add_control(
         'slider_dot_nav_show',
             [
             'label' => esc_html__( 'Dot nav', 'inzox' ),
             'type' => \Elementor\Controls_Manager::SWITCHER,
             'label_on' => esc_html__( 'Yes', 'inzox' ),
             'label_off' => esc_html__( 'No', 'inzox' ),
             'return_value' => 'yes',
             'default' => 'no'
             ]
         );

        $this->end_controls_section();

        $this->start_controls_section('title_style_section',
         [
            'label'    => esc_html__( 'Title ', 'inzox' ),
            'tab'      => Controls_Manager::TAB_STYLE,
         ]
       );     
        
        $this->add_control('slider_text_color',
            [
               'label'     => esc_html__('Title color', 'inzox'),
               'type'      => Controls_Manager::COLOR,
               'default'   => '',
               'selectors' => [
                     '{{WRAPPER}} .slider-title' => 'color: {{VALUE}};',
               
               ],
            ]
        );
     
      
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__('Title Typography', 'inzox' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider-title',
			]
       );
       $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'TItle Margin', 'inzox' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control('slider_des_color',
            [
               'label'     => esc_html__('Description color', 'inzox'),
               'type'      => Controls_Manager::COLOR,
               'default'   => '',
               'selectors' => [
                     '{{WRAPPER}} .slider-description' => 'color: {{VALUE}};',
               
               ],
            ]
        );
     
      
        $this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'label' => esc_html__('Description Typography', 'inzox' ),
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .slider-description',
			]
       );
       $this->add_responsive_control(
            'des_margin',
            [
                'label' => esc_html__( 'Description Margin', 'inzox' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );      
        

      $this->end_controls_section();  

      $this->start_controls_section('button_style_section',
         [
            'label'    => esc_html__( 'Button ', 'inzox' ),
            'tab'      => Controls_Manager::TAB_STYLE,
         ]
     );

     $this->start_controls_tabs( 'button_style_section_tab' );

        $this->start_controls_tab(
             'button_title_style_normal',
             [
                'label' =>esc_html__( 'Normal', 'inzox' ),
             ]
        );

      $this->add_control('slider_button_text_color',
      [
      'label'     => esc_html__('Button color', 'inzox'),
      'type'      => Controls_Manager::COLOR,
      'default'   => '',
      'selectors' => [
              '{{WRAPPER}} .slider-btn-area .btn' => 'color: {{VALUE}};',
      
          ],
        ]
      );

      $this->add_control('slider_button_text_bgcolor',
         [
         'label'     => esc_html__('Button BG color', 'inzox'),
         'type'      => Controls_Manager::COLOR,
         'default'   => '',
         'selectors' => [
               '{{WRAPPER}} .slider-btn-area .btn' => 'background: {{VALUE}};',
         
            ],
         ]
      );
      
      $this->add_control('slider_button_shadow_color',
         [
         'label'     => esc_html__('Shadow color', 'inzox'),
         'type'      => Controls_Manager::COLOR,
         'default'   => '',
         'selectors' => [
               '{{WRAPPER}} .slider-btn-area .btn' => 'box-shadow: 5px 5px 0px 0px  {{VALUE}};',
         
            ],
         ]
      );
     

    $this->end_controls_tab();

        $this->start_controls_tab(
        'button_title_style_hover',
            [
                'label' =>esc_html__( 'Hover', 'inzox' ),
            ]
        );

    $this->add_control('slider_button_hover_text_bgcolor',
        [
        'label'     => esc_html__('Button BG Hover color', 'inzox'),
        'type'      => Controls_Manager::COLOR,
        'default'   => '',
        'selectors' => [
              '{{WRAPPER}} .slider-btn-area .btn:hover' => 'background: {{VALUE}};',
        
           ],
        ]
     );

     $this->add_control('slider_button_hover_shadow_color',
     [
     'label'     => esc_html__('Btn Hover Shadow color', 'inzox'),
     'type'      => Controls_Manager::COLOR,
     'default'   => '',
     'selectors' => [
           '{{WRAPPER}} .slider-btn-area .btn:hover' => 'box-shadow: 5px 5px 0px 0px  {{VALUE}};',
     
        ],
     ]
  );
  $this->add_control('slider_button_hover_border_color',
  [
  'label'     => esc_html__('Btn Hover border color', 'inzox'),
  'type'      => Controls_Manager::COLOR,
  'default'   => '',
  'selectors' => [
      '{{WRAPPER}} .slider-btn-area .btn:hover' => 'border-color: {{VALUE}};',
  
  ],
  ]
);
    

    $this->end_controls_tab();
    $this->end_controls_tabs();

    $this->add_group_control(
        Group_Control_Border::get_type(),
        [
            'name' => 'btn_border',
            'label' => esc_html__('Border', 'inzox' ),
            'selector' => '{{WRAPPER}} .slider-btn-area .btn',
        ]
    );
  
      $this->add_responsive_control(
        'btn_margin',
        [
            'label' => esc_html__( 'Button Margin', 'inzox' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .slider-btn-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
  
      $this->end_controls_section(); 
   
      $this->start_controls_section('additional_style_section',
            [
               'label'    => esc_html__( 'SubTitle ', 'inzox' ),
               'tab'      => Controls_Manager::TAB_STYLE,
            ]
      );

      $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'title_sub_typography',
            'label' => esc_html__('Sub Title Typography', 'inzox' ),
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .slider-info',
        ]
    );
    $this->add_control('slider_sub_text_color',
        [
        'label'     => esc_html__('Sub Title color', 'inzox'),
        'type'      => Controls_Manager::COLOR,
        'default'   => '',
        'selectors' => [
                '{{WRAPPER}} .slider-info' => 'color: {{VALUE}};',
        
            ],
        ]
    );

    $this->add_responsive_control(
        'top_title_margin',
        [
            'label' => esc_html__( 'Top TItle Margin', 'inzox' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .slider-title >span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'sub_title_border_bottom_show',
            [
            'label' => esc_html__( 'Subtitle Bottom Border Show', 'inzox' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'inzox' ),
            'label_off' => esc_html__( 'No', 'inzox' ),
            'return_value' => 'yes',
            'default' => 'yes',
            ]
    );
    $this->add_control(
        'top_title_bottom_icon',
        [
            'label' => __( 'Top Title Bottom Icon', 'inzox' ),
            'type' => \Elementor\Controls_Manager::ICONS,
            'default' => [
                'value' => 'fas fa-plus',
                'library' => 'solid',
            ],
            'condition' => [
                'sub_title_border_bottom_show' => ['yes'],
            ],
            'label_block' => true,
        ]
    );


      $this->end_controls_section();  
    

    }

    protected function render( ) {

      $settings          =         $this->get_settings();
      $inzox_slider      =         $settings['slider_items'];
      $show_navigation   =         $settings["slider_nav_show"]=="yes"?true:false;
      $auto_nav_slide    =         $settings['slider_autoplay'];
      $title_position    =         $settings['title_position'];
      $dot_nav_show      =         $settings['slider_dot_nav_show'];
      $sub_title_border_bottom_show = $settings['sub_title_border_bottom_show'];
      $top_title_bottom_icon        = $settings['top_title_bottom_icon'];
      
      $slide_controls    = [
               'show_nav'=>$show_navigation, 
               'dot_nav_show'=>$dot_nav_show, 
               'auto_nav_slide'=>$auto_nav_slide, 
          ];
         
      $slide_controls = \json_encode($slide_controls); 
    
      ?>

<div class="hero-area owl-carousel owl-theme" data-controls="<?php echo esc_attr($slide_controls); ?>">
    <?php foreach ( $inzox_slider as $value): ?>

      <div class="slider-item" style="background-image:url(<?php echo is_array($value["slider_bg_image"])?$value["slider_bg_image"]["url"]:''; ?>)">
        <div class="slider-table">
            <div class="slider-table-cell">
                <div class="container">
                    <div class="row <?php echo esc_attr($value["justify_content_text"]=='yes'?"justify-content-end slider-right-content":''); ?>">
                        <div class="col-lg-7 <?php echo esc_attr($value["justify_content_text"]=='yes'?'':$value['content_align_text']); ?>">
                            <div class="slider-content">
                               <?php if($title_position=="before"): ?>
                                    <p class="slider-info">
                                        <?php echo esc_html($value['slider_top_title']); ?>
                                        <?php if($sub_title_border_bottom_show== 'yes'): ?>
                                            <span class="info-after-bar">
                                            <?php \Elementor\Icons_Manager::render_icon( $top_title_bottom_icon, [ 'aria-hidden' => 'true' ] ); ?>
                                            </span>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                <<?php echo esc_attr($settings['heading_type']); ?> class="slider-title">
                                    <?php 
                                        $title =  str_replace(['{' , '}'],['<span>' , '</span>'], $value['slider_main_title']);
                                        echo esc_html($title);
                                    ?>
                                </<?php echo esc_attr($settings['heading_type']); ?>>
                                <?php if($title_position=="after"): ?>
                                    <p class="slider-info">
                                          <?php echo esc_html($value['slider_top_title']); ?>
                                          <?php if($sub_title_border_bottom_show== 'yes'): ?>
                                             <span class="info-after-bar">
                                             <?php \Elementor\Icons_Manager::render_icon( $top_title_bottom_icon, [ 'aria-hidden' => 'true' ] ); ?> 
                                             </span>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>
                                
                                <div class="row">
                                    <?php if($value['slider_main_description'] != ''): ?>
                                    <div class="col-lg-7">
                                        <p class="slider-description">
                                            <?php echo esc_html($value['slider_main_description']) ?>
                                        </p>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($value['button_url'] !=''): ?>
                                        <div class="col-lg-5">
                                            <div class="slider-btn-area">
                                            <a href="<?php echo esc_url($value['button_url']['url']); ?>" class="btn btn-primary">
                                                <?php echo esc_html($value['button_text']); ?><?php \Elementor\Icons_Manager::render_icon( $value['button_icon'], [ 'aria-hidden' => 'true' ] ); ?>  
                                            </a>
                                        </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="slider-owl-image">
                                <?php if($value["slider_right_image"] != ''): ?>
                                    <img src="<?php echo is_array($value["slider_right_image"])?$value["slider_right_image"]["url"]:''; ?>" alt="<?php echo esc_attr($value['slider_main_title']); ?>" />
                                <?php endif; ?> 
                            </div>
                        </div>
                        
                        
                     </div><!-- row end-->
                     
                </div>
                
                <!-- Container end -->  
            </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>    
    
     
    <?php
    }

    protected function _content_template() { }
}