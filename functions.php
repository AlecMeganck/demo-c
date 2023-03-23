<?php 
    function register_acf_blocks_types() {
        acf_register_block_type(array(
            'name' => 'hero',
            'title' => __('Hero'),
            'render_template' => 'blocks/hero/hero.php',
        ));
        acf_register_block_type(array(
            'name' => 'imageText',
            'title' => __('Image Text'),
            'render_template' => 'blocks/imageText/imageText.php',
        ));
        acf_register_block_type(array(
            'name' => 'statement',
            'title' => __('Statement'),
            'render_template' => 'blocks/statement/statement.php',
        ));
        acf_register_block_type(array(
            'name' => 'services',
            'title' => __('Services'),
            'render_template' => 'blocks/services/services.php',
        ));
        acf_register_block_type(array(
            'name' => 'posts',
            'title' => __('Posts'),
            'render_template' => 'blocks/posts/posts.php',
        ));
        acf_register_block_type(array(
            'name' => 'clients',
            'title' => __('Clients'),
            'render_template' => 'blocks/clients/clients.php',
        ));
        acf_register_block_type(array(
            'name' => 'contact',
            'title' => __('Contact'),
            'render_template' => 'blocks/contact/contact.php',
        ));
    }

    function register_styles(){
        wp_enqueue_style('castaar-animate', get_template_directory_uri() . "/css/animate.css", array(), '1.0', 'all');
        wp_enqueue_style('castaar-styling', get_template_directory_uri() . "/css/style.css", array(), '1.0', 'all');
        wp_enqueue_style('castaar-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
        wp_enqueue_style('castaar-gillroy', "https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css", array(), '', 'all');
    }

    function register_scripts(){
        wp_enqueue_script('castaar-wow', get_template_directory_uri() . "/js/vendor/wow/wow.js", array(), '1.2.2', true);
        wp_enqueue_script('castaar-jquery', get_template_directory_uri() . "/js/vendor/jquery/jquery.js", array(), '3.6.1', true);
        wp_enqueue_script('castaar-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
        wp_enqueue_script('castaar-main', get_template_directory_uri() . "/js/main.js", array(), '1.0', true);
        wp_enqueue_script('castaar-navigation', get_template_directory_uri() . "/js/app/modules/navigation.js", array(), '1.0', true);
    }

    function create_service_type() {
    
        register_post_type( 'services',
            array(
                'labels' => array(
                    'name' => __( 'Services' ),
                    'singular_name' => __( 'Services' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'services'),
                'show_in_rest' => true,
                'supports' => array('title', 'editor', 'thumbnail')
            )
        );
    }

    function create_client_type() {
    
        register_post_type( 'clients',
            array(
                'labels' => array(
                    'name' => __( 'Clients' ),
                    'singular_name' => __( 'Clients' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'clients'),
                'show_in_rest' => true,
                'supports' => array('title', 'editor', 'thumbnail')
            )
        );
    }

    add_action( 'after_setup_theme', 'cxc_add_post_thumbnail_supports', 99 );
    function cxc_add_post_thumbnail_supports() {
        add_theme_support( 'post-thumbnails' );
    }

    if (function_exists('acf_register_block_type')){
        add_action( 'acf/init', 'register_acf_blocks_types' );
    }
    add_action('wp_enqueue_scripts','register_styles');
    add_action('wp_enqueue_scripts','register_scripts');
    add_action( 'init', 'create_service_type' );
    add_action( 'init', 'create_client_type' );
?>