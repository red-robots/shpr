<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!-- lw2 -->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='https://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
</head>
<?php 
global $post;
$current_segment = get_site_type();
$classes[] = $current_segment;

$parent_id = ( isset($post->post_parent) && $post->post_parent>0 ) ? $post->post_parent : '';
$classes[] = ( is_home() || is_front_page() ) ? 'home':'sub-page';
if($parent_id) {
  if( $parent = get_post($parent_id) ) {
    $classes[] = $parent->post_name;
  }
} else {
  $classes[] = ( isset($post->post_name) && $post->post_name ) ? $post->post_name : '';
}

$the_classes = ($classes) ? array_unique($classes) : '';
?>
<body <?php body_class($the_classes); ?>>
<div class="site clear">

<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=219473481428768";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->


		<?php if('yes' == get_field('turn_alert_message_on', 'option') )  : ?>
        	<div id="alert">
            	<div id="alert-inside">
                    <div id="alert-title">
                        <?php the_field('alert_title','option'); ?>
                    </div><!-- alert title -->
                   <div id="alert-message">
                    <?php the_field('alert_message','option'); ?>
                   </div><!--  alert message -->
           	</div><!-- alert -->
           </div><!-- alert -->
        <?php endif; ?>
   
   
   <?php 
   //      If is the SMAT Site
   if(
   is_tree(82) || 
   ('smatprograms' == get_post_type())  ||
   ('smatresources' == get_post_type()) ||
   ('smatslides' == get_post_type())
     ) {   
     	$WhichSiteAreWeOn = 'SMAT';
		$headerDescription = 'smat_header_description';
		//$whatsiteheader = 'smatslides';
     } 
	 //      If is the SEHPC Site
	 elseif(
	 is_tree(84) || 
   ('programs' == get_post_type())  ||
   ('resources' == get_post_type()) ||
   ('slides' == get_post_type())
	 	
	 ) {
		 $WhichSiteAreWeOn = 'SEHPC';
		 $headerDescription = 'header_description';
		//$whatsiteheader = 'slides';
}



$WhichSiteAreWeOn = strtoupper($current_segment);
?>
   

  <div id="top-header">
    <div id="top-header-inside">    	
    <?php if(!is_front_page()) { ?>
    <div class="container">
      <div id="top-buttons">
        <ul>
        <?php if ('SEHPC' == $WhichSiteAreWeOn) { // If is The MHPC Tree ?>
            <li class="member"><a href="<?php bloginfo('url'); ?>/sehpc/members">Member-login</a></li>
        <?php } elseif('SMAT' == $WhichSiteAreWeOn) { // If is the SMAT Tree?>
            <li class="mhpc"><a href="<?php bloginfo('url'); ?>/sehpc">Go to SHPR site</a></li>
            <li class="member"><a href="<?php bloginfo('url'); ?>/sehpc/members">Member-login</a></li>
        <?php } ?>
        </ul>
      </div><!-- top buttons -->
    </div>
    <?php } ?>

    </div><!-- top header inside -->
  </div><!-- top header -->
    


<?php if(is_front_page()) { 
      $wrapperId = 'main-home';
  } else { 
      $wrapperId = 'main';
  }?>
<div id="<?php echo $wrapperId; ?>" class="wrapper clear">  
     <?php if(!is_front_page()) : ?><div class="header clear"><div class="container clear"><?php endif; ?>

      <?php if(!is_front_page()) { ?>
        <?php if('SEHPC' == $WhichSiteAreWeOn) {  // is is mhpc ?>
        	<h1 class="logo"><a href="<?php bloginfo('url'); ?>/sehpc">Metrolina Preparedness</a></h1>
        <?php } elseif('SMAT' == $WhichSiteAreWeOn) {  // if is smat ?>
        	<h1 class="logo-smat"><a href="<?php bloginfo('url'); ?>/smat">Metrolina Preparedness</a></h1>
        <?php } ?>
          
        <div class="head-right-info"> 
          <span class="burger" id="mobile-menu"><span></span></span>
          <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php if('SEHPC' == $WhichSiteAreWeOn) {  // is is mhpc ?>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
          <?php } elseif('SMAT' == $WhichSiteAreWeOn) {  // if is smat ?>
          <?php wp_nav_menu( array( 'theme_location' => 'smat', 'menu_class' => 'nav-menu' ) ); ?>
          <?php } ?>
          </nav><!-- #site-navigation -->
        </div>

      <?php } // end if is not front page ?>

	<?php if(!is_front_page()) : ?></div></div><!-- header --><?php endif; ?>
    
    
<?php if(is_page('sehpc') || is_page('smat')) { ?>
	<?php get_template_part('inc/banner'); ?>
<?php } ?>
    


	
