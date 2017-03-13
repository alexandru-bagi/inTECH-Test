<?php
/*
    Plugin Name: Intech Slider
    Description: Implementation of slider in Wordpress
    Author: Alexandru Bagi
    Version: 1.0
*/
function intech_slider_init() {
    $args = array(
        'public' => true,
        'label' => 'Intech Slider Images',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('intech_slider_images', $args); // register new post type

    add_image_size('intech_slider_function', 1366, 768, true); // set image size for slider

    add_shortcode('intech-slider-shortcode', 'intech_slider_function'); // add shortcode functionality
}
add_theme_support( 'post-thumbnails' );

add_action('init', 'intech_slider_init');

function intech_slider_register_scripts() {
    if (!is_admin()) {
        // register
        wp_register_script('intech_slider-script', plugins_url('/owl.carousel.min.js', __FILE__), array( 'jquery' ));
        wp_register_script('intech_script', plugins_url('/script.js', __FILE__));

        // enqueue
        wp_enqueue_script('intech_slider-script');
        wp_enqueue_script('intech_script');
    }
}// register scripts

function intech_slider_register_styles() {
    // register
    wp_register_style('intech_slider_styles', plugins_url('/owl.carousel.min.css', __FILE__));
    wp_register_style('intech_slider_styles_theme', plugins_url('/themes/default/owl.theme.default.css', __FILE__));
    wp_register_style('intech_slider_custom_styles', plugins_url('/intech-slider.css', __FILE__));

    // enqueue
    wp_enqueue_style('intech_slider_styles');
    wp_enqueue_style('intech_slider_styles_theme');
    wp_enqueue_style('intech_slider_custom_styles');
}// register styles

add_action('wp_print_scripts', 'intech_slider_register_scripts');
add_action('wp_print_styles', 'intech_slider_register_styles');

function intech_slider_function($type='intech_slider_function') {
    $args = array(
        'post_type' => 'intech_slider_images',
        'posts_per_page' => 5
    );

    // The Query
    $the_query = new WP_Query( $args );

// The Loop
    if ( $the_query->have_posts() ) {
        $result = '<div class="owl-carousel owl-theme">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $the_url = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), $type);
            $result .='<div><img title="'.get_the_title().'" src="' . $the_url[0] . '" data-thumb="' . $the_url[0] . '" alt=""/></div>';

        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        return NULL;
    }


    $result .= '</div>';

    return $result;
} // main function
?>