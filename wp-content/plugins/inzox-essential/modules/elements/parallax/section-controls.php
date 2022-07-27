<?php

namespace Elementor;

class ElementsKit_Section_Effect_Controls{
    public function __construct()
    {
        add_action('elementor/element/section/section_advanced/after_section_end', array( $this, 'register_controls' ), 5, 2);
    }

    public function register_controls($control, $args)
    {
        $control->start_controls_section(
            'ekit_section_parallax',
            [
                'label' => esc_html__('ElementsKit Effects', 'inzox-essential'),
                'tab' => Controls_Manager::TAB_ADVANCED,
            ]
        );
        $control->add_control(
            'ekit_section_parallax_bg',
            [
                'label' => esc_html__('Background Image Parallax', 'inzox-essential'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Show', 'inzox-essential'),
                'label_off' => esc_html__('Hide', 'inzox-essential'),
                'render_type' => 'none',
				'frontend_available' => true,
            ]
        );
        $control->add_control(
            'ekit_section_parallax_bg_speed', [
                'label' => esc_html__('Speed', 'inzox-essential'),
                'type' => Controls_Manager::NUMBER,
                'max' => .9,
                'frontend_available' => true,
                'min' => .1,
                'step' => .1,
                'default' => 0.5,
                'condition' => [
                    'ekit_section_parallax_bg' => 'yes',
                ]
            ]
        );

        $control->add_control(
            'ekit_section_parallax_multi',
            array(
                'label' => esc_html__('Multi Item Parallax', 'inzox-essential'),
                'type' => Controls_Manager::SWITCHER,
                'frontend_available' => true,
                'label_on' => esc_html__('Show', 'inzox-essential'),
                'label_off' => esc_html__('Hide', 'inzox-essential'),
            )
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'parallax_style',  [
            'label' => esc_html__('Effect Type', 'inzox-essential'),
            'type' => Controls_Manager::SELECT,
            'default' => 'animation',
            'options' => [
                'animation' => esc_html__('Css Animation', 'inzox-essential'),
                'mousemove' => esc_html__('Mouse Move', 'inzox-essential'),
                'onscroll' => esc_html__('On Scroll', 'inzox-essential'),
                'tilt' => esc_html__('Parallax Tilt', 'inzox-essential'),
            ],
        ]
        );
        $repeater->add_control(
            'item_source',
            [
                'label' => esc_html__( 'Item source', 'inzox-essential' ),
                'type' => Controls_Manager::CHOOSE,
                'label_block' => false,
                'toggle' => false,
                'default' => 'image',
                'options' => [
                    'image' => [
                        'title' => 'Image',
                        'icon' => 'eicon-image',
                    ],
                    'shape' => [
                        'title' => 'Shape',
                        'icon' => 'eicon-divider-shape',
                    ],
                ],
                'classes' => 'elementor-control-start-end',
                'render_type' => 'ui',

            ]
        );
        $repeater->add_control(
            'image',[
                'label' => esc_html__('Choose Image', 'inzox-essential'),
                'type' => Controls_Manager::MEDIA,
                'condition' => [
                    'item_source' => 'image',
                ],
            ]
        );

        $repeater->add_control(
            'shape',  [
                'label' => esc_html__('Choose Shape', 'inzox-essential'),
                'type' => Controls_Manager::SELECT,
                'default' => 'angle',
                'options' => [
                    'angle' => esc_html__('Shape 1', 'inzox-essential'),
                    'double_stroke' => esc_html__('Shape 2', 'inzox-essential'),
                    'fat_stroke' => esc_html__('Shape 3', 'inzox-essential'),
                    'fill_circle' => esc_html__('Shape 4', 'inzox-essential'),
                    'round_triangle' => esc_html__('Shape 5', 'inzox-essential'),
                    'single_stroke' => esc_html__('Shape 6', 'inzox-essential'),
                    'stroke_circle' => esc_html__('Shape 7', 'inzox-essential'),
                    'triangle' => esc_html__('Shape 8', 'inzox-essential'),
                    'zigzag' => esc_html__('Shape 9', 'inzox-essential'),
                    'zigzag_2' => esc_html__('Shape 10', 'inzox-essential'),
                    'shape_1' => esc_html__('Shape 11', 'inzox-essential'),
                    'shape_2' => esc_html__('Shape 12', 'inzox-essential'),
                    'shape_3' => esc_html__('Shape 13', 'inzox-essential'),
                    'shape_4' => esc_html__('Shape 14', 'inzox-essential'),
                ],
                'condition' => [
                    'item_source' => 'shape',
                ]
            ]
        );

        $repeater->add_control(
             'shape_color',
            [
                'label' => esc_html__( 'Color', 'inzox-essential' ),
                'type' => Controls_Manager::COLOR,
                'condition' => [
                    'item_source' => 'shape',
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}} .elementskit-parallax-graphic" => 'fill: {{VALUE}}; stroke: {{VALUE}};',
                ],
            ]
        );

