<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	/*// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );*/

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H1 Defaults
	$h1_defaults = array(
		'size' => '24px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H2 Defaults
	$h2_defaults = array(
		'size' => '20px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H3 Defaults
	$h3_defaults = array(
		'size' => '18px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H4 Defaults
	$h4_defaults = array(
		'size' => '16px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H5 Defaults
	$h5_defaults = array(
		'size' => '14px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// H6 Defaults
	$h6_defaults = array(
		'size' => '12px',
		'face' => 'Helvetica Neue',
		'style' => 'bold',
		'color' => '#505050' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '10','12','14','16','18','20','22','24','26','28','30','32','36','40','48'),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial', 'Georgia, "Times New Roman", Times, serif'=>'Georgia, Times New Roman','Verdana, Geneva, sans-serif'=>'Verdana, Geneva','"Lucida Sans Unicode", "Lucida Grande", sans-serif'=>'Lucida' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => true
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	
	$options[] = array(
		'name' => __('Custom Logo', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Upload Custom Logo', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'logo_uploader',
		'type' => 'upload');
	
	
	
	
	$options[] = array(
		'name' => __('Typographic Options', 'options_check'),
		'type' => 'heading');
		
		
	// Set the Typography
	$options[] = array( 'name' => __('Overall Website Typography', 'options_check'),
		'desc' => __('This is the way the type will show overall on the website.', 'options_check'),
		'id' => "body_type",
		'std' => $typography_defaults,
		'type' => 'typography' );
		
	// Heading 1
	$options[] = array(
		'name' => __('Heading 1', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h1",
		'std' => $h1_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
	// Heading 2
	$options[] = array(
		'name' => __('Heading 2', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h2",
		'std' => $h2_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
	// Heading 3
	$options[] = array(
		'name' => __('Heading 3', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h3",
		'std' => $h3_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
	// Heading 4
	$options[] = array(
		'name' => __('Heading 4', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h4",
		'std' => $h4_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
	// Heading 5
	$options[] = array(
		'name' => __('Heading 5', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h5",
		'std' => $h5_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
	// Heading 6
	$options[] = array(
		'name' => __('Heading 6', 'options_check'),
		'desc' => __('Custom typography options.', 'options_check'),
		'id' => "h6",
		'std' => $h6_defaults,
		'type' => 'typography',
		'options' => $typography_options );
		
		
	/*$options[] = array(
		'name' => "Example Image Selector",
		'desc' => "Images for layout.",
		'id' => "example_images",
		'std' => "2c-l-fixed",
		'type' => "images",
		'options' => array(
			'1col-fixed' => $imagepath . '1col.png',
			'2c-l-fixed' => $imagepath . '2cl.png',
			'2c-r-fixed' => $imagepath . '2cr.png')
	);*/
	
	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');

	$options[] = array(
		'name' => __('Input Text', 'options_check'),
		'desc' => __('A text input field.', 'options_check'),
		'id' => 'example_text',
		'std' => 'Default Value',
		'type' => 'text');

	$options[] = array(
		'name' => __('Textarea', 'options_check'),
		'desc' => __('Textarea description.', 'options_check'),
		'id' => 'example_textarea',
		'std' => 'Default Text',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Input Select Small', 'options_check'),
		'desc' => __('Small Select Box.', 'options_check'),
		'id' => 'example_select',
		'std' => 'three',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $test_array);

	$options[] = array(
		'name' => __('Input Select Wide', 'options_check'),
		'desc' => __('A wider select box.', 'options_check'),
		'id' => 'example_select_wide',
		'std' => 'two',
		'type' => 'select',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Select a Category', 'options_check'),
		'desc' => __('Passed an array of categories with cat_ID and cat_name', 'options_check'),
		'id' => 'example_select_categories',
		'type' => 'select',
		'options' => $options_categories);
		
	$options[] = array(
		'name' => __('Select a Tag', 'options_check'),
		'desc' => __('Passed an array of tags with term_id and term_name', 'options_check'),
		'id' => 'example_select_tags',
		'type' => 'select',
		'options' => $options_tags);

	$options[] = array(
		'name' => __('Select a Page', 'options_check'),
		'desc' => __('Passed an pages with ID and post_title', 'options_check'),
		'id' => 'example_select_pages',
		'type' => 'select',
		'options' => $options_pages);

	$options[] = array(
		'name' => __('Input Radio (one)', 'options_check'),
		'desc' => __('Radio select with default options "one".', 'options_check'),
		'id' => 'example_radio',
		'std' => 'one',
		'type' => 'radio',
		'options' => $test_array);

	$options[] = array(
		'name' => __('Example Info', 'options_check'),
		'desc' => __('This is just some example information you can put in the panel.', 'options_check'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Input Checkbox', 'options_check'),
		'desc' => __('Example checkbox, defaults to true.', 'options_check'),
		'id' => 'example_checkbox',
		'std' => '1',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Advanced Settings', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Check to Show a Hidden Text Input', 'options_check'),
		'desc' => __('Click here and see what happens.', 'options_check'),
		'id' => 'example_showhidden',
		'type' => 'checkbox');
		
	$options[] = array(
		'name' => __('Hidden Text Input', 'options_check'),
		'desc' => __('This option is hidden unless activated by a checkbox click.', 'options_check'),
		'id' => 'example_text_hidden',
		'std' => 'Hello',
		'class' => 'hidden',
		'type' => 'text');

	$options[] = array(
		'name' => __('Uploader Test', 'options_check'),
		'desc' => __('This creates a full size uploader that previews the image.', 'options_check'),
		'id' => 'example_uploader',
		'type' => 'upload');

	

	$options[] = array(
		'name' =>  __('Example Background', 'options_check'),
		'desc' => __('Change the background CSS.', 'options_check'),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background' );

	$options[] = array(
		'name' => __('Multicheck', 'options_check'),
		'desc' => __('Multicheck description.', 'options_check'),
		'id' => 'example_multicheck',
		'std' => $multicheck_defaults, // These items get checked by default
		'type' => 'multicheck',
		'options' => $multicheck_array);

	$options[] = array(
		'name' => __('Colorpicker', 'options_check'),
		'desc' => __('No color selected by default.', 'options_check'),
		'id' => 'example_colorpicker',
		'std' => '',
		'type' => 'color' );
		
	
		
	

	$options[] = array(
		'name' => __('Text Editor', 'options_check'),
		'type' => 'heading' );*/

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	/*$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	$options[] = array(
		'name' => __('Default Text Editor', 'options_check'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );*/

	return $options;
}