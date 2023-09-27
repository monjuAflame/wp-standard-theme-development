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
            'name'                => __( 'Portfolio', 'Post Type General Name', 'comet' ),
            'singular_name'       => __( 'Portfolio', 'Post Type Singular Name', 'comet' ),
            'menu_name'           => __( 'Portfolio', 'comet' ),
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
            'show_in_rest'        => true,
        );
        register_post_type( 'comet-portfolios', $portolio_array);

        // portfolio category
        register_taxonomy('comet-portfolio-category', 'comet-portfolios', array(
            'labels'    => array(
                'name' => 'Categories',
                'add_new' => 'Add New Category',
                'add_new_item' => 'Add New Category'
            ),
            'public' => true,
            'hierarchical' => true
        ));

        register_post_type('comet-slider', array(
            'labels' => array(
                'name' => 'Sliders',
                'add_new' => 'Add new Slider',
                'add_new_item' => 'Add new Slider'
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail')
        ));

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

        wp_enqueue_style('comment-reply');

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
        
        wp_enqueue_script('comment-reply');
    
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

if( ! function_exists('comet_admin_scripts')){

    function comet_admin_scripts(){ ?>
        
        <?php if (get_post_type() == 'post') :  ?>

            <script>

                jQuery(document).ready(function(){

                    var id = jQuery('input[name="post_format"]:checked').attr('id');
                    
                    if (id == 'post-format-video') {
                        jQuery('.cmb2-id--for-video').show();
                    } else {
                        jQuery('.cmb2-id--for-video').hide();
                    }

                    if (id == 'post-format-audio') {
                        jQuery('.cmb2-id--for-audio').show();
                    } else {
                        jQuery('.cmb2-id--for-audio').hide();
                    }

                    if (id == 'post-format-gallery') {
                        jQuery('.cmb2-id--for-gallery').show();
                    } else {
                        jQuery('.cmb2-id--for-gallery').hide();
                    }

                    jQuery('input[name="post_format"]').change(function(){

                        jQuery('.cmb2-id--for-audio').hide();
                        jQuery('.cmb2-id--for-gallery').hide();
                        jQuery('.cmb2-id--for-video').hide();

                        var id = jQuery('input[name="post_format"]:checked').attr('id');

                        if (id == 'post-format-video') {
                            jQuery('.cmb2-id--for-video').show();
                        } else {
                            jQuery('.cmb2-id--for-video').hide();
                        }

                        if (id == 'post-format-audio') {
                            jQuery('.cmb2-id--for-audio').show();
                        } else {
                            jQuery('.cmb2-id--for-audio').hide();
                        }

                        if (id == 'post-format-gallery') {
                            jQuery('.cmb2-id--for-gallery').show();
                        } else {
                            jQuery('.cmb2-id--for-gallery').hide();
                        }

                    });


                })
                
            </script>
            
        <?php endif; ?>

    <?php }
}

add_action( 'admin_print_scripts',  'comet_admin_scripts', 1000 );

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

if( file_exists(dirname(__FILE__)) . '/lib/codestar-framework.php'){

    require_once get_theme_file_path() .'/lib/codestar-framework.php';

}

if( file_exists(dirname(__FILE__)) . '/lib/metabox/init.php'){

    require_once get_theme_file_path() .'/lib/metabox/init.php';

}
if( file_exists(dirname(__FILE__)) . '/lib/metabox/config.php'){

    require_once get_theme_file_path() .'/lib/metabox/config.php';

}
if( file_exists(dirname(__FILE__)) . '/shortcodes/shortcodes.php'){

    require_once get_theme_file_path() .'/shortcodes/shortcodes.php';

}

if( file_exists(dirname(__FILE__)) . '/lib/plugins/require_plugin.php'){

    require_once get_theme_file_path() .'/lib/plugins/require_plugin.php';

}

add_action('vc_before_init', 'setup_visual_composer');

function setup_visual_composer() 
{
    vc_set_as_theme();
}

// Custom Comment Form

add_filter( 'comment_form_defaults', 'comet_comment_form' );
function comet_comment_form($defaults){
	$defaults['comment_notes_before'] = '';
	$defaults['class_form'] = 'comment-form';
	$defaults['class_container'] = 'comment-respond';
	$defaults['class_submit'] = 'btn btn-color-out';
	$defaults['label_submit'] =  __( 'Comment' );
	$defaults['title_reply'] =  __( 'LEAVE A COMMENT' );
	$defaults['comment_field'] =  '<div class="form-group"><textarea id="comment" name="comment" placeholder="Comment" class="form-control" cols="45" rows="8" maxlength="65525" required="required"></textarea></div>';
	
	return $defaults;
}
add_filter( 'comment_form_default_fields','comet_comment_form_fields' );

function comet_comment_form_fields(){

	$commenter = wp_get_current_commenter();
	$args = '';
$args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) ) {
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
    }
 
    $req = get_option('require_name_email');
    $html_req = ( $req ? " required='required'" : '' );
    $html5    = 'html5' === $args['format'];
	
$fields = array(
        'author' => sprintf(
            '<div class="form-group"> %s</div>',
            
            sprintf(
                '<input id="author" name="author" type="text" placeholder="Name" value="%s" size="30" maxlength="245"%s class="form-control first" />',
                esc_attr( $commenter['comment_author'] ),
                $html_req
            )
        ),
        'email'  => sprintf(
            '<div class="form-group last"> %s</div>',
           
            sprintf(
                '<input id="email" name="email" %s value="%s" placeholder="Email" class="form-control secend" size="20" maxlength="100" aria-describedby="email-notes"%s />',
                ( $html5 ? 'type="email"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_email'] ),
                $html_req
            )
        ),
        
        // 'comment_field' => sprintf(
        //     '<div class="form-group"> %s</div>',
            
        //     '<textarea id="comment" name="comment" placeholder="Comment" class="form-control" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
        // )
    );
	

	return $fields;
}


register_activation_hook(__FILE__, 'flush_rewrite');

function flush_rewrite() 
{
    flush_rewrite_rules();
}



