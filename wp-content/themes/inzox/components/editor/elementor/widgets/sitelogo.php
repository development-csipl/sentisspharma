<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;


class Inzox_Site_Logo_Widget extends Widget_Base {


  public $base;

    public function get_name() {
        return 'inzox-logo';
    }

    public function get_title() {

        return esc_html__( 'Site Logo', 'inzox'  );

    }

    public function get_icon() { 
        return 'eicon-image';
    }

    public function get_categories() {
        return [ 'inzox-elements' ];
    }

    protected function _register_controls() {

      $this->start_controls_section(
         'section_tab',
         [
               'label' => esc_html__('Logo settings', 'inzox' ),
         ]
      );

	    $this->add_control(
            'site_logo',
            [
                'label' => esc_html__('Logo', 'inzox' ),
                'type' => Controls_Manager::MEDIA,
              
            ]
        );
    
        $this->add_responsive_control(
            'logo_size_width',
            [
                'label' => esc_html__('Logo Width', 'inzox' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .inzox-widget-logo img' => 'max-width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'logo_size_height',
            [
                'label' => esc_html__('Logo Height', 'inzox' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .inzox-widget-logo img' => 'max-height: {{VALUE}}px;',
                    '{{WRAPPER}} .inzox-widget-logo a' => 'line-height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'date_text_align', [
                'label'          => esc_html__( 'Alignment', 'inzox'  ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
    
                    'left'         => [
                        'title'    => esc_html__( 'Left', 'inzox'  ),
                        'icon'     => 'fa fa-align-left',
                    ],
                    'center'     => [
                        'title'    => esc_html__( 'Center', 'inzox'  ),
                        'icon'     => 'fa fa-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__( 'Right', 'inzox'  ),
                        'icon'     => 'fa fa-align-right',
                    ],
                ],
               'default'         => '',
               'selectors' => [
                   '{{WRAPPER}} .inzox-widget-logo' => 'text-align: {{VALUE}};'
               ],
            ]
        );
 

        $this->add_responsive_control(
			'logo_padding',
			[
				'label' =>esc_html__( 'Padding', 'inzox'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .inzox-widget-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
        $this->end_controls_section();
    }

    protected function render( ) { 
        $settings = $this->get_settings();
        $site_logo = $settings['site_logo'];
      
    ?>
    <div class="inzox-widget-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?php 
             if(isset($site_logo['url']) && $site_logo['url'] !=''){
               echo esc_url( $site_logo['url']);
            }else{
               echo esc_url(
                  inzox_src(
                     'general_dark_logo',
                     INZOX_IMG . '/logo/logo-dark.png'
                  )
               );
            }
            ?>" alt="<?php bloginfo('name'); ?>">
        </a>
    </div>

    <?php  
    }
    protected function _content_template() { }
}