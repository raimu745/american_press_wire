<?php
if (!function_exists('american_press_wire_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features
     *
     * It is important to set up these functions before the init hook so that none of these
     * features are lost.
     *
     * @since American Press Wire 1.0
     */
    /**
     * First, let's set the maximum content width based on the theme's design and stylesheet.
     * This will limit the width of all uploaded images and embeds.
     */
    // if (
    //     !isset($content_width)
    // )
    //     $content_width = 800; / pixels /
    function american_press_wire_setup()
    {
        /**
         * Add default posts and comments RSS feed links to &lt;head&gt;.
         */
        add_theme_support('automatic-feed-links');
        /**
         * Add support for  custom navigation menus.
         */
        register_nav_menus(
            array(
                'primary-menu' => 'Home Menu',
                'secondary-menu' => 'Inner Menu'
            )
        );
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats',  array('aside', 'gallery', 'quote', 'image', 'video'));

        //custom header
        $args = array(
            'default-image'      => get_template_directory_uri() . '/assets/images/logo.png',
            'default-text-color' => '000',
            'width'              => 1000,
            'height'             => 250,
            'flex-width'         => true,
            'flex-height'        => true,
        );
        add_theme_support('custom-header', $args);

        //register site title
        add_theme_support('title-tag');
    }

    function create_news_post_type()
{
    $labels = array(
        'name' => __('News'),
        'singular_name' => __('News'),
        'all_items'           => __('All News'),
        'view_item'           => __('View News'),
        'add_new_item'        => __('Add News'),
        'add_new'             => __('Add News'),
        'edit_item'           => __('Edit News'),
        'update_item'         => __('Update News'),
        'search_items'        => __('Search News'),
        'not_found' => __('No News found'),
        'search_items' => __('News')
    );

    $args = array(

        'labels' => $labels,
        'description' => 'Add  News contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array('slug' => false),
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),
        'taxonomies' => array('category'),
    );
    
    register_post_type('News', $args);
}
add_action('init', 'create_news_post_type');



endif;
add_action('after_setup_theme', 'american_press_wire_setup');

//add custome style and scripts file starts
function add_theme_scripts()
{
    wp_enqueue_style('style',  get_stylesheet_uri());
    wp_enqueue_style('style1', get_template_directory_uri() . '/assets/css/compile_bootstrap.css');
    wp_enqueue_style('style2', get_template_directory_uri() . '/assets/sass/style.css');

    wp_enqueue_script('script1', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('script2', get_template_directory_uri() . '/assets/js/popper.js');
    wp_enqueue_script('script3', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('script4', get_template_directory_uri() . '/assets/js/main.js');
    // wp_enqueue_style( 'dashicons' );
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

