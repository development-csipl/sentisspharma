<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * enqueue static files: javascript and css for backend
 */

wp_enqueue_style('iconfont', INZOX_CSS . '/iconfont.css', null, INZOX_VERSION);
wp_enqueue_style('inzox-admin', INZOX_CSS . '/inzox-admin.css', null, INZOX_VERSION);
wp_enqueue_script('inzox-admin', INZOX_JS . '/inzox-admin.js', array('jquery'), INZOX_VERSION, true);