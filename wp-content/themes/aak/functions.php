<?php
/**
 * my-project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AAK
 * @subpackage aak_car_mechanic_garage
 * @since AAK CAR MECHANIC GARAGE
 */

if ( ! function_exists( 'aak_car_mechanic_garage_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aak_car_mechanic_garage_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on my-project, use a find and replace
		 * to change 'my-project' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'my-project', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// add_image_size('smallest', 300, 300, true);
  		// add_image_size('largest', 800, 800, true);

		// This theme uses wp_nav_menu() in one location.
		
      // WE NEED TO REGISTER MENU FIRST 
        function register_my_menus() {
            register_nav_menus(
              array(
                'primary-header' => __( 'Primary Header' ),
                'footer-menu' => __( 'Footer Menu' )
               )
             );
           }
           add_action( 'init', 'register_my_menus' );

		
		function item_list($classes, $item, $args, $dept){
			$classes[] = 'list_item_class';
			return $classes;
			
		}

		

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'aak_car_mechanic_garage_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// /**
		//  * Add support for custom logo.
		//  *
		//  */
	
        add_theme_support( 'custom-logo' );

        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );
	}
endif;
add_action( 'after_setup_theme', 'aak_car_mechanic_garage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aak_car_mechanic_garage_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aak_car_mechanic_garage_content_width', 640 );
}
add_action( 'after_setup_theme', 'aak_car_mechanic_garage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function aak_car_mechanic_garage_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'my-project' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'my-project' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'aak_car_mechanic_garage_widgets_init' );

/* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
    widget_registration('Footer widget 1', 'footer-sidebar-1', 'test', '', '', '', '');
    widget_registration('Footer widget 2', 'footer-sidebar-2', 'test', '', '', '', '');
    // ETC...
}
 
add_action('widgets_init', 'multiple_widget_init');


/**
 * Enqueue scripts and styles.
 */
function aak_car_mechanic_garage_scripts() {
	// wp_enqueue_style( 'my-project-style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main-styles.css' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/owl-carousel/assets/owl.carousel.min.css' );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js' );


	wp_enqueue_script( 'my-project-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'my-project-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aak_car_mechanic_garage_scripts' );



require_once('template-parts/wp_bootstrap_navwalker.php');

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * 
 * Custome Post Type Code start here
 */

function custom_post_Services()
{
    // creating (registering) the custom type
    register_post_type('services', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Services'), /* This is the Title of the Group */
            'singular_name' => __('Service'), /* This is the individual type */
            'add_new' => __('Add New'), /* The add new menu item */
            'add_new_item' => __('Add New Service'), /* Add New Display Title */
            'edit' => __('Edit'), /* Edit Dialog */
            'edit_item' => __('Edit Service'), /* Edit Display Title */
            'new_item' => __('New Service'), /* New Display Title */
            'view_item' => __('View Service'), /* View Display Title */
            'search_items' => __('Search Service'), /* Search Custom Type Title */
            'not_found' => __('Nothing found in the Database.'), /* This displays if there are no entries yet */
            'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
        ), /* end of arrays */
            'description' => __('This is the example ecustom post type'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
            //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
            'rewrite' => true,
           
            //'has_archive' => true,
            'capability_type' => 'post',
			'hierarchical' => true,
			'taxonomies' => array('recordings', 'category', 'whatever'),
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* end of options */
    ); /* end of register post type */
}

// adding the function to the Wordpress init
add_action('init', 'custom_post_Services');

/**
 * 
 * Custome Post Type Code Ends here
 */


// function taxanomy_service_type()
// {
//     $labels = array(
//         'name' => _x('Service Type', 'taxonomy general name'),
//         'singular_name' => _x('Service Type', 'taxonomy singular name'),
//         'search_items' => __('Search Service Type'),
//         'all_items' => __('All Service Type'),
//         'parent_item' => __('Parent Service Type'),
//         'parent_item_colon' => __('Parent Service Type'),
//         'edit_item' => __('Edit Service Type'),
//         'update_item' => __('Update Service Type'),
//         'add_new_item' => __('Add New Service Type'),
//         'new_item_name' => __('New Service Type'),
//         'menu_name' => __('Service Types'),
//     );
//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => true,
//         //'rewrite' => array( 'slug' => 'Service_category' , 'with_front' => 'true'),
//     );
//     register_taxonomy('service_type', 'services', $args);

// }

// add_action('init', 'taxanomy_service_type', 0);

	// stop loading Contact form 7 JavaScript and CSS files
	add_filter( 'wpcf7_load_js', '__return_false' );
	add_filter( 'wpcf7_load_css', '__return_false' );


	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}
	
	

