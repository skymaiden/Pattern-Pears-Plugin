<?php
/*
Plugin Name: Pattern Pears Plugin
Description: Dan Cederholm's Pears theme as a plugin, for use on existing sites. Uses a 'pears' custom post type and a 'pattern category' taxonomy to keep things separate.
Version: 0.1
Author: Hinerangi Courtenay
Author URI: http://skymaiden.com/
License: GPLv2
*/


/**
 * Activation
 */
register_activation_hook( __FILE__, 'pattern_pears_install' );

function pattern_pears_install() {
    // future activation stuff like set default options
}


/**
 * Add custom post type
 */
require_once( plugin_dir_path( __FILE__ ) . '/inc/pattern-pears-posttype.php' );
 

/**
 * Add meta boxes
 */
require_once( plugin_dir_path( __FILE__ ) . '/inc/pattern-pears-metabox.php' );


/**
 * Add custom taxonomy
 */
require_once( plugin_dir_path( __FILE__ ) . '/inc/pattern-pears-taxonomy.php' );


/**
 * Enqueue front-end styles and scripts
 */
add_action( 'wp_enqueue_scripts', 'pattern_pears_assets_front' );

function pattern_pears_assets_front() {
    
    if( get_post_type() == 'pattern_pear' ) {
        wp_enqueue_style( 'pears.screen', plugins_url( '/css/screen.less', __FILE__ ), array() , false , 'screen' );
        add_filter('style_loader_tag', 'enqueue_less_styles');

        wp_enqueue_script( 'pears.less', plugins_url( '/js/less.js', __FILE__ ), array(), false, false );   
        wp_enqueue_script( 'pears.js', plugins_url( '/js/pears.js', __FILE__ ), array('jquery'), false, true );  
    }
}

/* Find and replace the 'rel' attribute for Less stylesheet */
function enqueue_less_styles( $tag ) {
    return preg_replace( "/='stylesheet' id='pears.screen-css'/", "='stylesheet/less' id='pears.screen-css'", $tag );
}


/**
 * Use custom template
 */
add_action('template_redirect', 'pattern_pears_set_template');

function pattern_pears_set_template() {
    
    $template_single_path = plugin_dir_path( __FILE__ ) . '/inc/pattern-pears-template-single.php';
    $template_path = plugin_dir_path( __FILE__ ) . '/inc/pattern-pears-template.php';
    
    if ( get_post_type() == 'pattern_pear' ) {
        
        if ( is_singular() ) {
            if( file_exists( $template_single_path ) ) {
                include( $template_single_path );
                exit;
            }
        } else {
            if( file_exists( $template_path ) ) {
                include( $template_path );
                exit;
            }
        }
        
    }
}


