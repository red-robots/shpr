<?php
 // Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2', true);
		wp_enqueue_script('jquery');
		
		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery') );
		wp_enqueue_script('custom');
		
		
		// Homepage slider 'flexslider' scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') );
		wp_enqueue_script('flexslider');
		
		
		// Who We Serve popups
		wp_register_script(
			'colorbox',
			get_bloginfo('template_directory') . '/js/colorbox.js',
			array('jquery') );
		wp_enqueue_script('colorbox');
		
		
		// Image Mapping
		wp_register_script(
			'imagemap',
			get_bloginfo('template_directory') . '/js/imagemap.js',
			array('jquery') );
		wp_enqueue_script('imagemap');
		
		// Leadership isotope layout
		wp_register_script(
			'isotope',
			get_bloginfo('template_directory') . '/js/isotope.js',
			array('jquery') );
		wp_enqueue_script('isotope');
		
		// Equal heights divs	
		wp_register_script(
			'blocks',
			get_bloginfo('template_directory') . '/js/blocks.js',
			array('jquery') );
		wp_enqueue_script('blocks');
		
	
		
		
	}
}
 
add_action('init', 'ineedmyjava');



/*

	Custom client login, link and title.

*/
function my_login_logo() { ?><style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            padding-bottom: 30px;
background-size: 327px 67px;
width: 327px;
height: 67px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// add a favicon from your themes images folder
function mytheme_favicon() { ?> <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.ico" > <?php } add_action('wp_head', 'mytheme_favicon');



/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	
	
	// Leadership
 
     $labels = array(
	'name' => _x('Leadership', 'post type general name'),
    'singular_name' => _x('Leadership', 'post type singular name'),
    'add_new' => _x('Add New', 'Leadership'),
    'add_new_item' => __('Add New Leadership'),
    'edit_item' => __('Edit Leadership'),
    'new_item' => __('New Leadership'),
    'view_item' => __('View Leadership'),
    'search_items' => __('Search Leadership'),
    'not_found' =>  __('No Leadership found'),
    'not_found_in_trash' => __('No Leadership found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Leadership'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('leadership',$args);
	
	
	
	
	
		// Partner Organizations
  
     $labels = array(
	'name' => _x('Partner Organizations', 'post type general name'),
    'singular_name' => _x('Partner Organization', 'post type singular name'),
    'add_new' => _x('Add New', 'Organization'),
    'add_new_item' => __('Add New Organization'),
    'edit_item' => __('Edit Organization'),
    'new_item' => __('New Organization'),
    'view_item' => __('View Organization'),
    'search_items' => __('Search Organization'),
    'not_found' =>  __('No Organization found'),
    'not_found_in_trash' => __('No Organizations found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Partner Organizations'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail', 'county'),
	'taxonomies' => array('organization', 'county') 
	
  ); 
  register_post_type('organizations',$args);
	
	
	
	
	
	
	
	

  // Register the Program Highlights
  
     $labels = array(
	'name' => _x('SHPR Program Highlights', 'post type general name'),
    'singular_name' => _x('SHPR Program Highlights', 'post type singular name'),
    'add_new' => _x('Add New', 'Programs'),
    'add_new_item' => __('Add New Programs'),
    'edit_item' => __('Edit Programs'),
    'new_item' => __('New Programs'),
    'view_item' => __('View Programs'),
    'search_items' => __('Search Programs'),
    'not_found' =>  __('No Programs found'),
    'not_found_in_trash' => __('No Programs found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SHPR Program Highlights'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('programs',$args);
  
  
   // Register the Program Highlights
  
/*     $labels = array(
	'name' => _x('MHPC Resources', 'post type general name'),
    'singular_name' => _x('Resources', 'post type singular name'),
    'add_new' => _x('Add New', 'Resources'),
    'add_new_item' => __('Add New Resources'),
    'edit_item' => __('Edit Resources'),
    'new_item' => __('New Resources'),
    'view_item' => __('View Resources'),
    'search_items' => __('Search Resources'),
    'not_found' =>  __('No Resources found'),
    'not_found_in_trash' => __('No Resources found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'MHPC Resources'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('resources',$args);*/
  
    // Register the Homepage Slides
  
     $labels = array(
	'name' => _x('SHPR Homepage Slides', 'post type general name'),
    'singular_name' => _x('Homepage Slides', 'post type singular name'),
    'add_new' => _x('Add New', 'Slide'),
    'add_new_item' => __('Add New Slide'),
    'edit_item' => __('Edit Slides'),
    'new_item' => __('New Slide'),
    'view_item' => __('View Slides'),
    'search_items' => __('Search Slides'),
    'not_found' =>  __('No Slides found'),
    'not_found_in_trash' => __('No Slides found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SHPR Homepage Slides'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('slides',$args);
  
  
  
  
  
  //#######################################################
  
  					// SMAT Custom Post Types 
					
// #########################################################


// Register the SMAT NEws and Events
  
/*     $labels = array(
	'name' => _x('SMAT News and Events', 'post type general name'),
    'singular_name' => _x('SMAT News and Events', 'post type singular name'),
    'add_new' => _x('Add New', 'News/Events'),
    'add_new_item' => __('Add New News/Events'),
    'edit_item' => __('Edit News/Events'),
    'new_item' => __('New News/Events'),
    'view_item' => __('View News/Events'),
    'search_items' => __('Search News/Events'),
    'not_found' =>  __('No News/Events found'),
    'not_found_in_trash' => __('No News/Events found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SMAT News and Events'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('smatnewsevents',$args);
*/



// Register the Program Highlights
  
     $labels = array(
	'name' => _x('SMAT Program Highlights', 'post type general name'),
    'singular_name' => _x('SMAT Program Highlights', 'post type singular name'),
    'add_new' => _x('Add New', 'Programs'),
    'add_new_item' => __('Add New Programs'),
    'edit_item' => __('Edit Programs'),
    'new_item' => __('New Programs'),
    'view_item' => __('View Programs'),
    'search_items' => __('Search Programs'),
    'not_found' =>  __('No Programs found'),
    'not_found_in_trash' => __('No Programs found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SMAT Program Highlights'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('smatprograms',$args);
  
  
   // Register the Program Highlights
  
/*     $labels = array(
	'name' => _x('SMAT Resources', 'post type general name'),
    'singular_name' => _x('Resources', 'post type singular name'),
    'add_new' => _x('Add New', 'Resources'),
    'add_new_item' => __('Add New Resources'),
    'edit_item' => __('Edit Resources'),
    'new_item' => __('New Resources'),
    'view_item' => __('View Resources'),
    'search_items' => __('Search Resources'),
    'not_found' =>  __('No Resources found'),
    'not_found_in_trash' => __('No Resources found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SMAT Resources'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('smatresources',$args);*/
  
    // Register the Homepage Slides
  
     $labels = array(
	'name' => _x('SMAT Homepage Slides', 'post type general name'),
    'singular_name' => _x('Homepage Slides', 'post type singular name'),
    'add_new' => _x('Add New', 'Slide'),
    'add_new_item' => __('Add New Slide'),
    'edit_item' => __('Edit Slides'),
    'new_item' => __('New Slide'),
    'view_item' => __('View Slides'),
    'search_items' => __('Search Slides'),
    'not_found' =>  __('No Slides found'),
    'not_found_in_trash' => __('No Slides found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'SMAT Homepage Slides'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('smatslides',$args);

} // close custom post type


/*
##############################################

				Custom Taxonomies

*/

add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
	
// cusotm tax
    register_taxonomy( 'organization', 'partner_organizations',
	 array( 
	'hierarchical' => true, 
	'label' => 'Organization Type', 
	'query_var' => true, 
	'rewrite' => true ,
	'show_admin_column' => true,
	'public' => true,
	'rewrite' => array( 'slug' => 'organization' ),
	'_builtin' => true
	) );
	
// cusotm tax
    register_taxonomy( 'county', 'partner_organizations',
	 array( 
	'hierarchical' => true, 
	'label' => 'County', 
	'query_var' => true, 
	'rewrite' => true ,
	'show_admin_column' => true,
	'public' => true,
	'rewrite' => array( 'slug' => 'county' ),
	'_builtin' => true
	) );

// cusotm tax
    register_taxonomy( 'leadershiptype', 'leadership',
	 array( 
	'hierarchical' => true, 
	'label' => 'Leadership Type', 
	'query_var' => true, 
	'rewrite' => true ,
	'show_admin_column' => true,
	'public' => true,
	'rewrite' => array( 'slug' => 'leadershiptype' ),
	'_builtin' => true
	) );


} // End build taxonomies

add_filter( 'manage_taxonomies_for_activity_columns', 'activity_type_columns' );
function activity_type_columns( $taxonomies ) {
    $taxonomies[] = 'county';
    return $taxonomies;
}
/*

			OPtions pages

*/
/*if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page( 'Resources' , 'Contact' );
}
 */



// add additional image sizes
	add_image_size( 'recipe', 200, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'homepage', 420, 9999 ); //300 pixels wide (and unlimited height)
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'mhpc', __( 'MHPC Menu', 'twentytwelve' ) );
	register_nav_menu( 'smat', __( 'SMAT Menu', 'twentytwelve' ) );
	register_nav_menu( 'sitemap', __( 'Sitemap', 'twentytwelve' ) );



	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
	
/**
 * Enqueue styles
 */
function agile_style() {
	wp_enqueue_style( 'agile-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'agile_style' );
	
	
/**
*			Custom Excerpts 

//         usage = echo excerpt(25);
*/
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

function content($limit) {
 $content = explode(' ', get_the_content(), $limit);
 if (count($content)>=$limit) {
 array_pop($content);
 $content = implode(" ",$content).'...';
 } else {
 $content = implode(" ",$content);
 }
 $content = preg_replace('/[.+]/','', $content);
 $content = apply_filters('the_content', $content);
 $content = str_replace(']]>', ']]&gt;', $content);
 return $content;
}

/*-----------------------------------------------------------------------------------*/
/* Remove Unwanted Admin Menu Items */
/*-----------------------------------------------------------------------------------*/

function remove_admin_menu_items() {
	$remove_menu_items = array(__('Comments'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_admin_menu_items');


/**
 * Add support for a custom header image.
 */
//require( get_template_directory() . '/inc/custom-header.php' );





/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Twenty Twelve 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function twentytwelve_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentytwelve_wp_title', 10, 2 );



if ( ! function_exists( 'twentytwelve_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 *
 * @return void
 */
function twentytwelve_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'twentytwelve' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'twentytwelve' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

// Pagination

function pagi_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
// end pagination

/*
*  Change the Options Page menu to 'Theme Options'
*/
if( function_exists('acf_set_options_page_menu') )
{
    //acf_set_options_page_menu( __('Theme Options') );
	
	
	
	
	
}


   
function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'Theme Options';
	$settings['pages'] = array('Global Options', 'Alerts', 'Resources', 'Contact');
 
	return $settings;
}
 
add_filter('acf/options_page/settings', 'my_acf_options_page_settings');
 

// Change the menu position For Theme Options
/*function custom_menu_order( $menu_ord ) {  
    
    if (!$menu_ord) return true;  
    
    // vars
    $menu = 'acf-options';
    
    // remove from current menu
    $menu_ord = array_diff($menu_ord, array( $menu ));
    
     // append after index.php [0]
    array_splice( $menu_ord, 1, 0, array( $menu ) );
    
    // return
    return $menu_ord;
}  
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order  
add_filter('menu_order', 'custom_menu_order');*/

// Famous is Tree function 
function is_tree($pid)
{
  global $post;

  $ancestors = get_post_ancestors($post->$pid);
  $root = count($ancestors) - 1;
  $parent = $ancestors[$root];

  if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
  {
    return true;
  }
  else
  {
    return false;
  }
};

// Change "posts" label to News and Events
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News &amp; Events';
    $submenu['edit.php'][5][0] = 'News &amp; Events';
    $submenu['edit.php'][10][0] = 'Add News &amp; Events';
    //$submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News &amp; Events';
        $labels->singular_name = 'News &amp; Events';
        $labels->add_new = 'Add News &amp; Events';
        $labels->add_new_item = 'Add News &amp; Events';
        $labels->edit_item = 'Edit News &amp; Events';
        $labels->new_item = 'News &amp; Events';
        $labels->view_item = 'View News &amp; Events';
        $labels->search_items = 'Search News &amp; Events';
        $labels->not_found = 'No News &amp; Events found';
        $labels->not_found_in_trash = 'No News &amp; Events found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );
	
// hide News and Events for non adimins	
add_action( 'admin_menu', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
	
	if(!current_user_can('edit_posts')) {
		remove_menu_page('edit.php');	
	}
}
	
/*function smat_add_capability() {
    // gets the author role
    $role = get_role( 'smat' );

    // This only works, because it accesses the class instance.
    $role->add_cap( 'smat_donothing' ); 
}
add_action( 'admin_init', 'smat_add_capability');
function coalition_add_capability() {
    // gets the author role
    $role = get_role( 'coalitionpartner' );

    // This only works, because it accesses the class instance.
    $role->add_cap( 'coalition_donothing' ); 
}
add_action( 'admin_init', 'coalition_add_capability');
	
// Redirects for registration
function ac_my_registration_redirect() {
    return home_url( '/registration/success' );
}
add_filter( 'registration_redirect', 'ac_my_registration_redirect' );

// Redirects for roles
function ac_my_role_redirect() {
    if(current_user_can('smat_donothing')) {
		
		return home_url( '/mhpc/what-we-do' );
	
	} elseif(current_user_can('coalition_donothing')) {
		
		return home_url( '/mhpc/' );
		
	}
}
add_filter( 'login_redirect', 'ac_my_role_redirect' );*/



/*function acmy_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	global $user;
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for smats
		if ( in_array( 'smat', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'acmy_login_redirect', 10, 3 );*/

// removes the `profile.php` admin color scheme options
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

if ( ! function_exists( 'cor_remove_personal_options' ) ) {
  /**
   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
   */
  function cor_remove_personal_options( $subject ) {
    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
    return $subject;
  }

  function cor_profile_subject_start() {
    ob_start( 'cor_remove_personal_options' );
  }

  function cor_profile_subject_end() {
    ob_end_flush();
  }
}
add_action( 'admin_head-profile.php', 'cor_profile_subject_start' );
add_action( 'admin_footer-profile.php', 'cor_profile_subject_end' );

add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
	$wp_admin_bar->remove_node( 'site-name' );
}

/*-------------------------------------
	Adds Options page for ACF.
---------------------------------------*/
if( function_exists('acf_add_options_page') ) {acf_add_options_page();}
