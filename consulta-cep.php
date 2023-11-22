<?php
/**
 * Plugin Name: Consulta CEP
 * Plugin URI: https://meuplugin.com
 * Description: Consulta de endereços a partir do CEP informado
 * Version: 1.0
 * Author: Geraldo Alves
 * Author URI: https://geraldoalves.dev 
 */

 if( !defined('WPINC') ) { die(); }

 if( file_exists(plugin_dir_path(__FILE__).'cc-core-init.php') ) {
  require_once( plugin_dir_path(__FILE__).'cc-core-init.php');
 }