<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit;

class Inzox_Blog_Widget extends Widget_Base {


    public $base;

    public function get_name() {
        return 'inzox-latestnews';
    }

    public function get_title() {
        return esc_html__( 'Blog ', 'inzox' );
    }

    public function get_icon() { 
        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return [ 'inzox-elements' ];
    }

    protected function _register_controls() {
		$this->start_controls_section(
			'section_tab', [
				'label' => esc_html__( 'Latest News', 'inzox' ),
			]
        );
      
      $this->add_control(
         'post_count',
                     [
                        'label'         => esc_html__( 'Post count', 'inzox' ),
                        'type'          => Controls_Manager::NUMBER,
                        'default'       => '3',

                     ]
      );

      $this->add_control('post_category',
         [
            'label'     => esc_html__( 'Category', 'inzox' ),
            'type'      => \Elementor\Controls_Manager::SELECT2,
            'multiple'  => true,
            'default'   => [],
            'options'   => $this->getCategories(),
            'label_block' => true,         
         ]
      ); 

      $this->add_control(
			'post_col',
			[
				'label'   => esc_html__( 'Post Column', 'inzox' ),
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
         'post_title_crop',
         [
           'label'         => esc_html__( 'Title limit', 'inzox' ),
           'type'          => Controls_Manager::NUMBER,
           'default'       => '7',
           
         ]
       ); 

       $this->add_control(
         'post_sort_by',
         [
            'label' => esc_html__( 'Sort By', 'inzox' ),
            'type' => Controls_Manager::SELECT,
            'default' => 'DESC',
            'options' => [
                    'ASC'  => esc_html__( 'ASC', 'inzox' ),
                    'DESC'  => esc_html__( 'DESC', 'inzox' ),
                ],
               
         ]
      );
       
      $this->add_control(
         'show_desc',
         [
             'label'     => esc_html__('Show description', 'inzox'),
             'type'      => Controls_Manager::SWITCHER,
             'label_on'  => esc_html__('Yes', 'inzox'),
             'label_off' => esc_html__('No', 'inzox'),
             'default'   => 'no',
            
         ]
      ); 
      $this->add_control('desc_limit',
            [
              'label'         => esc_html__( 'Description limit', 'inzox' ),
              'type'          => Controls_Manager::NUMBER,
              'default'       => '10',
              'condition'     => [ 
                 'show_desc' => ['yes'] 
               ],
              
            ]
      );   
    
      $this->add_control('show_cat',
            [
                'label'     => esc_html__('Show category', 'inzox'),
                'type'      => Controls_Manager::SWITCHER,
                'label_on'  => esc_html__('Yes', 'inzox'),
                'label_off' => esc_html__('No', 'inzox'),
                'default'   => 'yes',
            ]
        );

      $this->add_control('show_date',
        [
            'label'     => esc_html__('Show Date', 'inzox'),
            'type'      => Controls_Manager::SWITCHER,
            'label_on'  => esc_html__('Yes', 'inzox'),
            'label_off' => esc_html__('No', 'inzox'),
            'default'   => 'yes',
        ]
     ); 

      $this->add_control(
         'show_author',
               [
                  'label'     => esc_html__('Show Author', 'inzox'),
                  'type'      => Controls_Manager::SWITCHER,
                  'label_on'  => esc_html__('Yes', 'inzox'),
                  'label_off' => esc_html__('No', 'inzox'),
                  'default'   => 'no',
         
               ]
         );

      $this->add_control('show_readmore',
                  [
                     'label'     => esc_html__('Show Readmore', 'inzox'),
                     'type'      => Controls_Manager::SWITCHER,
                     'label_on'  => esc_html__('Yes', 'inzox'),
                     'label_off' => esc_html__('No', 'inzox'),
                     'default'   => 'no',
            
                  ]
            );   

       
      $this->end_controls_section();
      
      $this->start_controls_section('style_title_section',
			[
				'label' => esc_html__( 'Title', 'inzox' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
      ); 
      
      $this->add_control(
         'post_text_color',
         [
             'label' => esc_html__('Title color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .latest-blog .post .post-body .entry-header .entry-title a' => 'color: {{VALUE}};',
             ],
         ]
        );

      $this->add_control(
         'post_text_color_hover',
            [
               'label'     => esc_html__('Title hover', 'inzox'),
               'type'      => Controls_Manager::COLOR,
               'default'   => '',
               'selectors' => [
                  '{{WRAPPER}} .latest-blog .post:hover .post-body .entry-header .entry-title a' => 'color: {{VALUE}};',
            
               ],
            ]
        );

      $this->add_group_control(
         Group_Control_Typography::get_type(), [
         'name'		 => 'title_typography',
         'selector'	 => '{{WRAPPER}} .post .entry-title a',
         ]
      );
     
      $this->add_responsive_control(
         'title_margin',
         [
            'label' => esc_html__( 'Tilte Margin', 'inzox' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
         
            'selectors' => [
               '{{WRAPPER}} .post .entry-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
         ]
         );
      $this->end_controls_section();
     
      $this->start_controls_section('style_content_section',
         [
            'label' => esc_html__( 'Content', 'inzox' ),
            'tab' => Controls_Manager::TAB_STYLE,
            'condition'     => [ 
               'show_desc' => ['yes'] 
             ],
         ]
      ); 
      
      $this->add_control(
         'post_content_color',
         [
             'label' => esc_html__('Content color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .post .entry-content p' => 'color: {{VALUE}};',
             ],
         ]
        );

      $this->add_group_control(
         Group_Control_Typography::get_type(), [
         'name'		 => 'content_typography',
         'selector'	 => '{{WRAPPER}} .post .entry-content p',
         ]
      );
      $this->add_responsive_control(
         'content_margin',
         [
            'label' => esc_html__( 'Content Margin', 'inzox' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
         
            'selectors' => [
               '{{WRAPPER}} .post .entry-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
         ]
         );
      
      $this->end_controls_section();  

      $this->start_controls_section('style_readmore_section',
         [
            'label' => esc_html__( 'Readmore', 'inzox' ),
            'tab' => Controls_Manager::TAB_STYLE,
            'condition'     => [ 
               'show_readmore' => ['yes'] 
             ],
            
         ]
      ); 

      $this->add_control(
         'post_readmore_color',
         [
             'label' => esc_html__('Readmore color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .post .post-footer a ' => 'color: {{VALUE}};',
             ],
         ]
        );

        $this->add_control(
         'post_readmore_color_hover',
         [
             'label' => esc_html__('Readmore hover', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .latest-blog .post:hover .post-footer a' => 'color: {{VALUE}};',
             ],
         ]
        );

        $this->add_group_control(
         Group_Control_Typography::get_type(), [
         'name'		 => 'readmore_typography',
         'selector'	 => '{{WRAPPER}} .post .post-footer a',
         ]
      );

      $this->end_controls_section();
      
      $this->start_controls_section('style_image_section',
         [
            'label' => esc_html__( 'Image', 'inzox' ),
            'tab' => Controls_Manager::TAB_STYLE,            
         ]
      );
      
      $this->add_control(
         'image_overlay',
         [
             'label' => esc_html__('Image Overlay', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .latest-blog .post .post-media.post-image:after' => 'background: {{VALUE}};',
             ],
         ]
      );

      $this->end_controls_section();

      $this->start_controls_section('meta_style',
         [
            'label' => esc_html__( 'Meta', 'inzox' ),
            'tab' => Controls_Manager::TAB_STYLE,
            
         ]
      ); 

      $this->add_control(
         'meta_color',
         [
             'label' => esc_html__('Meta color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .post .post-meta .post-meta-cat span' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post .post-meta span a' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post .post-meta .post-meta-date .date-only' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post .post-meta .post-meta-date .month-year' => 'color: {{VALUE}};',
             ],
         ]
      );

      $this->add_control(
         'meta_color_hover',
         [
             'label' => esc_html__('Meta hover color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .post:hover .post-meta .post-meta-cat span' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post:hover .post-meta span a' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post:hover .post-meta .post-meta-date .date-only' => 'color: {{VALUE}};',
                  '{{WRAPPER}} .post:hover .post-meta .post-meta-date .month-year' => 'color: {{VALUE}};',
             ],
         ]
      );

      $this->add_group_control(
         Group_Control_Typography::get_type(), [
         'name'		 => 'meta_typography',
         'selector'	 => '{{WRAPPER}} .post .post-meta span',
         ]
      );

      $this->add_control(
         'meta_top_border_color',
         [
             'label' => esc_html__('Top Border Color', 'inzox'),
             'type' => Controls_Manager::COLOR,
             'default' => '',
             'selectors' => [
                  '{{WRAPPER}} .latest-blog .post' => 'border-color: {{VALUE}};',
             ],
         ]
      );



      $this->end_controls_section();  
    } 

    protected function render() {
     
    $settings        = $this->get_settings();
    $post_title_crop = $settings["post_title_crop"];
    $show_desc       = $settings["show_desc"];
    $desc_limit      = $settings["desc_limit"];
    $post_count      = $settings["post_count"];
    $show_date       = $settings["show_date"];
    $show_cat        = $settings["show_cat"];
    $show_author     = $settings["show_author"];
    $show_readmore   = $settings["show_readmore"];
    $post_col        = $settings["post_col"];
    $post_sort_by    = $settings["post_sort_by"];
    $post_category   = $settings["post_category"];
    $args = array(
        'numberposts'      => $post_count,
        'orderby'          => 'post_date',
        'order'            => $post_sort_by,
        'post_type'        => 'post',
        'post_status'      => 'publish',
       
    );
   if(is_array($post_category) && count($post_category)){
      $args['category__in'] = $post_category;
   }
     
   $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
  
    ?>
<div class="row latest-blog">
  <?php  foreach( $recent_posts as $recent):   ?>
   <div class="col-lg-<?php echo esc_attr($post_col); ?> fadeInUp">
      <div class="post">
         
         <div class="post-body">
            <div class="post-meta">
               <?php if($show_author=='yes'): ?>
               <span class="post-author">
               <i class="icon icon-user"></i> 
               <a href="<?php echo get_author_posts_url( $recent['post_author']); ?>"> <?php echo get_the_author(); ?></a>
               </span>
               <?php endif; ?> 
               <?php if($show_cat=='yes'): ?>
               <span class="post-meta-cat">
                    <?php $cats = get_the_category($recent['ID']); ?>
                    <?php foreach($cats as $item): ?>
                      <span><?php echo esc_html($item->cat_name); ?></span>
                    <?php endforeach ?>  
               </span> 
               <?php endif; ?> 
               <span class="post-meta-date">
                  <?php
                  if($show_date=='yes'):
                     ?>
                     <span class="date-only"><?php echo date('d', strtotime($recent["post_date"])); ?></span>
                     <span class="month-year"><?php echo date('M Y', strtotime($recent["post_date"])); ?></span>
                  <?php endif; ?> 
               </span>
            </div>
            <div class="entry-header">
               <h2 class="entry-title">
                  <a href="<?php echo esc_url(get_post_permalink($recent["ID"])); ?>"><?php echo esc_html(wp_trim_words( $recent["post_title"], $post_title_crop, ''));  ?> </a>
               </h2>
            </div>
            <!-- header end -->
            <?php if($show_desc=="yes"): ?>
            <div class="entry-content">
               <p> <?php echo wp_trim_words( wp_kses($recent["post_content"],['p']), $desc_limit, '');  ?>   </p>
            </div>
            <?php endif; ?> 
            <div class="post-footer">
               <?php if($show_readmore=="yes"): ?>
               <a href="<?php echo esc_url(get_post_permalink($recent["ID"])); ?>" class="btn-link"> <?php echo esc_html__('Read More','inzox'); ?> <i class="icon icon-arrow-right"></i></a>
               <?php endif; ?> 
            </div>
         </div>
         <!-- post-body end -->
         <?php if(has_post_thumbnail($recent['ID'])): ?>
         <div class="post-media post-image">
            <a href="<?php echo esc_url(get_permalink($recent["ID"])); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url( $recent['ID'], 'large' )); ?>" class="img-fluid" alt="<?php echo get_author_posts_url( $recent['post_author']); ?>"></a>
         </div>
         <?php endif; ?>
            <!-- post-body end -->
      </div>
      <!-- post end-->
   </div>
   <?php endforeach; ?> 
</div> <!-- row end -->
   <?php 
    wp_reset_postdata();
    }

    public function getCategories(){
      
      $terms = get_terms( array(
                  'taxonomy'    => 'category',
                  'hide_empty'  => false,
                  'posts_per_page' => -1, 
          ) );

      
      $cat_list = [];
    
      foreach($terms as $post) {
     
          $cat_list[$post->term_id]  = [$post->name];
      }
      
      return $cat_list;

  } 

   
}