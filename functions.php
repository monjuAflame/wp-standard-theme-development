<?php
/**
 * Comet 2023 Function
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'comet_setup' ) ) {

    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Comet-2023 1.0
	 *
	 * @return void
	 */
    function comet_setup(){

        /*
         * Text Domain
         *
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Comet, use a find and replace
		 * to change 'comet' to the name of your theme in all the template files.
		 */

        load_theme_textdomain( 'comet', get_template_directory() . '/languages' );

        /*
         * Title Support
         *
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
        add_theme_support( 'title-tag' );

        /*
         * Post Formats
		*/
		add_theme_support('post-thumbnails');
        
        /*
         * Post Formats
		 */
		add_theme_support('post-formats', array(
            'video',
            'audio',
            'quote',
            'gallery'
        ) );


        $labels = array(
            'name'                => __( 'Portfolios', 'Post Type General Name', 'comet' ),
            'singular_name'       => __( 'Portfolio', 'Post Type Singular Name', 'comet' ),
            'menu_name'           => __( 'Portfolios', 'comet' ),
            'parent_item_colon'   => __( 'Parent Portfolio', 'comet' ),
            'all_items'           => __( 'All Portfolio', 'comet' ),
            'view_item'           => __( 'View Portfolio', 'comet' ),
            'add_new_item'        => __( 'Add New Portfolio', 'comet' ),
            'add_new'             => __( 'Add New', 'comet' ),
            'edit_item'           => __( 'Edit Portfolio', 'comet' ),
            'update_item'         => __( 'Update Portfolio', 'comet' ),
            'search_items'        => __( 'Search Portfolio', 'comet' ),
            'not_found'           => __( 'Not Found', 'comet' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'comet' ),
        );
        $portolio_array = array(
            'label'               => __( 'portfolio', 'comet' ),
            'description'         => __( 'Portfolio Post Type', 'comet' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail'),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
        register_post_type( 'comet-portfolios', $portolio_array);

    }

}

add_action( 'after_setup_theme', 'comet_setup' );


// add fonts

if(! function_exists('get_comet_fonts')){

    function get_comet_fonts(){
    
        $fonts = array();
        $fonts[] = 'Montserrat:400,700';
        $fonts[] = 'Raleway:300,400,500';
        $fonts[] = 'Halant:300,400';
    
        $fonts = add_query_arg( array(
            'family' => urlencode(implode('|', $fonts)),
            'subset' => urlencode('latin')
        ), 'https://fonts.googleapis.com/css' );
    
        return $fonts;
    }
}


// theme style

if ( ! function_exists('comet_styles')) {

    function comet_styles(){
    
        wp_enqueue_style( 'bundle', get_template_directory_uri() . '/css/bundle.css');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style( 'fonts', get_comet_fonts());

        wp_enqueue_style('stylesheet', get_stylesheet_uri());
    }

}

add_action( 'wp_enqueue_scripts', 'comet_styles');


// theme conditional scripts

if ( ! function_exists('conditional_scripts')) {

    function conditional_scripts(){
        
        wp_enqueue_script( 'html5shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array(), '', false);
        wp_script_add_data( 'html5shim', 'conditional', 'lt IE 9' );
        
        wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js', array(), '', false);
        wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
    
    }

}

add_action( 'wp_enqueue_scripts', 'conditional_scripts');


// theme scripts

if( ! function_exists('comet_scripts')){

    function comet_scripts(){
    
        wp_enqueue_script( 'bundle', get_template_directory_uri(  ) . '/js/bundle.js', array('jquery'), '', true);
    
        wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array('jquery'), '', true);
    
        wp_enqueue_script( 'main', get_template_directory_uri(  ) . '/js/main.js', array('jquery','bundle'), '', true);
    
    }

}

add_action( 'wp_enqueue_scripts', 'comet_scripts');


// Sidebar Registration

if( ! function_exists('sidebar_registration')){

    function sidebar_registration(){
    
        register_sidebar( array(
            'name' => __('Right Sidebar', 'comet'),
            'description' => __('This is Right Sidebar', 'comet'),
            'id' => 'right-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="upper">',
            'after_title' => '</h6>'
        ));

        register_sidebar( array(
            'name' => __('Footer Widget Area', 'comet'),
            'description' => __('This is Footer Widget Area', 'comet'),
            'id' => 'footer-area',
            'before_widget' => '<div class="col-sm-4"><div class="widget">',
            'after_widget' => '</div></div>',
            'before_title' => '<h6 class="upper">',
            'after_title' => '</h6>',
        ));

        register_sidebar( array(
            'name' => __('Footer Subscribe Area', 'comet'),
            'description' => __('This is Footer Subscribe Area', 'comet'),
            'id' => 'footer-subscribe-area',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h6 class="upper">',
            'after_title' => '</h6>',
        ));

        register_nav_menu('footer-menu', __('Footer Menu', 'comet'));

    }

}


add_action( 'widgets_init', 'sidebar_registration' );


// gallery post shortcode

if( file_exists(dirname(__FILE__) . '/gallery.php')) {

    require_once(dirname(__FILE__) . '/gallery.php');

}

// custom widget

if( file_exists(dirname(__FILE__) . '/custom-widgets/latest-post.php')) {

    require_once(dirname(__FILE__) . '/custom-widgets/latest-post.php');

}

if( file_exists(dirname(__FILE__) . '/custom-widgets/footer-about.php')) {

    require_once(dirname(__FILE__) . '/custom-widgets/footer-about.php');

}

// if( file_exists(dirname(__FILE__)) . '/lib/codestar-framework.php'){

    require_once get_theme_file_path() .'/lib/codestar-framework.php';

// }



