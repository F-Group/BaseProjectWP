<?php
    define( 'THEME_URL', get_stylesheet_directory() );
    define( 'CORE', THEME_URL . '/core' );

//    require_once( CORE . '/init.php' );

if ( ! function_exists( 'fp_setup' ) ) :

    function fp_setup() {
       // load_theme_textdomain( 'twentyfourteen', get_template_directory() . '/languages' );
        load_theme_textdomain( 'fp', THEME_URL . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'post-formats',
            array(
                'image',
                'video',
                'gallery',
                'quote',
                'link'
            )
        );
        add_theme_support( 'custom-background', apply_filters( 'lse_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'fp' )
        ) );
    }
    add_action ( 'init', 'fp_setup' );

    add_editor_style( array( 'css/editor-style.css' ) );

endif;

function fp_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Content SideBar', 'fp' ),
        'id'            => 'main-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget instagram %2$s">',
        'after_widget'  => '</div>'
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Newsletter SideBar', 'fp' ),
        'id'            => 'contact-sidebar',
        'description'   => '',
        'before_widget' => '<div id="%1$s" class="widget contact-btn %2$s">',
        'after_widget'  => '</div>'
    ) );
}
add_action( 'widgets_init', 'fp_widgets_init' );

function fp_scripts() {
    // add wordpress jquery
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');

    $path = get_template_directory_uri();

    // custom js
    $scripts = array(
        '/js/app.js'
    );
    foreach ($scripts as $key => $url){
        wp_enqueue_script( 'lse-script-'.$key, $path .  $url, array());
    }

    $styles = array(
        'css/app.css'
    );
    foreach ($styles as $key => $url){
        wp_enqueue_style( 'fp-style-'.$key, $path .  $url, array());
    }

    wp_enqueue_style( 'fp-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'fp_scripts' );

//add theme option
function add_theme_option() {
    global $taka_options;
    $taka_options = get_option("eto_settings");
}
add_action( 'wp_head', 'add_theme_option' );

//add google map key
function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyATExYoowEjVke3f-99PHj4M07I5D8hy4M';

    return $api;

}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//get custom post type
function getList($type,$order_by="date") {

    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1,
        'orderby'=>$order_by,
        'order'=>'DESC');
    return new WP_Query($args);
}

//add insert template button into editor
add_filter( 'tinymce_templates_enable_media_buttons', function(){ return true; } );