<?php
 

   if ( defined( 'FW' ) ) { 
   // sticky header
   $inzox_header_nav_sticky = inzox_option('header_nav_sticky');
   $inzox_shop_btn_show = inzox_option('shop_btn_show');

	$inzox_button_settings = inzox_option('header_table_button_settings');
	//Page settings
	$inzox_header_btn_show = $inzox_button_settings['header_btn_show'];
	$inzox_header_btn_url = $inzox_button_settings['header_btn_url'];
   $inzox_header_btn_title = $inzox_button_settings['header_btn_title'];
   

    // of canvas 
    $header_offcanvas_settings = inzox_option("header_offcanvas_settings");

    $header_offcanvas_show  = $header_offcanvas_settings['header_offcanvas_show'];

   }else{

	$inzox_header_btn_show = 'no';
	$inzox_shop_btn_show = 'no';
   $inzox_header_nav_sticky = 'no';
	$inzox_header_btn_url = '#';
   $inzox_header_btn_title =  esc_html__('Book a table ','inzox');
         
   //  off canvas 
   $header_offcanvas_show = 'no';
   }

?>

<!-- header nav start-->
<header id="header" class="header header-standard  <?php echo esc_attr($inzox_header_nav_sticky=='yes'?'navbar-sticky':''); ?>">

        <!-- navbar container start -->
        <div class="navbar-container">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url('/')); ?>">
                        <img src="<?php 
                           echo esc_url(
                              inzox_src(
                                 'general_main_logo',
                                 INZOX_IMG . '/logo/logo.png'
                              )
                           );
                        ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav"
                        aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                    </button>
                    <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
                    <!-- collapse end -->
                    <?php if(defined('FW')): ?>
                     <ul class="header-nav-right-info form-inline">
                         <?php if($inzox_header_btn_show=='yes'): ?>
                            <li class="header-book-btn">
                                <a href="<?php echo esc_url($inzox_header_btn_url); ?>" class="btn btn-primary"><?php echo esc_html($inzox_header_btn_title); ?></a>
                            </li>
                         <?php endif; ?>
                         <?php if($inzox_shop_btn_show == "yes" && class_exists( 'WooCommerce' )): ?>
                              <li>
                                 <div class="header-cart">
                                    <div class="cart-link">
                                       <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e('View your shopping cart', 'inzox'); ?>">
                                       <span class="icon icon-tscart"></span>
                                       <sup><?php echo sprintf(_n('%d item', '%d', WC()->cart->cart_contents_count, 'inzox'), WC()->cart->cart_contents_count);?></sup>
                                       
                                       </a>
                                    </div>
                                 </div>
                              </li>
                           <?php endif; ?> 
                         <!-- off canvas -->
                           <?php if($header_offcanvas_show == 'yes'): ?>
                           <li>
                              <a href="#" class="navSidebar-button">
                                 <i class="icon icon-humburger"></i>
                              </a>
                           </li>
                           <?php endif; ?>
                     </ul>
                  <?php endif; ?>
                </nav>
                <!-- nav end -->
            </div>
            <!-- container end -->
        </div>
        <!-- navbar contianer end -->
</header>

<?php get_template_part( 'template-parts/navigations/offcanvas', 'menu' ); ?>
