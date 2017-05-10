<?php

/*
Plugin Name: keiko-email
Description: Get and show emails
Author: keiko
Version: 0.1
*/

/* This line makes sure the plugin is used by Wordpress and not directly */
defined('ABSPATH') or die('Fin');

add_action('admin_menu', 'keiko_email_menu');

function keiko_email_menu() {
  add_menu_page('List of Emails', 'Emails', 'manage_options', 'menu-keiko-emails', 'keiko_email');
}

function keiko_email() {
    global $wpdb;
    $emails = $wpdb->get_col("SELECT email FROM `wp-email`" );

    if ( $emails ){
        echo "liste des emails"."</br>";
      	foreach ( $emails as $email ){
            // echo "test";
      	     echo $email."</br>";
      	}
    }
}
