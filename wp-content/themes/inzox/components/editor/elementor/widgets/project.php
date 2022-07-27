<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;


class Inzox_Project_Widget extends Widget_Base {


    public $base;

    public function get_name() {
        return 'inzox-project';
    }

    public function get_title() {
        return esc_html__( 'Projects', 'inzox' );
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
                'label' => esc_html__('Inzox Projects', 'inzox'),
            ]
		);

		$this->add_control(
            'project_style',
            [
               'label' => esc_html__( 'Projects Style', 'inzox' ),
               'type' => Custom_Controls_Manager::IMAGECHOOSE,
               'default' => 'style1',
               'options' => [
                  'style1'  => [
					 'title' => esc_html__( 'Style 1', 'inzox' ),
					 'imagelarge' => INZOX_IMG. '/admin/projects/project_style_1.png',
					 'imagesmall' => INZOX_IMG. '/admin/projects/project_style_1.png',
					 'width' => '30%',
				  ],
				  'style2'  => [
					'title' => esc_html__( 'Style 2', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/projects/project_style_2.png',
					'imagesmall' => INZOX_IMG. '/admin/projects/project_style_2.png',
					'width' => '30%',
				 ],
				 'style3'  => [
					'title' => esc_html__( 'Style 3', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'imagesmall' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'width' => '30%',
				 ], 
				 'style4'  => [
					'title' => esc_html__( 'Style 4', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'imagesmall' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'width' => '30%',
				 ], 
				 'style5'  => [
					'title' => esc_html__( 'Style 5', 'inzox' ),
					'imagelarge' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'imagesmall' => INZOX_IMG. '/admin/projects/project_style_3.png',
					'width' => '30%',
				 ], 
               ],
            ]
		);

		$this->add_control(
            'project_term_id',
            [
                'label'   => esc_html__('Project Category', 'inzox'),
                'type'    => Controls_Manager::SELECT2,
                'options' => $this->project_categories(),
                'multiple'  => true,
                'label_block' => true,
            ]
        );

		$this->add_control(
			'project_show_description',
				[
				'label' => esc_html__( 'Show Description', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'inzox' ),
				'label_off' => esc_html__( 'No', 'inzox' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
                    'project_style' => ['style1'],
				],
				]
		);

		$this->add_control(
			'desc_limit',
			[
				'label'         => esc_html__( 'Description limit', 'inzox' ),
				'type'          => Controls_Manager::NUMBER,
				'default' => '12',
				'condition' => [ 'project_show_description' => ['yes'], 'project_style' => ['style1']],
			
			]
		);
		
		$this->add_control(
			'number_of_project',
			[
			  'label'         => esc_html__( 'Number of Project', 'inzox' ),
			  'type'          => Controls_Manager::NUMBER,
			  'default'       => '6',
  
			]
		);

		$this->add_control(
			'project_col',
			[
				'label'   => esc_html__( 'Project Column', 'inzox' ),
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
                'label'     =>esc_html__( 'Project Order', 'inzox' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'DESC',
                'options'   => [
                        'DESC'      =>esc_html__( 'Descending', 'inzox' ),
                        'ASC'       =>esc_html__( 'Ascending', 'inzox' ),
                ],
            ]
		);
		
		$this->add_control(
            'post_orderby',
            [
                'label'     =>esc_html__( 'Project Order By', 'inzox' ),
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
			'project_show_read_more_icon',
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
                    'project_show_read_more_icon' => ['yes'],
				],
				'label_block' => true,
			]
        );

		$this->add_control(
            'read_more_text',
            [
                'label' => esc_html__('Read More Text', 'inzox'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'inzox'),
				'condition' => [
                    'project_show_read_more_icon' => ['yes'],
				],
            ]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);
		
		$this->add_control(
			'show_load_more_button',
			[
				'label' => esc_html__( 'Show Load More Button', 'inzox' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'inzox' ),
				'label_off' => esc_html__( 'No', 'inzox' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
                    'project_style' => ['style1'],
				],
			]
		);

		$this->add_control(
            'load_more_button_text',
            [
                'label' => esc_html__('Load More Button Text', 'inzox'),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Load More', 'inzox'),
				'condition' => ['show_load_more_button' => ['yes'], 'project_style' => ['style1']],
            ]
		);

		$this->add_control(
            'load_more_button_link',
            [
                'label' => esc_html__('Load More Button Link', 'inzox'),
				'type' => \Elementor\Controls_Manager::URL,
				'show_external' => false,
				'default' => [
					'url' => '#',
					'is_external' => false,
					'nofollow' => true,
				],
				'condition' => ['show_load_more_button' => ['yes'],'project_style' => ['style1']],
            ]
		);
		$this->add_responsive_control(
			'thumbnail_height',
			[
				'label' => esc_html__('Thumbnail Height', 'inzox'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					]
				],
				'default' => [
					'unit' => 'px',
					'size' => 350,
				],
				'selectors' => [
					'{{WRAPPER}} .project-wrapper .project-item .project-thumb' => 'height: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .project-wrapper .project-thumb' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control('show_navigation',
			[
				'label'       => esc_html__('Show Navigation', 'inzox'),
				'type'        => Controls_Manager::SWITCHER,
				'label_on'    => esc_html__('Yes', 'inzox'),
				'label_off'   => esc_html__('No', 'inzox'),
				'default'     => 'yes',
				'condition' => ['project_style' => ['style2', 'style3']],
			]
         );
         
         $this->add_control('auto_play',
            [
            'label'       => esc_html__('Auto play', 'inzox'),
            'type'        => Controls_Manager::SWITCHER,
            'label_on'    => esc_html__('Yes', 'inzox'),
            'label_off'   => esc_html__('No', 'inzox'),
            'default'     => 'yes',
			'condition' => ['project_style' => ['style2', 'style3']],
            ]
         ); 

         $this->add_control('auto_loop',
            [
            'label'       => esc_html__('Slider loop', 'inzox'),
            'type'        => Controls_Manager::SWITCHER,
            'label_on'    => esc_html__('Yes', 'inzox'),
            'label_off'   => esc_html__('No', 'inzox'),
            'default'     => 'yes',
			'condition' => ['project_style' => ['style2', 'style3']],
            ]
        );


		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_sub_title_style', [
				'label'	 => esc_html__( 'Title', 'inzox' ),
				'tab'	 => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'title_color', [
				'label'		 => esc_html__( 'Title color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .project-wrapper .project-content .project-title a' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_group_control(Group_Control_Typography::get_type(),
         [
			'name'		 => 'title_typography',
			'selector'	 => '{{WRAPPER}} .project-wrapper .project-content .project-title a',
			]
		);

        $this->end_controls_section();
        
        //Content Style Section
      $this->start_controls_section('section_content_style',
         [
				'label'	 => esc_html__( 'Content', 'inzox' ),
				'tab'	    => Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control(
			'feature_content_color', [
				'label'		 => esc_html__( 'Content color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .project-wrapper .project-content p' => 'color: {{VALUE}};',
				],
			]
        );

        $this->add_group_control(Group_Control_Typography::get_type(),
         [
			 'name'		 => 'feature_content_typography',
			 'selector'	 => '{{WRAPPER}} .project-wrapper .project-content p',
			]
		);

		$this->end_controls_section();

		//Icon Style Section
      $this->start_controls_section('section_icon_style',
         [
				'label'	 => esc_html__( 'Icon', 'inzox' ),
				'tab'	   => Controls_Manager::TAB_STYLE,
			]
        );

        $this->add_control('project_icon_color', 
          [
				'label'		 => esc_html__( 'Project Icon Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .project-item .icon-container i' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
			'name'		 => 'project_icon_typography',
			'selector'	 => '{{WRAPPER}} .project-item .icon-container i',
			]
		);
		
        $this->add_control('read_more_icon_color', 
          [
				'label'		 => esc_html__( 'Read More Icon Color', 'inzox' ),
				'type'		 => Controls_Manager::COLOR,
				'selectors'	 => [
					'{{WRAPPER}} .project-item .read-more-icon-con i' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name'		 => 'read_more_icon_typography',
				'selector'	 => '{{WRAPPER}} .project-item .read-more-icon-con i',
			]
		);

    $this->end_controls_section();     
	//Icon Style Section
     $this->start_controls_section('section_slider_style',
         [
				'label'	 => esc_html__( 'Slider Arrow', 'inzox' ),
				'tab'	   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'arrow_x',
			[
				'label' => esc_html__( 'Arrow Position X', 'inzox' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .project-wrapper .owl-nav' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'arrow_y',
			[
				'label' => esc_html__( 'Arrow Position Y', 'inzox' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 50,
				],
				'selectors' => [
					'{{WRAPPER}} .project-wrapper .owl-nav' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);

    $this->end_controls_section();     

    } //Register control end

    protected function render( ) { 
		$settings 						= $this->get_settings();
		$project_style 					= $settings["project_style"];
		$project_show_description 		= $settings["project_show_description"];
		$desc_limit 					= $settings["desc_limit"];
		$number_of_project 				= $settings["number_of_project"];	
		$project_col 					= $settings["project_col"];
		$project_show_read_more_icon 	= $settings["project_show_read_more_icon"];
		$read_more_icon 				= $settings["read_more_icon"];
		$read_more_text 				= $settings["read_more_text"];
		$project_term_id     			= $settings["project_term_id"];
		$show_load_more_button 			= $settings["show_load_more_button"];
		$load_more_button_text 			= $settings["load_more_button_text"];
		$load_more_button_link 			= $settings["load_more_button_link"];
		$target 						= $settings['load_more_button_link']['is_external'] ? ' target="_blank"' : '';
		$nofollow 						= $settings['load_more_button_link']['nofollow'] ? ' rel="nofollow"' : '';

        $show_navigation    =     $settings["show_navigation"];
        $auto_play          =     $settings["auto_play"];
		$auto_loop          =     $settings["auto_loop"];
		
		$controls = [
			'nav'       => $show_navigation,
			'auto_play' => $auto_play,
			'auto_loop' => $auto_loop,
		 ];
		 $controls = json_encode($controls);		
	  
		$arg = [
		'post_type'   		=>  'ts-project',
		'post_status' 		=> 'publish',
		'order' 			=> $settings['post_order'],
		'orderby'			=> $settings['post_orderby'],
		'posts_per_page' 	=> $number_of_project,
		];

		if(isset($project_term_id) && !empty($project_term_id)){
			$arg['tax_query'] = array(
			   array(
				   'taxonomy' => 'ts-project_cat',
				   'field' => 'term_id',
				   'terms' => $project_term_id
					),
			);
		 };

		$query = new \WP_Query( $arg );
		
		require 'project/style/content-'.$project_style.'.php';
	  
	}
	
	protected function _content_template() { }
	
	public function project_categories()
    {
        $term_list = [];
        $terms = get_terms( 'ts-project_cat', array(
            'hide_empty' => false,
        ) );
        
        foreach ($terms as $term) {
            $term_list[$term->term_id] = [$term->name];
        }

        return $term_list;
    }
}