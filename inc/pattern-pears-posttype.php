<?php

/**
 * Set up post types
 */
add_action('init', 'pattern_pears_posttype_init');

/**
 * Register post types
 */
function pattern_pears_posttype_init() {
    
    /* Set up arguments for the 'pears' post type. */
    $pears_args = array(
        'public'    => true,
        'query_var' => 'pattern_pear',
        'rewrite'   => array(
            'slug'          => 'patterns/pear',
            'with_front'    => false
        ),
        'supports'  => array(
            'title',
            'editor',
            
        ),
        'labels'    => array(
            'name'          => 'Pears',
            'singular_name' => 'Pear',
            'add_new'       => 'Add New Pear',
            'add_new_item'  => 'Add New Pear',
            'edit_item'     => 'Edit Pear',
            'new_item'      => 'New Pear',
            'view_item'     => 'View Pear',
            'search_items'  => 'Search Pears',
            'not_found'     => 'No Pears Found',
            'not_found_in_trash' => 'No Pears Found In Trash'
        ),
    );
    
    /* Register the pears post type. */
    register_post_type( 'pattern_pear', $pears_args );
    
}
