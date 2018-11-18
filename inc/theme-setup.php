<?php

function acstarter_setup() {
  add_image_size( 'recipe', 200, 9999 ); //300 pixels wide (and unlimited height)
  add_image_size( 'homepage', 420, 9999 ); //300 pixels wide (and unlimited height)
  
  // This theme uses wp_nav_menu() in one location.
  register_nav_menu( 'mhpc', __( 'MHPC Menu', 'twentytwelve' ) );
  register_nav_menu( 'smat', __( 'SMAT Menu', 'twentytwelve' ) );
  register_nav_menu( 'sitemap', __( 'Sitemap', 'twentytwelve' ) );

  // This theme uses a custom image size for featured images, displayed on "standard" posts.
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

}
add_action( 'after_setup_theme', 'acstarter_setup' );

function my_login_logo() { ?>
<style type="text/css">
  body.login div#login h1 a {
  	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
  	background-size: 327px 67px;
  	width: 327px;
  	height: 67px;
  }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change Link
function loginpage_custom_link() {
	return the_permalink();
}
add_filter('login_headerurl','loginpage_custom_link');

/*-------------------------------------
	Favicon.
---------------------------------------*/
function mytheme_favicon() { 
 echo '<link rel="shortcut icon" href="' . get_bloginfo('stylesheet_directory') . '/images/favicon.ico" >'; 
} 
add_action('wp_head', 'mytheme_favicon');

