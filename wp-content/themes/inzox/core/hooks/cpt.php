<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * hooks for wp blog part
 */

// if there is no excerpt, sets a defult placeholder
// ----------------------------------------------------------------------------------------

if ( class_exists( 'InzoxCustomPost\Inzox_CustomPost' ) ) {

	//Projects 
	
	$project = new InzoxCustomPost\Inzox_CustomPost( 'inzox' );

	$project_slug = sanitize_title(get_option('inzox_project_setting_slug','project'));
	$project_plural_name = esc_html(get_option('inzox_project_plural_name','Projects'));
	$project_singular_name = esc_html(get_option('inzox_project_singular_name','Project'));

	if($project_plural_name==''){
		$project_plural_name = esc_html__('Projects','inzox');
	 }
	 if($project_singular_name==''){
		$project_singular_name = esc_html__('Project','inzox'); 
	 }
	 if($project_slug==''){
		$project_slug = esc_html__('project','inzox');
	 }
	 $project_rewrite = array( 'slug' => $project_slug);

	$project->xs_init( 'ts-project', $project_singular_name, $project_plural_name, array( 'menu_icon' => 'dashicons-calendar-alt',
		'supports'	 => array( 'title','editor','thumbnail','excerpt'),
		'rewrite'	 => $project_rewrite )
	);

	// projects cat settings
	$project_cat_slug = sanitize_title(get_option('inzox_project_cat_setting_slug','Project Categories'));
	$project_cat_singular_name = esc_html(get_option('inzox_project_cat_singular_name','Project Category'));
	if($project_cat_slug==''){
		$project_cat_slug = esc_html__('Project Categories','inzox');
	}
	if($project_cat_singular_name==''){
		$project_cat_singular_name = esc_html__('Project Category','inzox'); 
	}
	
	$project_cat = new  InzoxCustomPost\Inzox_Taxonomies('inzox');
	$project_cat->xs_init('ts-project_cat', $project_cat_singular_name, $project_cat_slug, 'ts-project');
	
	// projects tag settings
	$project_tag_slug = sanitize_title(get_option('inzox_project_tag_setting_slug','Project Tags'));
	$project_tag_singular_name = esc_html(get_option('inzox_project_tag_singular_name','Project Tag'));
	if($project_tag_slug==''){
		$project_tag_slug = esc_html__('Project Tags','inzox');
	}
	if($project_tag_singular_name==''){
		$project_tag_singular_name = esc_html__('Project Tag','inzox'); 
	}

	$project_tag = new  InzoxCustomPost\Inzox_Taxonomies('inzox');
	$project_tag->xs_init('ts-project_tag', $project_tag_singular_name, $project_tag_slug, 'ts-project'); 

	//services
	$service = new InzoxCustomPost\Inzox_CustomPost( 'inzox' );

	$slug = sanitize_title(get_option('inzox_setting_slug','service'));
	$plural_name = esc_html(get_option('inzox_plural_name','services'));
	$singular_name = esc_html(get_option('inzox_singular_name','service'));

	if($plural_name==''){
		$plural_name = esc_html__('Services','inzox');
	 }
	 if($singular_name==''){
		$singular_name = esc_html__('Service','inzox'); 
	 }
	 if($slug==''){
		$slug = esc_html__('service','inzox');
	 }
	 $rewrite = array( 'slug' => $slug);

    $service->xs_init( 'ts-service', $singular_name, $plural_name, array( 'menu_icon' => 'dashicons-welcome-write-blog',
		'supports'	 => array( 'title','editor','thumbnail','excerpt',),
		'rewrite'	 => $rewrite,
		'exclude_from_search' => true,
		)	
	);
	
	// services cat settings
	$cat_slug = sanitize_title(get_option('inzox_cat_setting_slug','Service Categories'));
	$cat_singular_name = esc_html(get_option('inzox_cat_singular_name','Service Category'));
	if($cat_slug==''){
		$cat_slug = esc_html__('Service Categories','inzox');
	}
	if($cat_singular_name==''){
		$cat_singular_name = esc_html__('Service Category','inzox'); 
	}

	$services_cat = new  InzoxCustomPost\Inzox_Taxonomies('inzox');
	$services_cat->xs_init('ts-service_cat', $cat_singular_name, $cat_slug, 'ts-service');

	// services tag settings
	$tag_slug = sanitize_title(get_option('inzox_tag_setting_slug','Service Tag'));
	$tag_singular_name = esc_html(get_option('inzox_tag_singular_name','Service Tag'));
	if($tag_slug==''){
		$tag_slug = esc_html__('Service Tag','inzox');
	}
	if($tag_singular_name==''){
		$tag_singular_name = esc_html__('Service Tag','inzox'); 
	}
	
	$services_tag = new  InzoxCustomPost\Inzox_Taxonomies('inzox');
	$services_tag->xs_init('ts-service_tag', $tag_singular_name, $tag_slug, 'ts-service'); 

}