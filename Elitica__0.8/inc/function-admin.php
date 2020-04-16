<?php

/**
 * 
 * @package Elitica
 *
 *
 *
 */

function elitca_add_admin_page()
{

  //Generate elitca Admin Page
  add_menu_page('elitca Theme Options', 'elitca', 'manage_options', 'xa_elitca', 'elitca_theme_create_page', get_template_directory_uri() . '/img/elitca-icon.png', 110);

  //Generate elitca Admin Sub Pages
  add_submenu_page('xa_elitca', 'elitca Sidebar Options', 'Sidebar', 'manage_options', 'xa_elitca', 'elitca_theme_create_page');
}
add_action('admin_menu', 'elitca_add_admin_page');
//Activate custom settings
add_action('admin_init', 'elitca_custom_settings');
function elitca_custom_settings()
{
  //Sidebar Options

  register_setting('elitca-settings-group', 'twitter_url');
  register_setting('elitca-settings-group', 'facebook_url');
  register_setting('elitca-settings-group', 'gplus_url');
  register_setting('elitca-settings-group', 'instagram_url');
  register_setting( 'elitca-settings-group', 'youtube_url' );
  register_setting( 'elitca-settings-group', 'linkedin_url' );
  register_setting( 'elitca-settings-group', 'github_url' );
  register_setting( 'elitca-settings-group', 'reddit_url' );


  
  add_settings_section('elitca-sidebar-options', 'Sidebar Option', 'elitca_sidebar_options', 'xa_elitca');

  add_settings_field('sidebar-facebook', 'Facebook url', 'elitca_sidebar_facebook', 'xa_elitca', 'elitca-sidebar-options');
  add_settings_field('sidebar-twitter', 'Twitter url', 'elitca_sidebar_twitter', 'xa_elitca', 'elitca-sidebar-options');
  add_settings_field('sidebar-gplus', 'Google+ url', 'elitca_sidebar_gplus', 'xa_elitca', 'elitca-sidebar-options');
  add_settings_field('sidebar-instagram', 'instagram url', 'elitca_sidebar_instagram', 'xa_elitca', 'elitca-sidebar-options');
 add_settings_field( 'sidebar-youtube', 'youtube url', 'elitca_sidebar_youtube', 'xa_elitca', 'elitca-sidebar-options');
 add_settings_field( 'sidebar-linkedin', 'linkedin url', 'elitca_sidebar_linkedin', 'xa_elitca', 'elitca-sidebar-options'); 
 add_settings_field( 'sidebar-github', 'github url', 'elitca_sidebar_github', 'xa_elitca', 'elitca-sidebar-options');
 add_settings_field( 'sidebar-reddit', 'reddit url', 'elitca_sidebar_reddit', 'xa_elitca', 'elitca-sidebar-options');

 
 
 
 //Theme Support Options

  add_settings_section('elitca-theme-options', 'Theme Options', 'elitca_theme_options', 'xa_elitca_theme');


  //
}





// Sidebar Options Functions
function elitca_sidebar_options()
{
  echo 'Customize your Sidebar Information';
}



function elitca_sidebar_twitter()
{
  $twitter = esc_attr(get_option('twitter_url'));
  echo '<input type="text" name="twitter_url" value="' . $twitter . '" placeholder="Twitter url" />';
  echo '<br>',$twitter;

}
function elitca_sidebar_facebook()
{
  $facebook = esc_attr(get_option('facebook_url'));
  echo '<input type="text" name="facebook_url" value="' . $facebook . '" placeholder="Facebook url" />';
  echo '<br>',$facebook;
}
function elitca_sidebar_gplus()
{
  $gplus = esc_attr(get_option('gplus_url'));
  echo '<input type="text" name="gplus_url" value="' . $gplus . '" placeholder="Google+ url" />';
  echo '<br>',$gplus;

}

function elitca_sidebar_instagram()
{
  $instagram = esc_attr(get_option('instagram_url'));
  echo '<input type="text" name="instagram_url" value="' . $instagram . '" placeholder="instagram url" />';
  echo '<br>',$instagram;

}

   
function elitca_sidebar_youtube() {
  $youtube = esc_attr( get_option( 'youtube_url' ) );
  echo '<input type="text" name="youtube_url" value="'.$youtube.'" placeholder="youtube url" />';
  echo '<br>',$youtube;
}

   
function elitca_sidebar_linkedin() {
  $linkedin = esc_attr( get_option( 'linkedin_url' ) );
  echo '<input type="text" name="linkedin_url" value="'.$linkedin.'" placeholder="linkedin url" />';
  echo '<br>',$linkedin;

}

function elitca_sidebar_github() {
  $github = esc_attr( get_option( 'github_url' ) );
  echo '<input type="text" name="github_url" value="'.$github.'" placeholder="github url" />';
  echo '<br>',$github;

}

   
function elitca_sidebar_reddit() {
  $reddit = esc_attr( get_option( 'reddit_url' ) );
  echo '<input type="text" name="reddit_url" value="'.$reddit.'" placeholder="reddit url" />';
  echo '<br>',$reddit;

}

//Template submenu functions
function elitca_theme_create_page()
{
  require_once(get_template_directory() . '/inc/elitica-admin.php');
}
