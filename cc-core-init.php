<?php
/**
 * Arquivo inicializa todos os componentes do plugin
 */

 if( !defined('WPINC') ) { die(); }

 define('CC_CORE_JS', plugins_url('js/', __FILE__));
 define('CC_CORE_CSS', plugins_url('css/', __FILE__));
 define('CC_CORE_INC', dirname(__FILE__).'/inc/');

//  Registrando CSS (Front-end)

function cc_register_core_css() {
  wp_enqueue_style('cc-core-css', CC_CORE_CSS.'cc-core.css', null, time(), 'all');
}

add_action('wp_enqueue_scripts', 'cc_register_core_css');

// Registrando JavaScript (Front-end)
add_action('wp_enqueue_scripts', 'cc_register_core_js');

function cc_register_core_js() {
  wp_enqueue_script('cc-core-js', CC_CORE_JS.'cc-core.js', array(), time(), true);
}

// Includes

if( file_exists(CC_CORE_INC.'cc-core-functions.php') ) {
  require_once(CC_CORE_INC.'cc-core-functions.php');
}

if( file_exists(CC_CORE_INC.'cc-shortcodes.php') ) {
  require_once(CC_CORE_INC.'cc-shortcodes.php');
}