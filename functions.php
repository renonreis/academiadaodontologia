<?php
/**
 * academiadaodontologia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package academiadaodontologia
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'academiadaodontologia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function academiadaodontologia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on academiadaodontologia, use a find and replace
		 * to change 'academiadaodontologia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'academiadaodontologia', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-principal' => esc_html__( 'Menu Principal', 'academiadaodontologia' ),
				'menu-mobile-1' => esc_html__( 'Menu Mobile 1', 'academiadaodontologia' ),
				'menu-footer-1' => esc_html__( 'Menu Footer 1', 'academiadaodontologia' ),
				'menu-footer-2' => esc_html__( 'Menu Footer 2', 'academiadaodontologia' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'academiadaodontologia_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}	
endif;
add_action( 'after_setup_theme', 'academiadaodontologia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function academiadaodontologia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'academiadaodontologia_content_width', 640 );
}
add_action( 'after_setup_theme', 'academiadaodontologia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function academiadaodontologia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'academiadaodontologia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'academiadaodontologia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'academiadaodontologia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function academiadaodontologia_scripts() {
	wp_enqueue_style( 'academiadaodontologia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'academiadaodontologia-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'academiadaodontologia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'academiadaodontologia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/5a495db39b.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masonry-layout', 'https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'academiadaodontologia-js', get_template_directory_uri() . '/assets/js/index.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'academiadaodontologia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Add custom classes to list item "li" */
function _namespace_menu_item_class( $classes, $item ) {       
	$classes[] = "nav-item"; // you can add multiple classes here
	return $classes;
} 
add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );

/* Add custom class to link in menu */
function _namespace_modify_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', '_namespace_modify_menuclass');

function custom_post_type() {
	/*register_taxonomy(
		'professores',
		'cursos',
		array(
			'label' => __( 'Professores' ),
			'rewrite' => array( 'slug' => 'professor' ),
			'has_archive' => false,
			'publicly_queryable'  => false,
		)
	);*/

	register_post_type('depoimentos',
		array(
			'labels'      => array(
					'name'          => __( 'Depoimentos', 'textdomain' ),
					'singular_name' => __( 'Depoimento', 'textdomain' ),
			),
			'exclude_from_search' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-testimonial',
			'menu_position'	=> 40,					
			'public'      => true,
			'publicly_queryable'  => false,
			'show_in_nav_menus' => false,
		)
	);
	register_post_type('faq',
		array(
			'labels'      => array(
					'name'          => __( 'FAQs', 'textdomain' ),
					'singular_name' => __( 'FAQs', 'textdomain' ),
			),
			'exclude_from_search' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-megaphone',
			'menu_position'	=> 40,
			'public'      => true,
			'publicly_queryable'  => false,
			'show_in_nav_menus' => false,
		)
	);
	register_post_type('cursos',
		array(
			'labels'      => array(
					'name'          => __( 'Cursos', 'textdomain' ),
					'singular_name' => __( 'Cursos', 'textdomain' ),
			),
			'has_archive' => false,
			'menu_icon' => 'dashicons-category',
			'menu_position'	=> 50,
			'public'      => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
		)
	);
	register_taxonomy(
		'curso_category', 
		'cursos', array(
			'hierarchical' => true, 
			'label' => 'Professores', 			
			'singular_name' => 'Professor', 
			'rewrite' => true, 
			'query_var' => true,
			'publicly_queryable'  => false,
			'show_in_nav_menus' => false,
		)
	);
}
add_action('init', 'custom_post_type');