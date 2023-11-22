<?php
/**
 * Este arquivo concentra todos os shortcodes do plugin
 */

 if( !defined('WPINC') ) { die(); }

 function cc_consulta_cep() {
  return '<div id="div-form">
            <form id="form" action="" method="post">
              <label for="cep">Digite o seu CEP:</label>
              <input type="text" name="cep" id="cep" >
              <input type="submit" value="Consultar" >
            </form>
          </div>
          <div id="div-res"></div>
          ';
 }

 function cc_register_shortcodes() {
  add_shortcode('consulta_cep', 'cc_consulta_cep');
 }

 add_action('init', 'cc_register_shortcodes');