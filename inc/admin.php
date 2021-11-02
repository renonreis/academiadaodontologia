<?php

/**
 * Remove Admin Welcome
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Remove Admin Bar Front
 */
show_admin_bar(false);

/**
 * Change error Login menssage
 */
function no_wordpress_errors(){
  return 'Email e/ou senha inválidos!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

/**
 * Custom WP Admin Login 
 */
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/admin/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/**
 * Rename images on upload
 */
function my_custom_file_name($filename){
	$info = pathinfo($filename);
	$ext = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);        

	$finalFileName = sanitize_title($name);

	return $finalFileName . $ext;
}
add_filter('sanitize_file_name', 'my_custom_file_name', 10);