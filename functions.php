<?php
//=================================================================================================================================================================================================
//                                                                                       Includes
//============================================================================================== | ================================================================================================
require_once('inc/shortCodes.php');
//======================================================================================================================
//                                                    Load the Scrips
//==========================================================|===========================================================
function my_theme_scrips() {

	//                                             Style Scrips
	//__________________________________________________|_______________________________________________________________
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/css/lightbox.css' );

	//                                            Register Fonts
	//__________________________________________________|_______________________________________________________________
	wp_register_style( 'googleFonts-1', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' );
	wp_register_style( 'googleFonts-2', 'https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i' );

	wp_enqueue_style( 'googleFonts-1' );
	wp_enqueue_style( 'googleFonts-2' );

	//                                            Footer Script Load
	//__________________________________________________|_______________________________________________________________

	//slick-Slider
	wp_register_script( 'slickCore', get_template_directory_uri() . '/assets/js/slick.min.js', '', '2017.8', true );
	wp_enqueue_script( 'slickCore' );

	//LightBox
	wp_register_script( 'LightBoxCore', get_template_directory_uri() . '/assets/js/lightbox.min.js', '', '2017.8', true );
	wp_enqueue_script( 'LightBoxCore' );

	//main Javascript File
	wp_register_script( 'sideMainJavascriptFile', get_template_directory_uri() . '/assets/js/index.js', '', '2017.8', true );
	wp_enqueue_script( 'sideMainJavascriptFile' );

	// jQuery Support
	wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_scrips' );

//=================================================================================================================================================================================================
//                                                                                       Add Theme Support
//============================================================================================== | ================================================================================================
function bt_add_theme_support() {

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
	add_theme_support( 'title-tag' );
}

add_action( 'init', 'bt_add_theme_support' );

//=================================================================================================================================================================================================
//                                                                                        Register Menus
//============================================================================================== | ================================================================================================
function bt_register_menus() {


	register_nav_menus(
		array(
			'mobilemenu' => 'Mobilemenü',
			'mainmenu' => 'Hauptmenü',
			'footermenu' => 'Footermenü'
		)
	);
}

add_action( 'init', 'bt_register_menus' );

//=================================================================================================================================================================================================
//                                                                                       Sidebar function
//============================================================================================== | ================================================================================================
function bt_widget_setup() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'class'         => 'custom',
		'discription'   => 'Standard Sidebar',
		'before_widget' => '<aside id="%1$s"  class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

add_action( 'widgets_init', 'bt_widget_setup' );
//=================================================================================================================================================================================================
//                                                                                       Support SVG Images
//============================================================================================== | ================================================================================================

function kw_svg( $svg_mime ) {

	$svg_mime['svg'] = 'image/svg+xml';

	return $svg_mime;
}

add_filter( 'upload_mimes', 'kw_svg' );

function kb_ignore_upload_ext( $checked, $file, $filename, $mimes ) {

	if ( ! $checked['type'] ) {
		$wp_filetype     = wp_check_filetype( $filename, $mimes );
		$ext             = $wp_filetype['ext'];
		$type            = $wp_filetype['type'];
		$proper_filename = $filename;

		if ( $type && 0 === strpos( $type, 'image/' ) && $ext !== 'svg' ) {
			$ext = $type = false;
		}

		$checked = compact( 'ext', 'type', 'proper_filename' );
	}

	return $checked;
}

add_filter( 'wp_check_filetype_and_ext', 'kb_ignore_upload_ext', 10, 4 );
