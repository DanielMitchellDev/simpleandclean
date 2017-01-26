<?php
	

	//Register Nav Walker class_alias
	require_once('inc/php/wp_bootstrap_navwalker.php');

	// Theme Support
	function sc_theme_setup(){
		//turn on post thumbnails
		add_theme_support('post-thumbnails');

		//Nav menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));
	}
	add_action('after_setup_theme','sc_theme_setup');


	//Customizer File
	require get_template_directory() . '/inc/php/customizer.php';
	

	//Widget Locations
	function sc_init_widgets($id){
		register_sidebar(array(
			'name'				=> 'Footer Slot 1',
			'id' 				=> 'slot1',
			'before_widget'		=> '<div class="footer-module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h4>',
			'after_title'		=> '</h4>'
		));
		register_sidebar(array(
			'name'				=> 'Footer Slot 2',
			'id' 				=> 'slot2',
			'before_widget'		=> '<div class="footer-module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h4>',
			'after_title'		=> '</h4>'
		));
		register_sidebar(array(
			'name'				=> 'Footer Slot 3',
			'id' 				=> 'slot3',
			'before_widget'		=> '<div class="footer-module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h4>',
			'after_title'		=> '</h4>'
		));
		register_sidebar(array(
			'name'				=> 'Footer Slot 4',
			'id' 				=> 'slot4',
			'before_widget'		=> '<div class="footer-module">',
			'after_widget'		=> '</div>',
			'before_title'		=> '<h4>',
			'after_title'		=> '</h4>'
		));						
	}
	add_action('widgets_init', 'sc_init_widgets');



	function add_theme_scripts() {
 
  		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '1.1', 'all');

  		wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  		wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
	}
	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );