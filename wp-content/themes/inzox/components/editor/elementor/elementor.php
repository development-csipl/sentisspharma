<?php

if ( ! defined( 'ABSPATH' ) ) exit;

if(defined('ELEMENTOR_VERSION')):

include_once INZOX_EDITOR . '/elementor/manager/controls.php';

class INZOX_Shortcode{

	/**
     * Holds the class object.
     *
     * @since 1.0
     *
     */
    public static $_instance;
    

    /**
     * Localize data array
     *
     * @var array
     */
    public $localize_data = array();

	/**
     * Load Construct
     * 
     * @since 1.0
     */

	public function __construct(){

		add_action('elementor/init', array($this, 'INZOX_elementor_init'));
        add_action('elementor/controls/controls_registered', array( $this, 'INZOX_icon_pack' ), 11 );
        add_action('elementor/controls/controls_registered', array( $this, 'control_image_choose' ), 13 );
        add_action('elementor/controls/controls_registered', array( $this, 'INZOX_ajax_select2' ), 11 );
        add_action('elementor/widgets/widgets_registered', array($this, 'INZOX_shortcode_elements'));
        add_action( 'elementor/editor/after_enqueue_styles', array( $this, 'editor_enqueue_styles' ) );
        add_action( 'elementor/frontend/before_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action( 'elementor/preview/enqueue_styles', array( $this, 'preview_enqueue_scripts' ) );

        $this -> Inzox_elementor_icon_pack();
        
	}


    /**
     * Enqueue Scripts
     *
     * @return void  
     */ 
    
     public function enqueue_scripts() {
         wp_enqueue_script( 'inzox-main-elementor', INZOX_JS  . '/elementor.js',array( 'jquery', 'elementor-frontend' ), INZOX_VERSION, true );

         // ekit pro script and style
        if (class_exists('ElementsKit_Lite')) {
            if(\ElementsKit_Lite::package_type() == 'free' && !in_array('elementskit/elementskit.php', apply_filters('active_plugins', get_option('active_plugins')))){
                wp_enqueue_style( 'inzox-widget-styles-pro', INZOX_CSS . '/widget-styles-pro.css', null, INZOX_VERSION );
                wp_enqueue_script( 'inzox-widget-scripts-pro', INZOX_JS . '/widget-scripts-pro.js', array( 'jquery', 'elementor-frontend' ), INZOX_VERSION, true );
            }
        }
    }

    /**
     * Enqueue editor styles
     *
     * @return void
     */

    public function editor_enqueue_styles() {
  
        wp_enqueue_style( 'inzox-icon-elementor', INZOX_CSS.'/iconfont.css',null, INZOX_VERSION );

    }

    /**
     * Preview Enqueue Scripts
     *
     * @return void
     */

    public function preview_enqueue_scripts() {}
	/**
     * Elementor Initialization
     *
     * @since 1.0
     *
     */

    public function INZOX_elementor_init(){
    
        \Elementor\Plugin::$instance->elements_manager->add_category(
            'inzox-elements',
            [
                'title' =>esc_html__( 'INZOX', 'inzox' ),
                'icon' => 'fa fa-plug',
            ],
            1
        );
    }

    /**
     * Extend Icon pack core controls.
     *
     * @param  object $controls_manager Controls manager instance.
     * @return void
     */ 

    public function INZOX_icon_pack( $controls_manager ) {

        require_once INZOX_EDITOR_ELEMENTOR. '/controls/icon.php';

        $controls = array(
            $controls_manager::ICON => 'Inzox_Icon_Controler',
        );

        foreach ( $controls as $control_id => $class_name ) {
            $controls_manager->unregister_control( $control_id );
            $controls_manager->register_control( $control_id, new $class_name() );
        }

    }


    // elementor icon fonts loaded

        public function Inzox_elementor_icon_pack(  ) {

            $this->__generate_font();
            
            add_filter( 'elementor/icons_manager/additional_tabs', function(){
                    return apply_filters( 'elementor/icons_manager/native', [
                        
                        'icon-inzox' => [
                            'name' => 'icon-inzox',
                            'label' => esc_html__( 'Inzox Icon', 'inzox' ),
                            'url' => INZOX_CSS . '/iconfont.css',
                            'enqueue' => [ INZOX_CSS . '/iconfont.css' ],
                            'prefix' => 'icon-',
                            'displayPrefix' => 'icon',
                            'labelIcon' => 'icon icon-hand',
                            'ver' => '5.9.0',
                            'fetchJson' => INZOX_JS . '/iconfont.js',
                            'native' => true,
                        ]
                    ]);
                }
            );
            
        }
	
        public function __generate_font(){
            global $wp_filesystem;
    
            require_once ( ABSPATH . '/wp-admin/includes/file.php' );
            WP_Filesystem();
            $css_file =  INZOX_CSS_DIR . '/iconfont.css';
        
            if ( $wp_filesystem->exists( $css_file ) ) {
                $css_source = $wp_filesystem->get_contents( $css_file );
            } // End If Statement
            
            preg_match_all( "/\.(icon-.*?):\w*?\s*?{/", $css_source, $matches, PREG_SET_ORDER, 0 );
            $iconList = [];
            
            foreach ( $matches as $match ) {
                $new_icons[$match[1] ] = str_replace('icon-', '', $match[1]);
                $iconList[] = str_replace('icon-', '', $match[1]);
            }

            $icons = new \stdClass();
            $icons->icons = $iconList;
            $icon_data = json_encode($icons);
            
            $file = INZOX_THEME_DIR . '/assets/js/iconfont.js';
            
                global $wp_filesystem;
                require_once ( ABSPATH . '/wp-admin/includes/file.php' );
                WP_Filesystem();
                if ( $wp_filesystem->exists( $file ) ) {
                    $content =  $wp_filesystem->put_contents( $file, $icon_data) ;
                } 
            
        }


    // registering ajax select 2 control
    public function INZOX_ajax_select2( $controls_manager ) {
        require_once INZOX_EDITOR_ELEMENTOR. '/controls/select2.php';
        $controls_manager->register_control( 'ajaxselect2', new \Control_Ajax_Select2() );
    }
    
    // registering image choose
    public function control_image_choose( $controls_manager ) {
        require_once INZOX_EDITOR_ELEMENTOR. '/controls/choose.php';
        $controls_manager->register_control( 'imagechoose', new \Control_Image_Choose() );
    }

    public function INZOX_shortcode_elements($widgets_manager){

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/services.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Services_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/project.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Project_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/owlslider.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_OwlSlider_Widget());


        if(class_exists('\Elementor\Elementskit_Widget_Gallery')){
            $widgets_manager->register_widget_type(new Elementor\Elementskit_Widget_Gallery());
        }

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/title.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Title_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/testimonial.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Testimonial_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/sitelogo.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Site_Logo_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/back-to-top.php';
        $widgets_manager->register_widget_type(new Elementor\inzox_BackToTop_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/blog.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_Blog_Widget());

        require_once INZOX_EDITOR_ELEMENTOR.'/widgets/client-logo.php';
        $widgets_manager->register_widget_type(new Elementor\Inzox_ClientLogo_Widget());
    
    }
    
	public static function INZOX_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new INZOX_Shortcode();
        }
        return self::$_instance;
    }

}
$INZOX_Shortcode = INZOX_Shortcode::INZOX_get_instance();

endif;