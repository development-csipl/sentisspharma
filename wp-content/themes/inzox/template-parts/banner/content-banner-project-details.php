<?php 
   $inzox_banner_image    =  '';
   $inzox_banner_title    = '';
   $inzox_header_style    = 'standard';
   
if ( defined( 'FW' ) ) { 
   $inzox_banner_settings         = inzox_option('project_banner_setting');
   $inzox_banner_image            = inzox_meta_option( get_the_ID(), 'header_image' ); 
   $inzox_banner_style            = inzox_option('sub_page_banner_style');
   $inzox_header_style            = inzox_option('header_layout_style', 'standard');
  
   //image
   if(is_array($inzox_banner_image) && $inzox_banner_image['url'] != '' ){
      $inzox_banner_image = $inzox_banner_image['url'];
   }elseif( is_array($inzox_banner_settings['banner_project_image']) && $inzox_banner_settings['banner_project_image']['url'] != ''){
         $inzox_banner_image = $inzox_banner_settings['banner_project_image']['url'];
   }else{
      $inzox_banner_image = INZOX_IMG.'/banner/banner.jpg';
   }

   //title
   if(inzox_meta_option( get_the_ID(), 'header_title' ) != ''){
      $inzox_banner_title = inzox_meta_option( get_the_ID(), 'header_title' );
   }elseif($inzox_banner_settings['banner_project_title'] != ''){
      $inzox_banner_title = $inzox_banner_settings['banner_project_title'];
   }else{
      $inzox_banner_title   = get_the_title();
   }

   //show
   $inzox_show = (isset($inzox_banner_settings['project_show_banner'])) ? $inzox_banner_settings['project_show_banner'] : 'yes'; 
    
   //breadcumb 
   $inzox_show_breadcrumb =  (isset($inzox_banner_settings['project_show_breadcrumb'])) ? $inzox_banner_settings['project_show_breadcrumb'] : 'yes';

 }else{
     //default
   $inzox_banner_image             = '';
   $inzox_banner_title             = get_the_title();
   $inzox_show                     = 'yes';
   $inzox_show_breadcrumb          = 'no';

     
 }
 if( isset($inzox_banner_image) && $inzox_banner_image != ''){
    $inzox_banner_image = 'style="background-image:url('.esc_url( $inzox_banner_image ).');"';
}
$inzox_banner_heading_class = '';
if($inzox_header_style=="transparent"){
   $inzox_banner_heading_class     = "mt-80"; 
} elseif($inzox_header_style== 'standard'){
      $inzox_banner_heading_class     = "mt-80";   
}

?>

<?php if(isset($inzox_show) && $inzox_show == 'yes'): ?>

     <div class="banner-area <?php echo esc_attr($inzox_banner_image == ''?'banner-solid':'banner-bg'); ?>" <?php echo inzox_kses( $inzox_banner_image ); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                      <div class="banner-content">
                        <h2 class="banner-title <?php echo esc_attr($inzox_banner_heading_class); ?>">
                             
                              <?php 
                                 if(is_archive()){
                                     the_archive_title();
                                 }elseif(is_single()){
                                     the_title();
                                 }
                                 else{
                                    $title = str_replace(['{', '}'], ['<span>', '</span>'],$inzox_banner_title ); 
                                     echo inzox_kses( $title);
                                 }
                              ?> 
                           </h2>
                      </div>
                         <?php if(isset($inzox_show_breadcrumb) && $inzox_show_breadcrumb == 'yes'): ?>
                            <?php //inzox_get_breadcrumbs(' / ');
                            
                            
                            
                            ?>
                         <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>  
  
<?php endif; ?>     