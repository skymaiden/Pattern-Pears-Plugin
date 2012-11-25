<?php

add_action('init', 'pattern_pears_register_taxonomies');

function pattern_pears_register_taxonomies() {
    
    $args = array(
        'hierarchical'  => true,
        'query_var'     => 'pattern_category',
        'show_tagcloud' => true,
        'rewrite'       => array(
            'slug'          =>  'pears/pattern_category',
            'with_front'    =>  false
        ),
        'labels'        => array(
            'name'          =>  'Pattern categories',
            'singular_name' =>  'Pattern category'
        )
    );
    
    register_taxonomy( 'pattern_category', array( 'pattern_pear' ), $args );
    
}
