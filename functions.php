<?php
/**
 * clothes shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clothes_shop
 */

if ( ! function_exists( 'clothes_shop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function clothes_shop_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on clothes shop, use a find and replace
	 * to change 'clothes-shop' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'clothes-shop', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'clothes-shop' ),
	) );

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
	add_theme_support( 'custom-background', apply_filters( 'clothes_shop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'clothes_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function clothes_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'clothes_shop_content_width', 640 );
}
add_action( 'after_setup_theme', 'clothes_shop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function clothes_shop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'clothes-shop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'clothes-shop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'clothes_shop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function clothes_shop_scripts() {
	wp_enqueue_style( 'clothes-shop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'clothes-shop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'clothes-shop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clothes_shop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



function loadScriptSite(){
    /*
     * get_template_directory_uri()
     * Получает URL текущей темы. Учитывает SSL. Не учитывает наличие дочерней темы. Не содержит закрывающий слэш.
     * https://wp-kama.ru/function/get_template_directory_uri
     */
    $version = null;
    wp_register_style(
        'ClothesShop-bootstrap', //$handle
        get_template_directory_uri().'/bootstrap/css/bootstrap.css', // $src
        array(), //$deps,
        $version // $ver
    );
   wp_register_style(
        'ClothesShop-main', //$handle
        get_template_directory_uri().'/css/main.css', // $src
        array(), //$deps,
        $version // $ver
    );
    wp_enqueue_style('ClothesShop-bootstrap');
    wp_enqueue_style('ClothesShop-main');

    wp_register_script(
        'ClothesShop', //$handle
        get_template_directory_uri().'/bootstrap/js/bootstrap.js', //$src
        array(
            'jquery'
        ), //$deps
        $version, //$ver
        true //$$in_footer
    );
    wp_enqueue_script('ClothesShop');
}
add_action( 'wp_enqueue_scripts', 'loadScriptSite');