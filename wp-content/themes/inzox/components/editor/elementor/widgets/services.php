<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;


class Inzox_Services_Widget extends Widget_Base {


    public $base;

    public function get_name() {
        return 'inzox-services';
    }

    public function get_title() {
        return esc_html__( 'Services', 'inzox' );
    }

    public function get_icon() { 
        return 'eicon-info-box';
    }

    public function get_categories() {
        return [ 'inzox-elements' ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'section_tab',
            [
                'label' => esc_html__('Inzox Services', 'inzox'),
            ]
		);

		$this->add_control(
            'services_style',
            [
               'label' => esc_html__( 'Services Style', 'inzox' ),
               'type' => Custom_Controls_Manager::IMAGECHOOSE,
               'default' => 'style1',
               'options' => [
                  'style1'  => [
					 'title' => esc_html__( 'Style 1', 'inzox' ),
					 'imagelarge' => INZOX_IMG. '/admin/services/service_style_1.png',
					 'imagesmall' => INZOX_IMG. '/admin/services/service_style_1.png',
					 'width' => '30%',
                  ],
                  'style2'  => [
					 'title' => esc_html__( 'Style 2', 'inzox' ),
					 'imagelarge' => INZOX_IMG. '/admin/services/service_style_2.png',
					 'imagesmall' => INZOX_IMG. '/admin/services/service_style_2.png',
					 'width' => '30%',
				  ],
				  'style3'  => [
					'title' => esc_html__( 'Style 3', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/services/service_style_3.png',
					'imagesmall' => INZOX_IMG. '/admin/services/service_style_3.png',
					'width' => '30%',
				 ],
				 'style4'  => [
					'title' => esc_html__( 'Style 4', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/services/service_style_4.png',
					'imagesmall' => INZOX_IMG. '/admin/services/service_style_4.png',
					'width' => '30%',
				 ],
				 'style5'  => [
					'title' => esc_html__( 'Style 5', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/services/service_style_5.png',
					'imagesmall' => INZOX_IMG. '/admin/services/service_style_5.png',
					'width' => '30%',
				 ],

				 'style6'  => [
					'title' => esc_html__( 'Style 6', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/services/service_style_6.png',
					'imagesmall' => INZOX_IMG. '/admin/services/service_style_6.png',
					'width' => '30%',
				 ],
            
               ],
            ]
		);

		$this->add_control(
            'service_term_id',
            [
                'label'   => esc_html__('Services Category', 'inzox'),
                'type'    => Controls_Manager::SELECT2,
                'options' => $this->services_categories(),
                'multiple'  => true,
                'label_block' => true,
            ]
        );

		$this->add_control(
			'services_show_description',
				[
				'label' => esc_html__( 'Show Description', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'inzox' ),
				'label_off' => esc_html__( 'No', 'inzox' ),
				'return_value' => 'yes',
				'default' => 'yes'
				]
		);

		$this->add_control(
			'desc_limit',
			[
				'label'         => esc_html__( 'Description limit', 'inzox' ),
				'type'          => Controls_Manager::NUMBER,
				'default' => '12',
				'condition' => [ 'services_show_description' => ['yes'] ],
			
			]
		);
		
		$this->add_control(
			'number_of_services',
			[
			  'label'         => esc_html__( 'Number of Services', 'inzox' ),
			  'type'          => Controls_Manager::NUMBER,
			  'default'       => '6',
  
			]
		);

		$this->add_control(
			'services_col',
			[
				'label'   => esc_html__( 'Services Column', 'inzox' ),
				'type'    => Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'3'  => esc_html__( '4 Column ', 'inzox' ),
					'4'  => esc_html__( '3 Column', 'inzox' ),
					'6'  => esc_html__( '2 Column', 'inzox' ),
			
				],
			]
		);
		
		$this->add_control(
            'post_order',
            [
                'label'     =>esc_html__( 'Services Order', 'inzox' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'DESC',
                'options'   => [
                        'DESC'      =>esc_html__( 'Descending', 'inzox' ),
                        'ASC'       =>esc_html__( 'Ascending', 'inzox' ),
                ],
            ]
		);
		
		$this->add_responsive_control(
            'post_orderby',
            [
                'label'     =>esc_html__( 'Services Order By', 'inzox' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'date',
                'options'   => [
                        'date'      		=>esc_html__( 'Date', 'inzox' ),
                        'title'       		=>esc_html__( 'Title', 'inzox' ),
                        'name'       		=>esc_html__( 'Name', 'inzox' ),
                        'rand'       		=>esc_html__( 'Random', 'inzox' ),
						'ID'       			=>esc_html__( 'ID', 'inzox' ),
						'comment_count'     =>esc_html__( 'Comment Count', 'inzox' ),
                    ],
            ]
		);
		
		$this->add_control(
			'services_show_image',
				[
				'label' => esc_html__( 'Show Service Image', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'inzox' ),
				'label_off' => esc_html__( 'No', 'inzox' ),
				'return_value' => 'yes',
				'default' => 'yes'
				]
		);

		$this->add_control(
			'services_show_read_more_icon',
				[
				'label' => esc_html__( 'Show Read More Icon', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'inzox' ),
				'label_off' => esc_html__( 'No', 'inzox' ),
				'return_value' => 'yes',
				'default' => 'yes'
				]
		);

		$this->add_control(
			'read_more_icon',
			[
				'label' => __( 'Read More Icon', 'inzox' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-plus',
					'library' => 'solid',
				],
				'condition' => [
                    'services_show_read_more_icon' => ['yes'],
				],
				'label_block' => true,
			]
        );

		$this->add_control(
            'read_more_text',
            [
                'label' => esc_html__('Read More Text', 'inzox'),
				'type' => Controls_Manager::TEXT,
				'condition' => [
                    'services_show_read_more_icon' => ['yes'],  'services_style' => ['style1', 'style2', 'style3', 'style6'],
				],
            ]
        );

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_sub_title_style', [
				'label'	 => esc_html__( 'Title', 'inzox' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'services_title_style' );

        $this->start_controls_tab(
             'services_title_style_normal',
             [
                'label' =>esc_html__( 'Normal', 'inzox' ),
             ]
        );
   
        $this->add_control(
			'title_color', [
				'label'		 => esc_html__( 'Title color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item .service-title a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(Group_Control_Typography::get_type(),
         [
			'name'		 => 'title_typography',
			'selector'	 => '{{WRAPPER}} .service-item .service-title a',
			]
		);
         
        $this->end_controls_tab();

        $this->start_controls_tab(
        'services_title_style_hover',
            [
                'label' =>esc_html__( 'Hover', 'inzox' ),
            ]
        );
		
		$this->add_control(
			'title_color_hover', [
				'label'		 => esc_html__( 'Title color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item:hover .service-title a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(Group_Control_Typography::get_type(),
         [
			'name'		 => 'title_typography_hover',
			'selector'	 => '{{WRAPPER}} .service-item:hover .service-title a',
			]
		);
        
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
        
        //Content Style Section
      $this->start_controls_section('section_content_style',
         [
				'label'	 => esc_html__( 'Content', 'inzox' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			]
		);

		$this->start_controls_tabs( 'services_content_style' );

        $this->start_controls_tab(
             'services_content_style_normal',
             [
                'label' =>esc_html__( 'Normal', 'inzox' ),
             ]
        );
   
        $this->add_control(
			'services_content_text_color', [
				'label'		 => esc_html__( 'Content color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item .services-content p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'services_content_bg_color',
				'label' => esc_html__( 'Background', 'inzox' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ts-services-wrapper .service-item',
			]
		);

        $this->add_group_control(Group_Control_Typography::get_type(),
         [
			 'name'		 => 'content_text_typography',
			 'selector'	 => '{{WRAPPER}} .service-item .services-content p',
			]
		);
         
        $this->end_controls_tab();

        $this->start_controls_tab(
        'services_content_style_hover',
            [
                'label' =>esc_html__( 'Hover', 'inzox' ),
            ]
        );
		
		$this->add_control(
			'content_text_color_hover', [
				'label'		 => esc_html__( 'Content color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item:hover .services-content p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'services_content_bg_color_hover',
				'label' => esc_html__( 'Background', 'inzox' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .ts-services-wrapper .service-item::before',
			]
		);

        $this->add_group_control(Group_Control_Typography::get_type(),
         [
			 'name'		 => 'content_text_typography_hover',
			 'selector'	 => '{{WRAPPER}} .service-item:hover .services-content p',
			]
		);
        
        $this->end_controls_tab();
        $this->end_controls_tabs();

		$this->end_controls_section();

		//Icon Style Section
      $this->start_controls_section('section_icon_style',
         [
				'label'	 => esc_html__( 'Read More & Icon', 'inzox' ),
				'tab'	   => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs( 'services_icon_style' );

        $this->start_controls_tab(
             'services_icon_style_normal',
             [
                'label' =>esc_html__( 'Normal', 'inzox' ),
             ]
        );
   
        $this->add_control('read_more_icon_color', 
          [
				'label'		 => esc_html__( 'Read More Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item .service-read-more .read-more-icon' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'read_more_icon_background', [
				'label'		 => esc_html__( 'Background Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
				'{{WRAPPER}} .service-item .service-read-more .read-more-icon' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'read_more_icon_border', [
				'label'		 => esc_html__( 'Border Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
				'{{WRAPPER}} .service-item .service-read-more .read-more-icon' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'read_more_icon_typography',
			'selector'	 => '{{WRAPPER}} .service-item .service-read-more .read-more-icon',
			]
		);
         
        $this->end_controls_tab();

        $this->start_controls_tab(
        'services_icon_style_hover',
            [
                'label' =>esc_html__( 'Hover', 'inzox' ),
            ]
        );
		
		$this->add_control('read_more_icon_color_hover', 
          [
				'label'		 => esc_html__( 'Read More Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .service-item:hover .service-read-more .read-more-icon' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'read_more_icon_background_hover', [
				'label'		 => esc_html__( 'Background Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
				'{{WRAPPER}} .service-item:hover .service-read-more .read-more-icon' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'read_more_icon_border_hover', [
				'label'		 => esc_html__( 'Border Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
				'{{WRAPPER}} .service-item:hover .service-read-more .read-more-icon' => 'border-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'read_more_icon_typography_hover',
			'selector'	 => '{{WRAPPER}} .service-item:hover .service-read-more .read-more-icon',
			]
		);
        
        $this->end_controls_tab();
        $this->end_controls_tabs();

    $this->end_controls_section();     

    } //Register control end

    protected function render( ) { 
		$settings 						= $this->get_settings();
		$services_style 				= $settings["services_style"];
		$services_show_description 		= $settings["services_show_description"];
		$desc_limit 					= $settings["desc_limit"];
		$number_of_services 			= $settings["number_of_services"];	
		$services_col 					= $settings["services_col"];
		$services_show_read_more_icon 	= $settings["services_show_read_more_icon"];
		$read_more_icon 				= $settings["read_more_icon"];
		$read_more_text 				= $settings["read_more_text"];
		$services_show_image 			= $settings["services_show_image"];
		$service_term_id     			= $settings["service_term_id"];
		
	  
		$arg = [
		'post_type'   		=>  'ts-service',
		'post_status' 		=> 'publish',
		'order' 			=> $settings['post_order'],
		'orderby'			=> $settings['post_orderby'],
		'posts_per_page' 	=> $number_of_services,
		];

		if(isset($service_term_id) && !empty($service_term_id)){
			$arg['tax_query'] = array(
			   array(
				   'taxonomy' => 'ts-service_cat',
				   'field' => 'term_id',
				   'terms' => $service_term_id
					),
			);
		 };

		$query = new \WP_Query( $arg );
		
		require 'services/style/content-'.$services_style.'.php';
	
    ?>	
    
    <?php  
    }
	protected function _content_template() { }
	
	public function services_categories()
    {
        $term_list = [];
        $terms = get_terms( 'ts-service_cat', array(
            'hide_empty' => false,
        ) );
        
        foreach ($terms as $term) {
            $term_list[$term->term_id] = [$term->name];
        }

        return $term_list;
    }
}