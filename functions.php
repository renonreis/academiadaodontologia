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
	wp_enqueue_style( 'academiadaodontologia-theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), _S_VERSION );
	wp_style_add_data( 'academiadaodontologia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'academiadaodontologia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/5a495db39b.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'masonry-layout', 'https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', array(), _S_VERSION, true );
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

	register_post_type('campanhas',
		array(
			'labels'      => array(
					'name'          => __( 'Campanhas', 'textdomain' ),
					'singular_name' => __( 'Campanhas', 'textdomain' ),
			),
			'exclude_from_search' =>	true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-cart',
			'menu_position'	=> 50,
			'post_type' => 'campanhas',
			'public'      => true,
			'publicly_queryable'  => true,
			'rewrite' => array("slug" => "/lp", "with_front" => false),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			)			
		)
	);

	register_post_type('cursos',
		array(
			'labels'      => array(
					'name'          => __( 'Cursos', 'textdomain' ),
					'singular_name' => __( 'Cursos', 'textdomain' ),
			),
			'has_archive' => true,
			'menu_icon' => 'dashicons-category',
			'menu_position'	=> 50,
			'post_type' => 'cursos',
			'public'      => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),
			'taxonomies' => array( 'categoria-cursos' )
		)
	);

	register_taxonomy(
		'categoria-cursos',
		'cursos', array(
			'hierarchical' => true,
			'label' => 'Categorias',
			'singular_name' => 'Categoria',
			'rewrite' => true,
			'query_var' => true,
			'public'      => true,
			'publicly_queryable'  => false,
			'show_in_nav_menus' => false,
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

function academia_wp_list_categories( $args = '' ) {
	$defaults = array(
			'child_of'            => 0,
			'current_category'    => 0,
			'depth'               => 0,
			'echo'                => 1,
			'exclude'             => '',
			'exclude_tree'        => '',
			'feed'                => '',
			'feed_image'          => '',
			'feed_type'           => '',
			'hide_empty'          => 1,
			'hide_title_if_empty' => false,
			'hierarchical'        => true,
			'order'               => 'ASC',
			'orderby'             => 'name',
			'separator'           => '<br />',
			'show_count'          => 0,
			'show_option_all'     => '',
			'show_option_none'    => __( 'No categories' ),
			'style'               => 'list',
			'taxonomy'            => 'category',
			'title_li'            => __( 'Categories' ),
			'use_desc_for_title'  => 1,
	);

	$parsed_args = wp_parse_args( $args, $defaults );

	if ( ! isset( $parsed_args['pad_counts'] ) && $parsed_args['show_count'] && $parsed_args['hierarchical'] ) {
			$parsed_args['pad_counts'] = true;
	}

	// Descendants of exclusions should be excluded too.
	if ( true == $parsed_args['hierarchical'] ) {
			$exclude_tree = array();

			if ( $parsed_args['exclude_tree'] ) {
					$exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $parsed_args['exclude_tree'] ) );
			}

			if ( $parsed_args['exclude'] ) {
					$exclude_tree = array_merge( $exclude_tree, wp_parse_id_list( $parsed_args['exclude'] ) );
			}

			$parsed_args['exclude_tree'] = $exclude_tree;
			$parsed_args['exclude']      = '';
	}

	if ( ! isset( $parsed_args['class'] ) ) {
			$parsed_args['class'] = ( 'category' === $parsed_args['taxonomy'] ) ? 'categories' : $parsed_args['taxonomy'];
	}

	if ( ! taxonomy_exists( $parsed_args['taxonomy'] ) ) {
			return false;
	}

	$show_option_all  = $parsed_args['show_option_all'];
	$show_option_none = $parsed_args['show_option_none'];

	$categories = get_categories( $parsed_args );

	$output = '';

	if ( $parsed_args['title_li'] && 'list' === $parsed_args['style']
			&& ( ! empty( $categories ) || ! $parsed_args['hide_title_if_empty'] )
	) {
			$output = '<li class="' . esc_attr( $parsed_args['class'] ) . '">' . $parsed_args['title_li'] . '<ul>';
	}

	if ( empty( $categories ) ) {
			if ( ! empty( $show_option_none ) ) {
					if ( 'list' === $parsed_args['style'] ) {
							$output .= '<li class="cat-item-none">' . $show_option_none . '</li>';
					} else {
							$output .= $show_option_none;
					}
			}
	} else {
			if ( ! empty( $show_option_all ) ) {

					$posts_page = '';

					// For taxonomies that belong only to custom post types, point to a valid archive.
					$taxonomy_object = get_taxonomy( $parsed_args['taxonomy'] );
					if ( ! in_array( 'post', $taxonomy_object->object_type, true ) && ! in_array( 'page', $taxonomy_object->object_type, true ) ) {
							foreach ( $taxonomy_object->object_type as $object_type ) {
									$_object_type = get_post_type_object( $object_type );

									// Grab the first one.
									if ( ! empty( $_object_type->has_archive ) ) {
											$posts_page = get_post_type_archive_link( $object_type );
											break;
									}
							}
					}

					// Fallback for the 'All' link is the posts page.
					if ( ! $posts_page ) {
							if ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_for_posts' ) ) {
									$posts_page = get_permalink( get_option( 'page_for_posts' ) );
							} else {
									$posts_page = home_url( '/' );
							}
					}

					$posts_page = esc_url( $posts_page );
					if ( 'list' === $parsed_args['style'] ) {
							$output .= "<li class='cat-item-all'><a href='$posts_page'>$show_option_all</a></li>";
					} else {
							$output .= "<a href='$posts_page'>$show_option_all</a>";
					}
			}

			if ( empty( $parsed_args['current_category'] ) && ( is_category() || is_tax() || is_tag() ) ) {
					$current_term_object = get_queried_object();
					if ( $current_term_object && $parsed_args['taxonomy'] === $current_term_object->taxonomy ) {
							$parsed_args['current_category'] = get_queried_object_id();
					}
			}

			if ( $parsed_args['hierarchical'] ) {
					$depth = $parsed_args['depth'];
			} else {
					$depth = -1; // Flat.
			}
			$output .= walk_category_tree( $categories, $depth, $parsed_args );
	}

	if ( $parsed_args['title_li'] && 'list' === $parsed_args['style']
			&& ( ! empty( $categories ) || ! $parsed_args['hide_title_if_empty'] )
	) {
			$output .= '</ul></li>';
	}

	/**
	 * Filters the HTML output of a taxonomy list.
	 */
	$html = apply_filters( 'wp_list_categories', $output, $args );

	if ( $parsed_args['echo'] ) {
			echo $html;
	} else {
			return $html;
	}
}

