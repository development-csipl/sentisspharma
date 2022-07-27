<?php
/**
 * Blog Header
 *
 */
 
$inzox_banner_bg	 = $inzox_banner_title = $inzox_banner_subtitle = '';
$inzox_header_style    = 'standard';
 
if ( defined( 'FW' ) ) {
    
    $inzox_banner_settings = inzox_option('shop_banner_settings');
    //Page settings
    $inzox_header_style    = inzox_option('header_layout_style', 'standard');

    $inzox_show = (isset($inzox_banner_settings['show'])) ? $inzox_banner_settings['show'] : 'yes'; 
    $inzox_show_breadcrumb = (isset($inzox_banner_settings['show_breadcrumb'])) ? $inzox_banner_settings['show_breadcrumb'] : 'yes';

    $inzox_banner_title = (isset($inzox_banner_settings['title']) && $inzox_banner_settings['title'] != '') ? 
                        $inzox_banner_settings['title'] : esc_html__('Products','inzox');
    $inzox_single_title = (isset($inzox_banner_settings['single_title']) && $inzox_banner_settings['single_title'] != '') ? 
                        $inzox_banner_settings['single_title'] : esc_html__('Products','inzox');

    $inzox_banner_image = ( is_array($inzox_banner_settings['image']) && $inzox_banner_settings['image']['url'] != '') ? 
                        $inzox_banner_settings['image']['url'] : INZOX_IMG.'/banner/banner.jpg';

}else{
    $inzox_banner_image =INZOX_IMG.'/banner/banner_image.png';
    $inzox_banner_title = esc_html__('Shop','inzox');
    $inzox_single_title = esc_html__('Products','inzox');
    $inzox_show = 'yes';
    $inzox_show_breadcrumb = 'yes';
}
if( isset($inzox_banner_image) && $inzox_banner_image != ''){
    $inzox_banner_bg = 'style="background-image:url('.esc_url( $inzox_banner_image ).');"';
}

if(isset($inzox_show) && $inzox_show == 'yes'): ?>

<?php

   $inzox_banner_heading_class = '';

   if( $inzox_header_style=="transparent" ){
      $inzox_banner_heading_class     = "mt-80"; 
   } elseif( $inzox_header_style== 'standard' ){
      $inzox_banner_heading_class     = "mt-80";   
   }
?>

<div id="shop-banner-area" class="shop-banner banner-area" <?php echo inzox_kses( $inzox_banner_bg ); ?>>
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
               
               <div class="banner-content">
                  <h2 class="banner-title <?php echo esc_attr($inzox_banner_heading_class); ?>">
                        <?php 
                           if(is_shop()){
                                 $shop_title = explode(':',get_the_archive_title() );

                                
                                 if(isset($inzox_banner_title)){
                                    echo inzox_kses($inzox_banner_title);
                                 }else{
                                    echo inzox_kses($shop_title[1]);
                                 }
                           }elseif(is_product()){
                                 echo inzox_kses( $inzox_single_title );
                           }else{
                                 echo inzox_kses( $inzox_banner_title );
                           }
                        ?>
                     </h2> 
                     <?php if($inzox_show_breadcrumb == 'yes'): ?>
                        <?php woocommerce_breadcrumb(); ?>
                     <?php endif; ?>
               </div>
               
         </div>
      </div>
   </div>
</div><!-- Page Banner end -->

<?php endif; ?>