        $repeater->add_responsive_control(
            'width_type',
            [
                'label' => esc_html__( 'Width', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'Auto', 'inzox-essential' ),
                    'custom' => esc_html__( 'Custom', 'inzox-essential' ),
                ],

            ]
        );

        $repeater->add_responsive_control(
            'custom_width',
            [
                'label' => esc_html__( 'Custom Width', 'inzox-essential' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'width_type' => 'custom',
                ],
                'device_args' => [
                    Controls_Stack::RESPONSIVE_TABLET => [
                        'condition' => [
                            'ekit_prlx_width_tablet' => [ 'custom' ],
                        ],
                    ],
                    Controls_Stack::RESPONSIVE_MOBILE => [
                        'condition' => [
                            'ekit_prlx_width_mobile' => [ 'custom' ],
                        ],
                    ],
                ],
                'size_units' => [ 'px', '%', 'vw' ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} .elementskit-parallax-graphic' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $repeater->add_responsive_control(
            'source_rotate', [
                'label' => esc_html__('Rotate', 'inzox-essential'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['deg'],
                'range' => [
                    'deg' => [
                        'min' => -180,
                        'max' => 180,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'deg',
                    'size' => 0,
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}} .elementskit-parallax-graphic" => 'transform: rotate({{SIZE}}{{UNIT}})',
                ],

            ]
        );

        $repeater->add_responsive_control(
			'parallax_blur_effect',
			[
				'label' => esc_html__( 'Blur', 'inzox-essential' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 20,
						'step' => .5,
					],
					'rem' => [
						'min' => 0,
                        'max' => 2,
                        'step' => .1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0,
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .elementskit-parallax-graphic' => 'filter: blur({{SIZE}}{{UNIT}});',
                ],
			]
        );
        
        $repeater->add_responsive_control(
            'pos_x', [
                'label' => esc_html__('Position X (%)', 'inzox-essential'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%','px'],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 10,
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}.ekit-section-parallax-layer" => 'left: {{SIZE}}{{UNIT}}',
                ],

            ]
        );

        $repeater->add_responsive_control(
            'pos_y',[
                'label' => esc_html__('Position Y (%)', 'inzox-essential'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%','px'],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 200,
                    ],
                    'px' => [
                        'min' => -1000,
                        'max' => 1000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 10,
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}.ekit-section-parallax-layer" => 'top: {{SIZE}}{{UNIT}}',

                ],

            ]
        );
        $repeater->add_responsive_control(
            'animation',
            [
                'label' => esc_html__( 'Animation', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT2,
                'frontend_available' => true,
                'default' => 'ekit-fade',
                'options' => [
                    'ekit-fade'=> 'Fade',
                    'ekit-rotate'=> 'Rotate',
                    'ekit-bounce'=> 'Bounce',
                    'ekit-zoom'=> 'Zoom',
                    'ekit-rotate-box'=> 'RotateBox',
                    'ekit-left-right'=> 'Left Right',
                    'bounce'=> 'Bounce 2',
                    'flash'=> 'Flash',
                    'pulse'=> 'Pulse',
                    'shake'=> 'Shake',
                    'headShake'=> 'HeadShake',
                    'swing'=> 'Swing',
                    'tada'=> 'Tada',
                    'wobble'=> 'Wobble',
                    'jello'=> 'Jello',
                ],
                'condition' => [
                    'parallax_style' => 'animation',
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => '-webkit-animation-name:{{UNIT}}',
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'animation-name:{{UNIT}}',
                ],
            ]
        );
        $repeater->add_control(
            'item_opacity',
            [
                'label' => esc_html__( 'Opacity', 'inzox-essential' ),
                'description' => esc_html__( 'Opacity will be (0-1), default value 1', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '1',
                'min' => 0,
                'step' => 1,
                'render_type' => 'none',
                'frontend_available' => true,
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'opacity:{{UNIT}}'
                ],
            ]
        );

        $repeater->add_control(
            'animation_speed',
            [
                'label' => esc_html__( 'Animation speed', 'inzox-essential' ) . ' (s)',
                'type' => Controls_Manager::NUMBER,
                'default' => '5',
                'min' => 1,
                'step' => 100,
                'render_type' => 'none',
                'frontend_available' => true,
                'condition' => [
                    'parallax_style' => 'animation',
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => '-webkit-animation-duration:{{UNIT}}s',
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'animation-duration:{{UNIT}}s'
                ],
            ]
        );
        $repeater->add_control(
            'animation_iteration_count',
            [
                'label' => esc_html__( 'Animation Iteration Count', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'infinite',
                'options' => [
                    'infinite' => esc_html__( 'Infinite', 'inzox-essential' ),
                    'unset' => esc_html__( 'Unset', 'inzox-essential' ),
                ],
                'condition' => [
                    'parallax_style' => 'animation',
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'animation-iteration-count:{{UNIT}}'
                ],
            ]
        );
        $repeater->add_control(
            'animation_direction',
            [
                'label' => esc_html__( 'Animation Direction', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'normal',
                'options' => [
                    'normal' => esc_html__( 'Normal', 'inzox-essential' ),
                    'reverse' => esc_html__( 'Reverse', 'inzox-essential' ),
                    'alternate' => esc_html__( 'Alternate', 'inzox-essential' ),
                ],
                'condition' => [
                    'parallax_style' => 'animation',
                ],
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'animation-direction:{{UNIT}}'
                ],
            ]
        );

        $repeater->add_control(
            'parallax_speed', [
                'label' => esc_html__('Speed', 'inzox-essential'),
                'type' => Controls_Manager::NUMBER,
                'default' => 40,
                'min' => 10,
                'max' => 150,
                'condition' => [
                    'parallax_style' => 'mousemove',
                ]
            ]
        );

        $repeater->add_control(
            'parallax_transform', [
                'label' => esc_html__( 'Parallax style', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'translateY',
                'options' => [
                    'translateX' => esc_html__( 'X axis', 'inzox-essential' ),
                    'translateY' => esc_html__( 'Y axis', 'inzox-essential' ),
                    'rotate' => esc_html__( 'rotate', 'inzox-essential' ),
                    'rotateX' => esc_html__( 'rotateX', 'inzox-essential' ),
                    'rotateY' => esc_html__( 'rotateY', 'inzox-essential' ),
                    'scale' => esc_html__( 'scale', 'inzox-essential' ),
                    'scaleX' => esc_html__( 'scaleX', 'inzox-essential' ),
                    'scaleY' => esc_html__( 'scaleY', 'inzox-essential' ),
                ],
                'condition' => [
                    'parallax_style' => 'onscroll'
                ],
            ]
        );
        $repeater->add_control(
            'parallax_transform_value', [
                'label' => esc_html__( 'Parallax Transition ', 'inzox-essential' ),
                'description' => esc_html__( 'X, Y and Z Axis will be pixels, Rotate will be degrees (0-180), scale will be ratio', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '250',
                'condition' => [
                    'parallax_style' => 'onscroll'
                ]
            ]
        );
        $repeater->add_control(
            'smoothness', [
                'label' => esc_html__( 'Smoothness', 'inzox-essential' ),
                'description' => esc_html__( 'factor that slowdown the animation, the more the smoothier (default: 700)', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '700',
                'min' => 0,
                'max' => 1000,
                'step' => 100,
                'condition' => [
                    'parallax_style' => 'onscroll'
                ]
            ]
        );
        $repeater->add_control(
            'offsettop',[
                'label' => esc_html__( 'Offset Top', 'inzox-essential' ),
                'description' => esc_html__( 'default: 0; when the element is visible', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '0',
                'condition' => [
                    'parallax_style' => 'onscroll'
                ]
            ]
        );
        $repeater->add_control(
            'offsetbottom', [
                'label' => esc_html__( 'Offset Bottom', 'inzox-essential' ),
                'description' => esc_html__( 'default: 0; when the element is visible', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '0',
                'condition' => [
                    'parallax_style' => 'onscroll'
                ]
            ]
        );
        $repeater->add_control(
            'maxtilt',[
                'label' => esc_html__( 'MaxTilt', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '20',
                'condition' => [
                    'parallax_style' => 'tilt',
                ]
            ]
        );
        $repeater->add_control(
            'scale',[
                'label' => esc_html__( 'Image Scale', 'inzox-essential' ),
                'description' => esc_html__( '2 = 200%, 1.5 = 150%, etc.. Default 1', 'inzox-essential' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '1',
                'condition' => [
                    'parallax_style' => 'tilt',
                ]
            ]
        );
        $repeater->add_control(
            'disableaxis', [
                'label' => esc_html__( 'Disable Axis', 'inzox-essential' ),
                'description' => esc_html__( 'What axis should be disabled. Can be X or Y.', 'inzox-essential' ),
                'type' => Controls_Manager::SELECT,
                'default' => '',
                'options' => [
                    '' => esc_html__( 'None', 'inzox-essential' ),
                    'x' => esc_html__( 'X axis', 'inzox-essential' ),
                    'y' => esc_html__( 'Y axis', 'inzox-essential' ),
                ],

                'condition' => [
                    'parallax_style' => 'tilt',
                ]
            ]
        );
        $repeater->add_control(
            'zindex',   [
                'label' => esc_html__('Z-index', 'inzox-essential'),
                'type' => Controls_Manager::NUMBER,
                'default' => esc_html__('2', 'inzox-essential'),
                'selectors' => [
                    "{{WRAPPER}} {{CURRENT_ITEM}}" => 'z-index: {{UNIT}}',
                ],
            ]
        );
        $control->add_control(
            'ekit_section_parallax_multi_items',
            [
                'label' => esc_html__( 'Parallax', 'inzox-essential' ),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'frontend_available' => true,
                'title_field' => '{{{ parallax_style }}}',
                'condition' => [
                    'ekit_section_parallax_multi' => 'yes'
                ],

            ]
        );

        $control->add_control(
            'ekit_section_parallax_overflow',
            [
                'label' => esc_html__('Section Overflow', 'inzox-essential'),
                'type' => Controls_Manager::SELECT,
				'default' => 'visible',
				'options' => [
					'visible'  => esc_html__( 'Visible', 'inzox-essential' ),
					'hidden' => esc_html__( 'Hidden', 'inzox-essential' ),
				],
                'selectors' => [
                    "{{WRAPPER}}" => 'overflow: {{VALUE}}'
                ]
            ]
        );

        $control->end_controls_section();
    }
}