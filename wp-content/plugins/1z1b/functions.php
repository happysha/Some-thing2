<?php
/**
 * Something Fishy functions and definitions
 *
 * @package 1z1b
 * @since Something Fishy 1.0
 */


/**
 * 自动显示摘要.
 *
 * @2012-12-24
add_filter('the_content','substr_content');
function substr_content($content){
	if(!is_singular()){
		$content=mb_strimwidth(strip_tags($content),0,200);
	}
	return $content;
}
 */



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Something Fishy 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 698; /* pixels */

if ( ! function_exists( 'somethingfishy_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Something Fishy 1.0
 */
function somethingfishy_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Something Fishy, use a find and replace
	 * to change '1z1b' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '1z1b', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( '750', '250', true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '1z1b' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside','status' ) );

	
}
endif; // somethingfishy_setup
add_action( 'after_setup_theme', 'somethingfishy_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Something Fishy 1.0
 */
function somethingfishy_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', '1z1b' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Sidebar 1', '1z1b' ),
		'id' => 'footer-sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Sidebar 2', '1z1b' ),
		'id' => 'footer-sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Sidebar 3', '1z1b' ),
		'id' => 'footer-sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'somethingfishy_widgets_init' );


/**
 * Enqueue Google Fonts
 */

function somethingfishy_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_register_style( 'underthesea-portlligatsans', "$protocol://fonts.googleapis.com/css?family=Port+Lligat+Sans" );
	wp_register_style( 'underthesea-oswald', "$protocol://fonts.googleapis.com/css?family=Oswald:400,700,300" );
	wp_register_style( 'underthesea-pacifico', "$protocol://fonts.googleapis.com/css?family=Pacifico" );
}

add_action( 'init', 'somethingfishy_fonts' );


/**
 * Enqueue scripts and styles
 */
function somethingfishy_scripts() {
	global $post;

	wp_enqueue_style( 'underthesea-style', get_stylesheet_uri() );

	wp_enqueue_script( 'underthesea-small-menu', get_template_directory_uri() . '/js/fishy.js', array( 'jquery' ), '20120206', true );

	wp_enqueue_script( 'underthesea-parallax', get_template_directory_uri() . '/js/parallax.js', array( 'jquery' ) );

	wp_enqueue_style( 'underthesea-portlligatsans' );
	wp_enqueue_style( 'underthesea-oswald' );
	wp_enqueue_style( 'underthesea-pacifico' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'somethingfishy_keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'somethingfishy_scripts' );


/**
 * Enqueue font styles in custom header admin
 */

function somethingfishy_admin_fonts( $hook_suffix ) {

	if ( 'appearance_page_custom-header' != $hook_suffix )
		return;

	wp_enqueue_style( 'underthesea-portlligatsans' );
	wp_enqueue_style( 'underthesea-oswald' );
	wp_enqueue_style( 'underthesea-pacifico' );

}
add_action( 'admin_enqueue_scripts', 'somethingfishy_admin_fonts' );

/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

if( function_exists( 'register_sidebar_widget' ) ) {   
    register_sidebar_widget('作者列表','mb_AuthorList');     
}  
function mb_AuthorList() { include(TEMPLATEPATH . '/Author_list.php'); }   


if( function_exists( 'register_sidebar_widget' ) ) {   
    register_sidebar_widget('关于我们','mb_aboutus');     
}  
function mb_aboutus() { include(TEMPLATEPATH . '/widget_aboutus.php'); }
// function to display number of posts.
    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 View";
        }
        return $count.' Views';
    }
 
    // function to count views.
    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }