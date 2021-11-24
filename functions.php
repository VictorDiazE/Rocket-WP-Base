<?php

/**
 * rocket_base functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rocket_base
 */

if (!function_exists('rocket_base_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rocket_base_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rocket_base, use a find and replace
		 * to change 'rocket_base' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('rocket_base', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'rocket_base'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('rocket_base_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'rocket_base_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rocket_base_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('rocket_base_content_width', 1200);
}
add_action('after_setup_theme', 'rocket_base_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rocket_base_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'rocket_base'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'rocket_base'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<span class="widget-title d-block">',
		'after_title'   => '</span>',
	));

	register_sidebar(array(
		'name' => 'Footer_Logo',
		'id' => 'Footer_Logo',
		'before_title'  => '<span class="widgettitle d-block">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name' => 'Footer_1',
		'id' => 'Footer_1',
		'before_title'  => '<span class="widgettitle d-block">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name' => 'Footer_2',
		'id' => 'Footer_2',
		'before_title'  => '<span class="widgettitle d-block">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name' => 'Footer_3',
		'id' => 'Footer_3',
		'before_title'  => '<span class="widgettitle d-block">',
		'after_title'   => '</span>',
	));
	register_sidebar(array(
		'name' => 'Footer_4',
		'id' => 'Footer_4',
		'before_title'  => '<span class="widgettitle d-block">',
		'after_title'   => '</span>',
	));
}
add_action('widgets_init', 'rocket_base_widgets_init');

/**
 * Embed Google Fonts
 */
require get_template_directory() . '/inc/embed/embed-fonts.php';

/**
 * Embed Modular CSS
 */
require get_template_directory() . '/inc/embed/embed-styles.php';

/**
 * Embed JS Scripts
 */
require get_template_directory() . '/inc/embed/embed-scripts.php';

/**
 * Enqueue scripts and styles.
 */
function rocket_base_scripts()
{

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'rocket_base_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/config/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/config/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/config/template-functions.php';

/**
 * Bootstrap Navwalker.
 */
require get_template_directory() . '/inc/navwalker/bootstrap-wp-navwalker.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/config/customizer.php';

/**
 * Custom Blog
 */
require get_template_directory() . '/inc/all-posts/custom-blog.php';

/**
 * Custom CPTs
 */
require get_template_directory() . '/inc/all-posts/custom-cpt.php';

/**
 * Embed Video using iFrame
 */
require get_template_directory() . '/inc/embed/embed-video.php';

/**
 * Get Translation URLs
 */
require get_template_directory() . '/inc/translation/custom-translation.php';

/**
 * Add Translation strings
 */
require get_template_directory() . '/inc/translation/translation-strings.php';

/**
 * Add ALT to images
 */
require get_template_directory() . '/inc/images/alt-images.php';

/**
 * Custom Admin menu
 */
require get_template_directory() . '/inc/backoffice/custom-backoffice.php';

/**
 * Custom Breadcrumbs
 */
require get_template_directory() . '/inc/all-posts/custom-breadcrumbs.php';

/**
 * Dynamic Tags
 */
require get_template_directory() . '/inc/html-tags/dynamic-tags.php';

/**
 * Options Page
 */
require get_template_directory() . '/inc/backoffice/options-page.php';

/* ------------- Custom Search for products and CPTS */
function customize_search($query)
{
	if (!is_admin() && $query->is_main_query() && $query->is_search()) {
		$query->set('post_type', array('post'));
	}
}
add_action('pre_get_posts', 'customize_search');

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/config/jetpack.php';
}


function print_r2($val)
{
	echo '<pre>';
	print_r($val);
	echo  '</pre>';
}

/**
 * Esconder editor por defecto de Wordpress.
 */
add_action('init', 'my_remove_post_type_support', 999);
function my_remove_post_type_support()
{
	remove_post_type_support('page', 'editor');
}
