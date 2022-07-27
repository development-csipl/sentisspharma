<?php 

function inzox_settings_api_init() {

    add_settings_section(
        'inzox_service_setting_section',
        esc_html__('Service Settings', 'inzox-essential'),
        null,
        'writing'
    );

    add_settings_section(
        'inzox_project_setting_section',
        esc_html__('Project Settings', 'inzox-essential'),
        null,
        'writing'
    );
    
    //services
    add_settings_field(
        'inzox_setting_slug',
        esc_html__('Service Slug', 'inzox-essential'),
        'inzox_service_slug_setting_callback_function',
        'writing',
        'inzox_service_setting_section'
    );

    add_settings_field(
        'inzox_singular_name',
        esc_html__('Service Singular Name', 'inzox-essential'),
        'inzox_service_singular_setting_callback_function',
        'writing',
        'inzox_service_setting_section'
    );

    add_settings_field(
        'inzox_plural_name',
        esc_html__('Service Plural Name', 'inzox-essential'),
        'inzox_service_plural_setting_callback_function',
        'writing',
        'inzox_service_setting_section'
    );

    // projects
    add_settings_field(
        'inzox_project_setting_slug',
        esc_html__('Project Slug', 'inzox-essential'),
        'inzox_project_slug_setting_callback_function',
        'writing',
        'inzox_project_setting_section'
    );

    add_settings_field(
        'inzox_project_singular_name',
        esc_html__('Project Singular Name', 'inzox-essential'),
        'inzox_project_singular_setting_callback_function',
        'writing',
        'inzox_project_setting_section'
    );

    add_settings_field(
        'inzox_project_plural_name',
        esc_html__('Project Plural Name', 'inzox-essential'),
        'inzox_project_plural_setting_callback_function',
        'writing',
        'inzox_project_setting_section'
    );

    // services category
    add_settings_field(
        'inzox_cat_setting_slug',
        esc_html__('Category Slug', 'inzox-essential'),
        'inzox_service_cat_slug_setting_callback_function',
        'writing',
        'inzox_service_setting_section'
    );
 
    add_settings_field(
     'inzox_cat_singular_name',
     esc_html__('Category Name', 'inzox-essential'),
     'inzox_service_cat_singular_setting_callback_function',
     'writing',
     'inzox_service_setting_section'
    );
 
     // services tag 
     add_settings_field(
         'inzox_tag_setting_slug',
         esc_html__('Tags Slug', 'inzox-essential'),
         'inzox_service_tag_slug_setting_callback_function',
         'writing',
         'inzox_service_setting_section'
     );
  
     add_settings_field(
      'inzox_tag_singular_name',
      esc_html__('Tags Name', 'inzox-essential'),
      'inzox_service_tag_singular_setting_callback_function',
      'writing',
      'inzox_service_setting_section'
     );

     // project category
    add_settings_field(
        'inzox_project_cat_setting_slug',
        esc_html__('Category Slug', 'inzox-essential'),
        'inzox_project_cat_slug_setting_callback_function',
        'writing',
        'inzox_project_setting_section'
    );
 
    add_settings_field(
     'inzox_project_cat_singular_name',
     esc_html__('Category Name', 'inzox-essential'),
     'inzox_project_cat_singular_setting_callback_function',
     'writing',
     'inzox_project_setting_section'
    );
 
     // project tag 
     add_settings_field(
         'inzox_project_tag_setting_slug',
         esc_html__('Tags Slug', 'inzox-essential'),
         'inzox_project_tag_slug_setting_callback_function',
         'writing',
         'inzox_project_setting_section'
     );
  
     add_settings_field(
      'inzox_project_tag_singular_name',
      esc_html__('Tags Name', 'inzox-essential'),
      'inzox_project_tag_singular_setting_callback_function',
      'writing',
      'inzox_project_setting_section'
     );
      
    // service cat
    register_setting( 'writing', 'inzox_cat_setting_slug' );
    register_setting( 'writing', 'inzox_cat_singular_name' );
    
    // service tag
    register_setting( 'writing', 'inzox_tag_setting_slug' );
    register_setting( 'writing', 'inzox_tag_singular_name' );
    
    // project cat
    register_setting( 'writing', 'inzox_project_cat_setting_slug' );
    register_setting( 'writing', 'inzox_project_cat_singular_name' );
    
    // project tag
    register_setting( 'writing', 'inzox_project_tag_setting_slug' );
    register_setting( 'writing', 'inzox_project_tag_singular_name' );

    // services slug
    register_setting( 'writing', 'inzox_setting_slug' );
    register_setting( 'writing', 'inzox_singular_name' );
    register_setting( 'writing', 'inzox_plural_name' );
    
    // projects slug
    register_setting( 'writing', 'inzox_project_setting_slug' );
    register_setting( 'writing', 'inzox_project_singular_name' );
    register_setting( 'writing', 'inzox_project_plural_name' );
} 

