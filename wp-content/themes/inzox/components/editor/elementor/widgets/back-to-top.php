<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;


class inzox_BackToTop_Widget extends Widget_Base {


  public $base;

    public function get_name() {
        return 'inzox-back-to-top';
    }

    public function get_title() {

        return esc_html__( 'Inzox back to top', 'inzox' );

    }

    public function get_icon() { 
        return 'eicon-spacer';
    }

    public function get_categories() {
        return [ 'inzox-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('back to top settings', 'inzox'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
			'button_style',
			[
				'label' => esc_html__( 'Back to Style', 'inzox'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [

					'style1'  => esc_html__( 'Style 1', 'inzox'),
                    'style2'  => esc_html__( 'Style 2', 'inzox')
                    
                ],
                
			]
		);
	
			 
		$this->add_control(
			'backto_button_icon',
			[
				'label' => esc_html__( 'Select Icon', 'inzox' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-sort-up',
				]
			]
		);

        $this->add_control(
            'backto_button_bg',
            [
                'label' => esc_html__('Scroll bg color', 'inzox'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .ts-scroll-box .BackTo' => 'background-color: {{VALUE}};',
                ],
            ]
		);
		
        $this->add_control(
            'backto_button_hov_bg',
            [
                'label' => esc_html__('Scroll Hover bg color', 'inzox'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .ts-scroll-box .BackTo:hover' => 'background-color: {{VALUE}};',
                ],
            ]
		);
		
        $this->add_control(
            'backto_button_color',
            [
                'label' => esc_html__('Backto color', 'inzox'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .ts-scroll-box .BackTo' => 'color: {{VALUE}};',
                ],
            ]
		);
		
        $this->add_control(
            'backto_button_hov_color',
            [
                'label' => esc_html__('Backto Hover color', 'inzox'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .ts-scroll-box .BackTo:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
			'btn_align', [
				'label'			 => esc_html__( 'Alignment', 'inzox' ),
				'type'			 => Controls_Manager::CHOOSE,
				'options'		 => [

               'left'		 => [
                  
                  'title'	 => esc_html__( 'Left', 'inzox' ),
						'icon'	 => 'fa fa-align-left',
               
               ],
				'center'	     => [
                  
                  'title'	 => esc_html__( 'Center', 'inzox' ),
						'icon'	 => 'fa fa-align-center',
               
               ],
				'right'		 => [

						'title'	 => esc_html__( 'Right', 'inzox' ),
                  'icon'	 => 'fa fa-align-right',
                  
					],
			
				],
            'default'		 => 'center',
            'selectors' => [
                     '{{WRAPPER}} .ts-scroll-box .BackTo' => 'text-align: {{VALUE}};',

				],
			]
		);//Responsive control end
		
		
		$this->add_responsive_control(
			'backto_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'inzox' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ts-scroll-box .BackTo' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		  );
		  
		$this->add_responsive_control(
			'backto_border_padding',
			[
				'label' => esc_html__( 'Button Padding', 'inzox' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ts-scroll-box .BackTo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

		$this->end_controls_section();

        $this->end_controls_section();

     
     
    }

    protected function render( ) { 
        
        $settings = $this->get_settings();

    

    ?>
     <?php if($settings['button_style']=='style1'): ?> 
      <div class="ts-scroll-box">
			<div class="BackTo">
				<a href="#">
					<?php Icons_Manager::render_icon( $settings['backto_button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>
      </div>
    <?php endif; ?> 

     <?php if($settings['button_style']=='style2'): ?> 
		<div class="ts-scroll-box">
			<div class="BackTo">
				<a href="#">
					<?php Icons_Manager::render_icon( $settings['backto_button_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				</a>
			</div>
      	</div>
    <?php endif; ?> 

    <?php  
    }
    protected function _content_template() { }
}