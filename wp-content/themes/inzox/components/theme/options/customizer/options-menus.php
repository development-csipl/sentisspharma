<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: menus
 */

$options =[
   'menu_settings' => [
       'title'		 => esc_html__( 'Menu settings', 'inzox' ),

       'options'	 => [
           'menu_color' => [
               'label'	        => esc_html__( 'Menu Color', 'inzox' ),
               'desc'	        => esc_html__( 'This is the site\'s main menu  color.', 'inzox' ),
               'type'	        => 'color-picker',

            ], //menu style
           'menu_hover_color' => [
               'label'	        => esc_html__( 'Menu Hover Color', 'inzox' ),
               'desc'	        => esc_html__( 'This is the site\'s main menu hover color.', 'inzox' ),
               'type'	        => 'color-picker',

            ], //menu style

           'dropdown_menu_color' => [
               'label'	        => esc_html__( 'Dropdown Menu Color', 'inzox' ),
               'desc'	        => esc_html__( 'This is the site\'s main dropdown menu color.', 'inzox' ),
               'type'	        => 'color-picker',

            ], //menu style
           'dropdown_menu_hover_color' => [
               'label'	        => esc_html__( 'Dropdown Menu Hover Color', 'inzox' ),
               'desc'	        => esc_html__( 'This is the site\'s main dropdown menu Hover color.', 'inzox' ),
               'type'	        => 'color-picker',

            ], //menu style

            'menu_font'    => array(
               'type' => 'typography-v2',
               'label' => esc_html__('Menu Font', 'inzox'),
               'desc'  => esc_html__('Choose the typography for the menu', 'inzox'),
               'value' => array(
                   'family' => 'Barlow',
                   'size'  => '14',
                   'font-weight' => '700',
               ),
               'components' => array(
                   'family'         => true,
                   'size'           => true,
                   'line-height'    => false,
                   'letter-spacing' => false,
                   'color'          => false,
                   'font-weight'    => true,
               ),
           ),
   
       ], //Options end
   ]
];