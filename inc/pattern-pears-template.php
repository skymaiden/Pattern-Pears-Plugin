<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
			

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
    <?php 
        global $post;
        $post_id = $post->ID;
    ?>
    
    <div class="pears-body">
        <div class="pears-wrap group">
            <div class="pears-main">
            
                <style id="s" type="text/css">
                    <?php 
                        $key = "css"; 
                        echo get_post_meta( $post_id, $key, true ); 
                    ?>
                </style>

                <div id="pattern" class="mod group">
                    <h3 class="label">Pattern</h3> 
                    
                    <h4><?php the_category(' '); ?> <span class="sep">&rarr;</span> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    
                    <div id="pattern-wrap" class="group">
                        <?php 
                            $key = "html"; 
                            echo get_post_meta( $post_id, $key, true ); 
                        ?>
                    </div>
                </div>
        
                <div class="nav">
                    <?php require_once( plugin_dir_path( __FILE__ ) .'/pattern-pears-menu.php' ); ?>
                </div>
        
            </div><!-- /pears-main -->
        </div><!-- /pears-wrap -->
    </div><!-- /pears-body -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
