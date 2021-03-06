<?php
/**
 * SHIELD functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SHIELD
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('shield_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function shield_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on SHIELD, use a find and replace
         * to change 'shield' to the name of your theme in all the template files.
         */
        load_theme_textdomain('shield', get_template_directory() . '/languages');

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
        register_nav_menus(
            array(
                'primary' => esc_html__('Main Menu', 'shield'),
                'footer' => esc_html__('Footer Menu', 'shield'),
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
                'shield_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'shield_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shield_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('shield_content_width', 640);
}
add_action('after_setup_theme', 'shield_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shield_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'shield'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'shield'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'shield_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function shield_scripts()
{
    wp_enqueue_style('shield-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('shield-style', 'rtl', 'replace');

    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/lib/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('roboto');

    wp_enqueue_script('jquery');

    wp_enqueue_script('block-revealers-animation-script', get_template_directory_uri() . '/assets/js/lib/blockRevealers/anime.min.js', array(), '', true);
    wp_enqueue_script('block-revealers-scroll-script', get_template_directory_uri() . '/assets/js/lib/blockRevealers/scrollMonitor.js', array(), '', true);
    wp_enqueue_script('block-revealers-script', get_template_directory_uri() . '/assets/js/lib/blockRevealers/main.js', array(), '', true);

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular()) {
        wp_enqueue_script('single-product-script', get_template_directory_uri() . '/assets/js/single-product.js', array(), '', false);
    }

    if (is_front_page()) {
        wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/revealers_three.js', array(), '', true);
    } elseif (is_page('company')) {
        wp_enqueue_script('company-script', get_template_directory_uri() . '/assets/js/revealers_four.js', array(), '', true);
    } elseif (is_page('contact') || is_archive() || is_single()) {
        wp_enqueue_script('reveals-one-script', get_template_directory_uri() . '/assets/js/revealers_one.js', array(), '', true);
    } elseif (is_page('service')) {
        wp_enqueue_script('service-reveal-script', get_template_directory_uri() . '/assets/js/revealers_fifteen.js', array(), '', true);
        wp_enqueue_script('service-script', get_template_directory_uri() . '/assets/js/service.js', array(), '', true);
    } elseif (is_page('service-pcr')) {
        wp_enqueue_script('home-script', get_template_directory_uri() . '/assets/js/revealers_three-firstWhite.js', array(), '', true);
    } elseif(is_page('price')) {
        wp_enqueue_script('price-reveal-script', get_template_directory_uri() . '/assets/js/revealers_six.js', array(), '', true);
        wp_register_style('swiper-style', get_template_directory_uri() . '/assets/css/lib/swiper/swiper-bundle.min.css', array(), '1.0', 'all');
        wp_enqueue_style('swiper-style');
        wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/lib/swiper/swiper-bundle.min.js', array(), '', false);
        wp_enqueue_script('price-script', get_template_directory_uri() . '/assets/js/price.js', array(), '', true);
    }
}
add_action('wp_enqueue_scripts', 'shield_scripts');

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*********************************
 トップページNEWSの表示件数を変更
**********************************/
function change_posts_per_page($query)
{
    if (is_front_page()) {
        $query->set('posts_per_page', '4');
        return $query;
    }
}
add_filter('pre_get_posts', 'change_posts_per_page');


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function official_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('<'),
        'next_text' => __('>'),
        'mid_size' => 2,
        'total' => $wp_query->max_num_pages
    ));
}

// PopularPostsの出力変更
function remove_posted_on($output)
{
    return str_replace("に投稿された", "", $output);
}
add_filter('wpp_post', 'remove_posted_on');
