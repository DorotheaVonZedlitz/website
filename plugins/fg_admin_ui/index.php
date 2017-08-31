<?php
/*
Plugin Name: linkIT Admin UI
Description: This plugin customizes the UI.
Author: Florian Göbel
Author URI: https://www.xing.com/profile/Florian_Goebel26?sc_o=mxb_p
Version: 1.0
*/

//Adds a Google Analytics menu item to the top bar
function fg_add_google_analytics() {

  global $wp_admin_bar;
  $args = array(
    'id' => 'google_analytics',
    'title' => 'Google Analystics',
    'href' => 'https://analytics.google.com/analytics/web/?authuser=1#report/visitors-overview/a87346012w129842315p133650029/'
  );
  $wp_admin_bar->add_menu( $args );


}
add_action("wp_before_admin_bar_render", "fg_add_google_analytics");
 ?>
