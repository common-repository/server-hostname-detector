<?php
/*
Plugin Name: Snat's Hostname Detector
Description: This plugin is designed that if you was using WordPres on more then one server that by just viewing the source code you will be able to see which server the page was loaded from.
Version: 1.2
Author: Snat
Author URI: https://snat.co.uk/
License: GPLv2 or later
*/

function snat_display_server_hostname() {
    echo "<!--" . gethostname() . "-->";
    
  }
  
  add_action('wp_footer', 'snat_display_server_hostname');

?>