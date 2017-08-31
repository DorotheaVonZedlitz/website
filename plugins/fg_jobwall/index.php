<?php
/*
Plugin Name: linkIT Jobwall
Description: A simple plugin for our jobwall.
Author: Florian Göbel
Author URI: https://www.xing.com/profile/Florian_Goebel26?sc_o=mxb_p
Version: 0.7
*/

//Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

$dir = plugin_dir_path(__FILE__);

require_once plugin_dir_path(__FILE__) . 'wp_job_cpt.php';
require_once plugin_dir_path(__FILE__) . 'wp_job_fields.php';
require_once plugin_dir_path(__FILE__) . 'wp_job_render_admin.php';
require_once plugin_dir_path(__FILE__) . 'wp-job-shortcode.php';


function fg_admin_enqueue_scripts() {

  global $pagenow, $typenow;

  if( $typenow == 'job' ) {
    //Plugin Main CSS File.
		wp_enqueue_style( 'fg-admin-css', plugins_url( 'css/admin-jobs.css', __FILE__ ) );
  }

	if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'job' ) {
		//Datepicker Styles
    wp_enqueue_script( 'fg-job-js', plugins_url( 'js/admin-jobs.js', __FILE__ ), array( 'jquery', 'jquery-ui-datepicker' ), '20170830', true );

		wp_enqueue_style( 'jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css' );
	}

  if ( $pagenow == 'edit.php' && $typenow == 'job') {

    wp_enqueue_script( 'reorder-js', plugins_url( 'js/reorder.js', __FILE__ ), array( 'jquery', 'jquery-ui-sortable' ), '20150626', true );

    wp_localize_script( 'reorder-js', 'WP_JOB_LISTING', array(
      'security' => wp_create_nonce('wp-job-order'),
      'success' => 'Jobs sort order has been saved',
      'failure' => 'There was an error saving the sort order, or you do not have
      proper permissions.'
    ) );

  }

}
add_action('admin_enqueue_scripts', 'fg_admin_enqueue_scripts');


function fg_add_submenu_page() {

  add_submenu_page(
    'edit.php?post_type=job',
    'Reorder Jobs',
    'Reorder Jobs',
    'manage_options',
    'reorder_jobs',
    'reorder_admin_jobs_callback'
  );

}
add_action( 'admin_menu', 'fg_add_submenu_page');


 ?>
