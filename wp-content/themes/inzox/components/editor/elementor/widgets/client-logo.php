<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Inzox_ClientLogo_Widget extends Widget_Base {

    public function get_name() {
        return 'inzox-clientlogo';
    }
    

    public function get_title() {
        return esc_html__( 'Inzox Client Logo', 'inzox' );
    }

    public function get_icon() {
        return 'eicon-carousel';
    }

    public function get_categories() {
        return ['inzox-elements'];
    }

    protected function _register_controls() {
        
        $this->start_controls_section('section_tab_style',
            [
                'label' => esc_html__('Inzox Client Logo', 'inzox'),
            ]
         );

        $repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slider_main_title', [
                'label' => esc_html__('Title','inzox'),
                'type'         => Controls_Manager::TEXT,
                'default'      => esc_html__('Logo #1', 'inzox'),
                'label_block'  => true,
			]
		);
		$repeater->add_control(
			'slider_image', [
                'label'       => esc_html__('Logo', 'inzox'),
                'type'        => Controls_Manager::MEDIA,
                'label_block' => true,
                'separator'   => 'after',
			]
		);
		$repeater->add_control(
			'logo_url', [
                'label'            => esc_html__( 'URL', 'inzox' ),
                'type'             => \Elementor\Controls_Manager::URL,
                'label_block'      => true,
                'default' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => true,
                ],     
			]
        );
        
        $this->add_control(
			'slider_items',
			[
				'label' => esc_html__( 'Image', 'inzox' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slider_main_title' => esc_html__('Logo #1', 'inzox'),
					],
					[
						'slider_main_title' => esc_html__('Logo #2', 'inzox'),
					],
					[
						'slider_main_title' => esc_html__('Logo #3', 'inzox'),
					],
				],
				'title_field' => '{{{ slider_main_title }}}',
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
            'default' => 'yes'
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

        $this->add_responsive_control(
			'client_logo_slidetoshow',
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
					'size' => 4,
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
					'size' => 4,
					'unit' => 'px',
				],
			]
        );

        $this->start_controls_tabs('client_logo_seperator_color_tabs');

        $this->start_controls_tab(
            'client_logo_seperator_color_normal_tab',
            [
                'label' => esc_html__( 'Normal', 'inzox' ),
            ]
        );

        $this->add_control('client_logo_nav_color',
            [
               'label'      => esc_html__('Nav Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev, {{WRAPPER}} .client-logo .owl-nav .owl-next' => 'color: {{VALUE}};',
               ],
            ]
        );

        $this->add_control('client_logo_nav_bg_color',
            [
               'label'      => esc_html__('Nav BG Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev, {{WRAPPER}} .client-logo .owl-nav .owl-next' => 'background-color: {{VALUE}};',
               ],
            ]
        );

        $this->add_control('client_logo_nav_border_color',
            [
               'label'      => esc_html__('Nav Border Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev, {{WRAPPER}} .client-logo .owl-nav .owl-next' => 'border-color: {{VALUE}};',
               ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'client_logo_seperator_color_hover_tab',
            [
                'label' => esc_html__( 'Hover', 'inzox' ),
            ]
        );

        $this->add_control('client_logo_nav_hover_color',
            [
               'label'      => esc_html__('Nav Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev:hover, {{WRAPPER}} .client-logo .owl-nav .owl-next:hover' => 'color: {{VALUE}};',
               ],
            ]
        );

        $this->add_control('client_logo_nav_hover_bg_color',
            [
               'label'      => esc_html__('Nav BG Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev:hover, {{WRAPPER}} .client-logo .owl-nav .owl-next:hover' => 'background-color: {{VALUE}};',
               ],
            ]
        );

        $this->add_control('client_logo_nav_hover_border_color',
            [
               'label'      => esc_html__('Nav Border Color', 'inzox'),
               'type'       => Controls_Manager::COLOR,
               'selectors'  => [

                     '{{WRAPPER}} .client-logo .owl-nav .owl-prev:hover, {{WRAPPER}} .client-logo .owl-nav .owl-next:hover' => 'border-color: {{VALUE}};',
               ],
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();    

    }

    protected function render( ) {

      $settings          =         $this->get_settings();
      $inzox_slider      =         $settings['slider_items'];
      $show_navigation   =         $settings["slider_nav_show"];
      $auto_nav_slide    =         $settings['slider_autoplay'];
      $desktop           =         $settings['client_logo_slidetoshow']['size'];
      $tablet           =         $settings['client_logo_slidetoshow_tablet']['size'];
      $mobile           =         $settings['client_logo_slidetoshow_mobile']['size'];
      
      $slide_controls    = [
               'show_nav'=>$show_navigation, 
               'auto_play'=>$auto_nav_slide, 
               'desktop_items'=>$desktop,
               'tablet_items'=>$tablet,
               'mobile_items'=>$mobile  
          ];
         
      $slide_controls = \json_encode($slide_controls); 
    
      ?>

<div class="client-logo owl-carousel owl-theme" data-controls="<?php echo esc_attr($slide_controls); ?>">
    <?php foreach ( $inzox_slider as $value): ?>
      <div class="logo-item">
      <a href="<?php echo esc_url($value['logo_url']['url']); ?>">
      <span style="background-image:url(<?php echo is_array($value["slider_image"])?$value["slider_image"]["url"]:''; ?>)"></span>
      </a>
      </div>
    <?php endforeach; ?>
</div>
     
    <?php
    }

    protected function _content_template() { }
}