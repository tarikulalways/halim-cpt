<?php
/*
Plugin Name: Halim CPT
Plugin URI: http://github.com/halim-cpt
Description: Halim Custom Post Types (CPT) plugin.
Version: 1.0
Author: Tarikul
Author URI: http://iamtarik.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// reister psot type

if(!function_exists('halim_custom_post')){
    function halim_custom_post(){
        // slider 
        register_post_type('slider', array(
            'labels' => array(
                'name' => esc_html__('Sliders', 'halim'),
                'singular_name' => esc_html__('Slider', 'halim'),
                'add_new' => esc_html__('Add new slider', 'halim'),
                'add_new_item' => esc_html__('Add new sliders', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'), 
            'menu_icon' => 'dashicons-slides'
        ));

        // service cutom post type
        register_post_type('service', array(
            'labels' => array(
                'name' => esc_html__('Services', 'halim'),
                'singular_name' => esc_html__('Service', 'halim'),
                'add_new' => esc_html('Add new service', 'halim'),
                'add_new_item' => esc_html__('Add new service items', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'cutom-fields'),
            'menu_icon' => 'dashicons-sos'
        ));

        // counter custom post
        register_post_type('counters', array(
            'labels' => array(
                'name' => esc_html__('Counters', 'halim'),
                'singular_name' => esc_html__('Counter', 'halim'),
                'add_new' => esc_html__('Add new counter', 'halim'),
                'add_new_item' => esc_html__('Add new items', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields'),
            'menu_icon' => 'dashicons-image-filter'
        ));

        // team custom post type
        register_post_type('teams', array(
            'labels' => array(
                'name' => esc_html__('Teams', 'halim'),
                'singular_name' => esc_html__('Team', 'halim'),
                'add_new' => esc_html__('Add new team', 'halim'),
                'add_new_item' => esc_html__('Add new team items', 'halim'),'featured_image' => esc_html__('Team profile', 'halim'),
                'set_featured_image' => esc_html__('Set team profile', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-groups'
        ));

        // testimonial custom post type
        register_post_type('testimonials', array(
            'labels' => array(
                'name' => esc_html__('Testimonials', 'halim'),
                'singular_name' => esc_html__('Testimonial', 'halim'),
                'add_new' => esc_html__('Add new Testimonials', 'halim'),
                'add_new_item' => esc_html__('Add new Testimonials items', 'halim'),'featured_image' => esc_html__('Testimonials profile', 'halim'),
                'set_featured_image' => esc_html__('Set Testimonials profile', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-testimonial'
        ));

        // gallery post type
        register_post_type('galleries', array(
            'labels' => array(
                'name' => esc_html__('Galleries', 'halim'),
                'singular_name' => esc_html__('Gallery', 'halim'),
                'add_new' => esc_html__('Add new Gallery', 'halim'),
                'add_new_item' => esc_html__('Add new Gallery items', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields'),
            'menu_icon' => 'dashicons-format-gallery'
        ));

        // protfolio post type
        register_post_type('protfolios', array(
            'labels' => array(
                'name' => esc_html__('Protfolios', 'halim'),
                'singular_name' => esc_html__('Protfolio', 'halim'),
                'add_new' => esc_html__('Add new Protfolio', 'halim'),
                'add_new_item' => esc_html__('Add new Gallery items', 'halim'),
                'featured_image' => esc_html__('Protfolio image', 'halim'),
                'set_featured_image' => esc_html__('set protfolio image', 'halim')
            ),
            'public' => true,
            'supports' => array('title', 'custom-fields', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio'
        ));

        // register taxonomy
        register_taxonomy('prot_category', 'protfolios', array(
            'labels' => array(
                'name' => esc_html__('Categories', 'halim'),
                'singular_category' => esc_html__('category', 'halim')
            ),
            'hierarchical' => true,
            'show_admin_column' => true
        ));
    }   
}
add_action('init', 'halim_custom_post');