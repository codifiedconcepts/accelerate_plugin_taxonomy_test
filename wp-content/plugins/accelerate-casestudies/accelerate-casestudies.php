<?php
   /*
   Plugin Name: Accelerate Case Studies
   Plugin URI: https://codifiedconcepts.com/
   Author: Maren Vernon
   Author URI: https://codifiedconcepts.com/
   Description: This plugin registers the 'case_studies' post type.
   Version: 1.0.0
   License: GNU General Public License v2 or later
   License URI: http://www.gnu.org/licenses/gpl-2.0.html
   */

// Add a custom post type
function create_casestudies_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_casestudies_post_types' );

?>