class Walker_Category_Custom extends Walker_Category {

	function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters( 'list_cats', esc_attr( $category->name ), $category );

		$atts         = array();
		$atts['href'] = get_term_link( $category );


		$atts = apply_filters( 'category_list_link_attributes', $atts, $category, $depth, $args, $id );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$link = sprintf(
			'<a%s>%s'. ' (' . number_format_i18n( $category->count ) . ')'.'</a>',
			$attributes,
			$cat_name
		);

		if ( 'list' === $args['style'] ) {
			$output     .= "\t<li";
			$css_classes = array(
				'cat-item',
				'cat-item-' . $category->term_id,
			);

			$output .= ">$link\n";
		} elseif ( isset( $args['separator'] ) ) {
			$output .= "\t$link" . $args['separator'] . "\n";
		} else {
			$output .= "\t$link<br />\n";
		}
	}
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Opções do Tema',
		'menu_title'	=> 'Opções do Tema',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position'		=> 59,
		'icon_url'		=> 'dashicons-star-filled',
		'update_button' => __('Atualizar', 'acf'),
		'updated_message' => __("Opções do tema atualizado", 'acf'),
	));

}

function remove_pages_from_search() {
	global $wp_post_types;
	$wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

// MOVE O YOAST ABAIXO DO ACF
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');