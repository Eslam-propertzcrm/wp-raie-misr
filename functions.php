<?php 

	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navlist_walker.php');

	// theme support
	function wprm_theme_setup()
	{
		// nav menus
		register_nav_menus(
			array('primary' => __( 'Primary Menu', 'THEMENAME' ),) 
		);

		// Theme Support
		add_theme_support('post-thumbnails');

		
		// add theme for posts formate in admin panel
		add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat',
		) );
	}

	// to add my function ---- used to add something
	add_action('after_setup_theme', 'wprm_theme_setup');

	// excerpt length control
	function set_excerpt_length ()
	{
		return 20;
	}

	// used to edit something
	add_filter('excerpt_length','set_excerpt_length');

	// widget locations
	function wprm_init_widgets($id)
	{
		$arrayName = array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		 );

		register_sidebar($arrayName);

		// register_sidebar( array(
		// 	'name'          => __( 'Sidebar', 'twentysixteen' ),
		// 	'id'            => 'sidebar',
		// 	'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		// 	'before_widget' => '',
		// 	'after_widget'  => '',
		// 	'before_title'  => '<h4 class="widget-title">',
		// 	'after_title'   => '</h4>',
		// ) );
	}

	// to add my function ---- used to add something
	add_action('widgets_init', 'wprm_init_widgets');


	// Customizer File
	require get_template_directory(). '/inc/customizer.php';


	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
	     add_post_type_support( 'page', 'excerpt' );
	}


