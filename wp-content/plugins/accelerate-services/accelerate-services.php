<?php
   /*
   Plugin Name: Accelerate Services
   Plugin URI: https://codifiedconcepts.com/
   Author: Maren Vernon
   Author URI: https://codifiedconcepts.com/
   Description: This plugin registers the 'our_services' post type and creates a custom taxonomy for services.
   Version: 1.0.0
   License: GNU General Public License v2 or later
   License URI: http://www.gnu.org/licenses/gpl-2.0.html
   */

// Add a custom post type
function create_services_post_types() {
    register_post_type( 'our_services',
        array(
            'labels' => array(
                'name' => __( 'Our Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => false,
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            //'taxonomies' => array( 'post_tag', 'category' ),  //Comment out if you don't want Category and Tags as options and just add custom taxonomy below
            'rewrite' => array( 'slug' => 'our-services' ),
        )
    );
}
add_action( 'init', 'create_services_post_types' );

// Register a custom taxonomy
function services_register_taxonomy() {
    register_taxonomy( 'servicescategory', 'our_services',
        array(
            'labels' => array(
                'name' => __( 'Service Categories' ),
                'singular_name' => __( 'Service Category' ),
                'search_items' => __( 'Search Service Categories'),
                'all_items' => __(  'All Service Categories'),
                'edit_item' => __( 'Edit Service Category'),
                'update_item' => __( 'Update Service Category'),
                'add_new_item' => __( 'Add New Service Category'),
                'new_item_name' => __( 'New Service Category')
            ),
    		'hierarchical' => true,
    		'query_var' => true,
    		'show_admin_column' => true
    	) );
}
add_action( 'init', 'services_register_taxonomy' );

?>
