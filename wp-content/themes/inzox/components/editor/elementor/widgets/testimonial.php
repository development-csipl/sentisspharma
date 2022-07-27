<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Inzox_Testimonial_Widget extends Widget_Base {

    public function get_name() {
        return 'inzox-testimonial';
    }

    public function get_title() {
        return esc_html__( 'Inzox testimonial', 'inzox' );
    }

    public function get_icon() {
        return 'eicon-testimonial';
    }

    public function get_categories() {
        return ['inzox-elements'];
    }

    protected function _register_controls() {
        
        $this->start_controls_section('section_tab_style',
            [
                'label' => esc_html__('Inzox quote carousel', 'inzox'),
            ]
         );

         
         $this->add_control(
            'testimonial_style',
            [
               'label' => esc_html__( 'Testimonial Style', 'inzox' ),
               'type' => \Elementor\Controls_Manager::SELECT,
               'default' => 'style1',
               'options' => [
                  'style1'  => esc_html__( 'Style 1', 'inzox' ),
                  'style2' =>  esc_html__( 'Style 2', 'inzox' ),
                  'style3' =>  esc_html__( 'Style 3', 'inzox' ),
                  'style4' =>  esc_html__( 'Style 4', 'inzox' ),
                  'style5' =>  esc_html__( 'Style 5', 'inzox' ),
              
               ],
            ]
         );

         $this->add_control('show_client_image',
                     [
                     'label'       => esc_html__('Show client image', 'inzox'),
                     'type'        => Controls_Manager::SWITCHER,
                     'label_on'    => esc_html__('Yes', 'inzox'),
                     'label_off'   => esc_html__('No', 'inzox'),
                     'default'     => 'yes',
             
                     ]
         );

        $this->add_control('show_navigation',
                     [
                     'label'       => esc_html__('Show Navigation', 'inzox'),
                     'type'        => Controls_Manager::SWITCHER,
                     'label_on'    => esc_html__('Yes', 'inzox'),
                     'label_off'   => esc_html__('No', 'inzox'),
                     'default'     => 'yes',
             
                     ]
         ); 
        $this->add_control('show_pagination',
                     [
                     'label'       => esc_html__('Show Pagination', 'inzox'),
                     'type'        => Controls_Manager::SWITCHER,
                     'label_on'    => esc_html__('Yes', 'inzox'),
                     'label_off'   => esc_html__('No', 'inzox'),
                     'default'     => 'yes',
             
                     ]
         ); 
         
         $this->add_control('auto_play',
            [
            'label'       => esc_html__('Auto play', 'inzox'),
            'type'        => Controls_Manager::SWITCHER,
            'label_on'    => esc_html__('Yes', 'inzox'),
            'label_off'   => esc_html__('No', 'inzox'),
            'default'     => 'yes',
   
            ]
         ); 

         $this->add_control('auto_loop',
            [
            'label'       => esc_html__('Slider loop', 'inzox'),
            'type'        => Controls_Manager::SWITCHER,
            'label_on'    => esc_html__('Yes', 'inzox'),
            'label_off'   => esc_html__('No', 'inzox'),
            'default'     => 'yes',
   
            ]
        );

        $this->add_responsive_control(
			'testimonial_slidetoshow',
			[
				'label' => esc_html__( 'Slides To Show', 'inzox' ),
                'type' =>  Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 20,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'desktop_default' => [
					'size' => 3,
					'unit' => 'px',
				],
				'tablet_default' => [
					'size' => 2,
					'unit' => 'px',
				],
				'mobile_default' => [
					'size' => 1,
					'unit' => 'px',
				],
				'default' => [
					'size' => 3,
					'unit' => 'px',
				],
			]
        );

          
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
           'qoute_content', [
               'label'        => esc_html__('Quote Content', 'inzox'),
               'type'         => Controls_Manager::TEXTAREA,
               'default'      => esc_html__(' A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country', 'inzox'),
               'label_block'  => true,
           ]
        );
         $repeater->add_control(
            'qoute_title', [
               'label'       => esc_html__('Client Name', 'inzox'),
               'type'        => Controls_Manager::TEXT,
               'default'     => esc_html__('Quote Carousel #1', 'inzox'),
               'label_block' => true,
            ]
         );
         $repeater->add_control(
            'qoute_designation', [
               'label'        => esc_html__('Client designation', 'inzox'),
               'type'         => Controls_Manager::TEXT,
               'default'      => esc_html__('CEO,apple', 'inzox'),
               'label_block'  => true,
            ]
         );
         $repeater->add_control(
            'qoute_photo', [
               'label'       => esc_html__('Client image', 'inzox'),
               'type'        => Controls_Manager::MEDIA,
               'label_block' => true,
            ]
         );
         $repeater->add_control(
            'qoute_logo', [
               'label'       => esc_html__('Client Logo(Only for style 4)', 'inzox'),
               'type'        => Controls_Manager::MEDIA,
               'label_block' => true,
               'separator'     => 'before',
            ]
         );

         $this->add_control(
            'quote_carousel',
            [
               'label' => esc_html__('Quote Carousel', 'inzox'),
               'type' => \Elementor\Controls_Manager::REPEATER,
               'fields' => $repeater->get_controls(),
               'default' => [
                  [
                     'qoute_title' =>  esc_html__('Quote Carousel #1', 'inzox'),
                  ],
                  [
                     'qoute_title' =>  esc_html__('Quote Carousel #2', 'inzox'),
                  ],
                  [
                     'qoute_title' =>  esc_html__('Quote Carousel #3', 'inzox'),
                  ],
               ],
               'title_field' => '{{{ qoute_title }}}',
            ]
         );
       
        $this->end_controls_section();

        //style
        $this->start_controls_section('style_section',
            [
               'label'      => esc_html__( 'Style Section', 'inzox' ),
               'tab'        => Controls_Manager::TAB_STYLE,
            ]
       ); 
      
      $this->add_control('testimonial_text_color',
            [
               'label'      => esc_html__('Content color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .testimonial-author-content .testimonial-text' => 'color: {{VALUE}};',
               ],
            ]
        );
      $this->add_control('testimonial_qoute_color',
            [
               'label'      => esc_html__('Qoute color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .testimonial-author-content .testimonial-text i' => 'color: {{VALUE}};',
               ],
            ]
        );

     

      $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name' => 'Content_typogrphy',
            'label' => esc_html__( 'Content Typography', 'inzox' ),
            'scheme' => Scheme_Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .testimonial-author-content .testimonial-text',
        ]
       );

       $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'content_background',
				'label' => esc_html__( 'Background', 'inzox' ),
				'types' => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .ts-testimonial-standard',
            'condition' => [
               'testimonial_style' => ['style1','style3']
            ]
			]
      );


      $this->add_control(
			'content_background_style2_headingl',
			[
				'label' => esc_html__( 'Section Left', 'inzox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
            'condition' => [
               'testimonial_style' => ['style2']
            ]
			]
      );

      $this->add_control('left_content_color',
            [
               'label'      => esc_html__('Left content color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [
                  '{{WRAPPER}} .ts-testimonial .testimonial-author-content.one p.testimonial-text' => 'color: {{VALUE}};',
               ],
               'condition' => [
                  'testimonial_style' => ['style2']
               ]
            ]
      );
      
      $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'content_background_style2_sec1',
            'label' => esc_html__( 'Background Left', 'inzox' ),
            'description' => esc_html__( 'Background Left', 'inzox' ),
				'types' => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .testimonial-author-content.one',
            'show_label' => true,
            'label_block' =>true,
            'condition' => [
               'testimonial_style' => ['style2']
            ]
			]
      );

      $this->add_control(
			'content_background_style2_headingr',
			[
				'label' => esc_html__( 'Section right', 'inzox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
            'condition' => [
               'testimonial_style' => ['style2', 'style4']
            ]
			]
      );

      $this->add_control('right_content_color',
            [
               'label'      => esc_html__('Right content color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [
                  '{{WRAPPER}} .ts-testimonial .testimonial-author-content.two p.testimonial-text' => 'color: {{VALUE}};',
               ],
               'condition' => [
                  'testimonial_style' => ['style2', 'style4']
               ]
            ]
      );
      $this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'content_background_style2_sec2',
            'label' => esc_html__( 'Background Right', 'inzox' ),
            'description' => esc_html__( 'Background Right', 'inzox' ),
				'types' => [ 'classic', 'gradient' ],
            'selector' => '{{WRAPPER}} .testimonial-author-content.two',
            'show_label' => true,
            'label_block' =>true,
            'condition' => [
               'testimonial_style' => ['style2', 'style4']
            ]
			]
		);
      
      $this->end_controls_section(); 
       
        //style
        $this->start_controls_section('author_section',
            [
               'label'      => esc_html__( 'Testimonial Footer Section', 'inzox' ),
               'tab'        => Controls_Manager::TAB_STYLE,
            ]
       ); 
      
       $this->add_control('client_title_color',
            [
               'label'      => esc_html__('Client Title color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .testimonial-author-content .testimonial-footer .author-name' => 'color: {{VALUE}};',
               ],
               'condition' => [
                  'testimonial_style' => ['style1', 'style3']
               ]
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_name_typogrphy',
                'label' => esc_html__( 'Title Typography', 'inzox' ),
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'condition' => [
                  'testimonial_style' => ['style1', 'style3']
                ],
                'selector' => '{{WRAPPER}} .testimonial-author-content .testimonial-footer .author-name',
            ]
        );

      $this->add_control('client_designation_color',
        [
           'label'      => esc_html__('Designation color', 'inzox'),
           'type'       => Controls_Manager::COLOR,
           'selectors'  => [
               '{{WRAPPER}} .testimonial-author-content .testimonial-footer .author-designation' => 'color: {{VALUE}};',
           ],
           'condition' => [
            'testimonial_style' => ['style1','style3']
         ]
        ]
      );
      $this->add_control('slide_pagination_color',
        [
           'label'      => esc_html__('Pagination color', 'inzox'),
           'type'       => Controls_Manager::COLOR,
           'selectors'  => [
               '{{WRAPPER}} .ts-testimonial-standard .owl-carousel .owl-dots .owl-dot' => 'background-color: {{VALUE}};',
           ],
           'condition' => [
            'testimonial_style' => ['style1', 'style3']
         ]
        ]
      );

      $this->add_group_control(
         Group_Control_Typography::get_type(),
         [
             'name' => 'client_designation_typogrphy',
             'label' => esc_html__( 'Designation typography', 'inzox' ),
             'scheme' => Scheme_Typography::TYPOGRAPHY_1,
             'selector' => '{{WRAPPER}} .testimonial-author-content .testimonial-footer .author-designation',
             'condition' => [
               'testimonial_style' => ['style1', 'style3']
            ]
         ]
      );

      //style2
      $this->add_control(
			'content_background_style2_heading_l',
			[
				'label' => esc_html__( 'Section Left', 'inzox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
            'condition' => [
               'testimonial_style' => ['style2']
            ]
			]
      );
      
      $this->add_control('client_title_color_style2l',
            [
               'label'      => esc_html__('Client Title color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .testimonial-author-content.one .testimonial-footer .author-name' => 'color: {{VALUE}};',
               ],
               'condition' => [
                  'testimonial_style' => ['style2']
               ]
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_name_typogrphy_style2l',
                'label' => esc_html__( 'Title Typography', 'inzox' ),
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'condition' => [
                  'testimonial_style' => ['style2']
                ],
                'selector' => '{{WRAPPER}} .testimonial-author-content.one .testimonial-footer .author-name',
            ]
        );

      $this->add_control('client_designation_color_style2l',
        [
           'label'      => esc_html__('Designation color', 'inzox'),
           'type'       => Controls_Manager::COLOR,
           'selectors'  => [
               '{{WRAPPER}} .testimonial-author-content.one .testimonial-footer .author-designation' => 'color: {{VALUE}};',
           ],
           'condition' => [
            'testimonial_style' => ['style2']
         ]
        ]
      );

      $this->add_group_control(
         Group_Control_Typography::get_type(),
         [
             'name' => 'client_designation_typogrphy_style2l',
             'label' => esc_html__( 'Designation typography', 'inzox' ),
             'scheme' => Scheme_Typography::TYPOGRAPHY_1,
             'selector' => '{{WRAPPER}} .testimonial-author-content.one .testimonial-footer .author-designation',
             'condition' => [
               'testimonial_style' => ['style2']
            ]
         ]
      );

      $this->add_control(
			'content_background_style2_heading_r',
			[
				'label' => esc_html__( 'Section Right', 'inzox' ),
				'type' => \Elementor\Controls_Manager::HEADING,
            'separator' => 'before',
            'condition' => [
               'testimonial_style' => ['style2', 'style4']
            ]
			]
      );
      
      $this->add_control('client_title_color_style2r',
            [
               'label'      => esc_html__('Client Title color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [
                    '{{WRAPPER}} .testimonial-author-content.two .testimonial-footer .author-name' => 'color: {{VALUE}};',
               ],
               'condition' => [
                  'testimonial_style' => ['style2', 'style4']
               ]
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'client_name_typogrphy_style2r',
                'label' => esc_html__( 'Title Typography', 'inzox' ),
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'condition' => [
                  'testimonial_style' => ['style2', 'style4']
                ],
                'selector' => '{{WRAPPER}} .testimonial-author-content.two .testimonial-footer .author-name',
            ]
        );

      $this->add_control('client_designation_color_style2r',
        [
           'label'      => esc_html__('Designation color', 'inzox'),
           'type'       => Controls_Manager::COLOR,
           'selectors'  => [
               '{{WRAPPER}} .testimonial-author-content.two .testimonial-footer .author-designation' => 'color: {{VALUE}};',
           ],
           'condition' => [
            'testimonial_style' => ['style2', 'style4']
          ]
        ]
      );

      $this->add_group_control(
         Group_Control_Typography::get_type(),
         [
             'name' => 'client_designation_typogrphy_style2r',
             'label' => esc_html__( 'Designation typography', 'inzox' ),
             'scheme' => Scheme_Typography::TYPOGRAPHY_1,
             'selector' => '{{WRAPPER}} .testimonial-author-content.two .testimonial-footer .author-designation',
             'condition' => [
               'testimonial_style' => ['style2', 'style4']
            ]
         ]
      );

    
      
      $this->end_controls_section();  

    }

    protected function render( ) {

        $settings           =     $this->get_settings();
        $quote_carousel     =     $settings['quote_carousel'];
        $show_navigation    =     $settings["show_navigation"];
        $show_pagination    =     $settings["show_pagination"];
        $auto_play          =     $settings["auto_play"];
        $auto_loop          =     $settings["auto_loop"];
        $desktop              =     $settings["testimonial_slidetoshow"]['size'];
        $tablet               =     $settings["testimonial_slidetoshow_tablet"]['size'];
        $mobile               =     $settings["testimonial_slidetoshow_mobile"]['size'];
        $testimonial_style  =     $settings["testimonial_style"];
        $show_client_image  =     $settings["show_client_image"];
        
        $controls = [
           'nav'       => $show_navigation,
           'dot'       => $show_pagination,
           'auto_play' => $auto_play,
           'auto_loop' => $auto_loop,
           'item_desktop' => $desktop,
           'item_tablet' => $tablet,
           'item_mobile' => $mobile,
        ];
        $controls = json_encode($controls); 
        ?>
         <?php if($testimonial_style=="style1"): ?>
           
            <div  class="ts-testimonial-standard ts-testimonial-classic text-center" >
                     <div data-controls="<?php echo esc_attr($controls); ?>" class="testimonial-carousel owl-carousel">
                     <?php foreach($quote_carousel as $quote_item): ?>
                        <div class="testimonial-author-content">
                              <p class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                              <?php echo esc_html($quote_item['qoute_content']); ?>
                              </p>
                              <div class="testimonial-footer">
                                 <?php
                                    $client_img = $quote_item['qoute_photo'];
                                 ?>
                              <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                    <img src=" <?php echo esc_url($client_img["url"]); ?> " alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                 <?php endif; ?>
                                 <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                 <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?>
                                 </span>
                              </div>
                        </div>
                     <?php endforeach; ?>
                     </div>
            </div>
          <?php endif; ?>
          <?php if($testimonial_style=="style2"): ?>
            <div  class="ts-testimonial ts-testimonial-classic">
                  <div class="row">
                  <?php foreach($quote_carousel as $t_key => $quote_item): ?>
                     
                  <?php if($t_key==0): ?>
                     <div class="col-md-6 ">
                        <div class="testimonial-author-content one">
                              <p class="testimonial-text">
                                 <i class="fa fa-quote-left" aria-hidden="true"> </i> 
                                 <?php echo esc_html($quote_item['qoute_content']); ?>
                               </p>
                              <div class="testimonial-footer media">
                                 <?php
                                    $client_img = $quote_item['qoute_photo'];
                                    
                                 ?>
                                    <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                    <img src="<?php echo esc_url($client_img["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                 <?php endif; ?> 
                                 <div class="testimonial-info align-self-center">
                                    <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                    <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?></span>
                                 </div>
                              </div>
                        </div>
                     </div>
                  <?php endif; ?>
                  <?php if($t_key==1): ?>
                     <div class="col-md-6 ">
                        <div class="testimonial-author-content two">
                            <p class="testimonial-text">
                                 <i class="fa fa-quote-left" aria-hidden="true"> </i> 
                                 <?php echo esc_html($quote_item['qoute_content']); ?>
                               </p>
                              <div class="testimonial-footer media">
                                 <?php
                                    $client_img = $quote_item['qoute_photo'];
                                    
                                 ?>
                                    <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                    <img src="<?php echo esc_url($client_img["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                 <?php endif; ?> 
                                 <div class="testimonial-info align-self-center">
                                 <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                    <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?></span>
                                 </div>
                              </div>
                        </div>
                     </div>
                  <?php break; endif; ?>   
                  <?php endforeach; ?> 
                  </div>
             </div>

          <?php endif; ?>

          <?php if($testimonial_style=="style3"): ?>
            <div  class="ts-testimonial-standard ts-testimonial-classic text-center" >
                     <div data-controls="<?php echo esc_attr($controls); ?>" class="testimonial-carousel owl-carousel">
                     <?php foreach($quote_carousel as $quote_item): ?>
                        <div class="testimonial-author-content">
                             <div class="testimonial-footer">
                                 <?php
                                    $client_img = $quote_item['qoute_photo'];
                                 ?>
                              <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                    <img src=" <?php echo esc_url($client_img["url"]); ?> " alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                 <?php endif; ?>
                                 <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                 <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?>
                                 </span>
                              </div>
                              <p class="testimonial-text"><i class="fa fa-quote-left" aria-hidden="true"></i>
                              <?php echo esc_html($quote_item['qoute_content']); ?>
                              </p>
                            
                        </div>
                     <?php endforeach; ?>
                     </div>
            </div>
          <?php endif; ?>


          <?php if($testimonial_style=="style4"): ?>
            <div  class="ts-testimonial ts-testimonial-classic testimonial-carousel owl-carousel style4" data-controls="<?php echo esc_attr($controls); ?>">
               <?php foreach($quote_carousel as $t_key => $quote_item): ?>
                     <div class="row">
                     <div class="col-lg-4">
                        <div class="testimonial-thumb">
                           <?php
                           $qoute_logo = $quote_item['qoute_logo'];
                           if(isset($qoute_logo['url']) && $qoute_logo['url']!='') : ?>
                              <div class="client-logo"><img src="<?php echo esc_url($qoute_logo["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-logo"></div>
                           <?php endif; ?>
                            <?php
                                    $client_img = $quote_item['qoute_photo'];
                                    
                                 ?>
                                    <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                    <img src="<?php echo esc_url($client_img["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                 <?php endif; ?> 
                        </div>
                     </div>
                     <div class="col-lg-8 ">
                        <div class="testimonial-author-content two">
                            <p class="testimonial-text">
                                 <i class="fa fa-quote-left" aria-hidden="true"> </i> 
                                 <?php echo esc_html($quote_item['qoute_content']); ?>
                               </p>
                              <div class="testimonial-footer media">
                             
                                 <div class="testimonial-info align-self-center">
                                 <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                    <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?></span>
                                 </div>
                              </div>
                        </div>
                     </div>
                  
                  </div>
                  <?php endforeach; ?> 
             </div>

          <?php endif; ?>


          <?php if($testimonial_style=="style5"): ?>
            <div  class="ts-testimonial testimonial-slider  testimonial-carousel owl-carousel style5" data-controls="<?php echo esc_attr($controls); ?>">
               <?php foreach($quote_carousel as $t_key => $quote_item): ?>
                     <div class="slider-content">
                     <div class="row">
                        <div class="col-lg-2">
                           <div class="testimonial-thumb">
                              <?php
                              $qoute_logo = $quote_item['qoute_logo'];
                              if(isset($qoute_logo['url']) && $qoute_logo['url']!='') : ?>
                                 <div class="client-logo"><img src="<?php echo esc_url($qoute_logo["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-logo"></div>
                              <?php endif; ?>
                              <?php
                                       $client_img = $quote_item['qoute_photo'];
                                       
                                    ?>
                                       <?php if(isset($client_img['url']) && $client_img['url']!='' && $show_client_image=='yes') : ?>
                                       <img src="<?php echo esc_url($client_img["url"]); ?>" alt="<?php echo esc_attr($quote_item['qoute_title']); ?>" class="img-fluid testimonial-img">
                                    <?php endif; ?> 
                           </div>
                        </div>
                        <div class="col-lg-10 ">
                           <div class="testimonial-author-content two">
                              <p class="testimonial-text">
                                    <?php echo inzox_kses($quote_item['qoute_content']); ?>
                                 </p>
                                 <div class="testimonial-footer media">
                              
                                    <div class="testimonial-info align-self-center">
                                    <h4 class="author-name"><?php echo esc_html($quote_item['qoute_title']); ?></h4>
                                       <span class="author-designation"><?php echo esc_html($quote_item['qoute_designation']); ?></span>
                                    </div>
                                 </div>
                           </div>
                        </div>
                  </div>
                     </div>
                  <?php endforeach; ?> 
             </div>

          <?php endif; ?>



        <?php
    }
    protected function _content_template() { }
}