add_action( 'admin_init', 'inzox_settings_api_init' );


// services slug
function inzox_service_plural_setting_callback_function() {
    $name = get_option('inzox_plural_name');  
    echo '<input name="inzox_plural_name" id="inzox_plural_name" type="text" value="'.$name.'" />';
}

function inzox_service_singular_setting_callback_function() {
    $sname = get_option('inzox_singular_name');
    echo '<input name="inzox_singular_name" id="inzox_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_service_slug_setting_callback_function() {
    $slug = get_option('inzox_setting_slug');
    echo '<input name="inzox_setting_slug" id="inzox_setting_slug" type="text" value="'.$slug.'" />';
}

// projects slug
function inzox_project_plural_setting_callback_function() {
    $name = get_option('inzox_project_plural_name');  
    echo '<input name="inzox_project_plural_name" id="inzox_project_plural_name" type="text" value="'.$name.'" />';
}

function inzox_project_singular_setting_callback_function() {
    $sname = get_option('inzox_project_singular_name');
    echo '<input name="inzox_project_singular_name" id="inzox_project_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_project_slug_setting_callback_function() {
    $slug = get_option('inzox_project_setting_slug');
    echo '<input name="inzox_project_setting_slug" id="inzox_project_setting_slug" type="text" value="'.$slug.'" />';
}

// service cat
function inzox_service_cat_singular_setting_callback_function() {
    $sname = get_option('inzox_cat_singular_name');   
    echo '<input name="inzox_cat_singular_name" id="inzox_cat_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_service_cat_slug_setting_callback_function() {
    $slug = get_option('inzox_cat_setting_slug');
    echo '<input name="inzox_cat_setting_slug" id="inzox_cat_setting_slug" type="text" value="'.$slug.'" />';
}

// service tag
function inzox_service_tag_singular_setting_callback_function() {
    $sname = get_option('inzox_tag_singular_name');
    echo '<input name="inzox_tag_singular_name" id="inzox_tag_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_service_tag_slug_setting_callback_function() {
    $slug = get_option('inzox_tag_setting_slug');
    echo '<input name="inzox_tag_setting_slug" id="inzox_tag_setting_slug" type="text" value="'.$slug.'" />';
}

// project cat
function inzox_project_cat_singular_setting_callback_function() {
    $sname = get_option('inzox_project_cat_singular_name');   
    echo '<input name="inzox_project_cat_singular_name" id="inzox_project_cat_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_project_cat_slug_setting_callback_function() {
    $slug = get_option('inzox_project_cat_setting_slug');
    echo '<input name="inzox_project_cat_setting_slug" id="inzox_project_cat_setting_slug" type="text" value="'.$slug.'" />';
}

// project tag
function inzox_project_tag_singular_setting_callback_function() {
    $sname = get_option('inzox_project_tag_singular_name');
    echo '<input name="inzox_project_tag_singular_name" id="inzox_project_tag_singular_name" type="text" value="'.$sname.'" />';
}

function inzox_project_tag_slug_setting_callback_function() {
    $slug = get_option('inzox_project_tag_setting_slug');
    echo '<input name="inzox_project_tag_setting_slug" id="inzox_project_tag_setting_slug" type="text" value="'.$slug.'" />';
}