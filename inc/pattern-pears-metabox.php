<?php

add_action( 'add_meta_boxes', 'pattern_pears_add_meta_box' );
add_action( 'save_post', 'pattern_pears_save_post' );


function pattern_pears_add_meta_box() {

    add_meta_box( 
        'pears',
        'Pears',
        'pattern_pears_meta_box',
        'pattern_pear',
        'normal',
        'high'
    );

}

function pattern_pears_meta_box( $post ) {
    wp_nonce_field( plugin_basename( __FILE__ ), 'pattern_pears_noncename' );

    $html = get_post_meta($post->ID,'html',true);
    $css = get_post_meta($post->ID,'css',true);
    
    ?>
    
    
        <table class="form-table">
            <tr valign="top">
                <td colspan="2"><p class="howto">These fields are for the HTML markup and CSS styles.  The post body can be used for notes.</p></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="html">HTML</label></th>
                <td><textarea id="html" name="html" rows="20" cols="90" /><?php echo $html; ?></textarea></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="css">CSS</label></th>
                <td><textarea id="css" name="css" rows="20" cols="90" /><?php echo $css; ?></textarea></td>
            </tr>
        </table>
    
    
    <?
}

function pattern_pears_save_post( $post_id ) {

    // Ignore if doing an autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
            
    // verify data came from pears meta box
    if ( !wp_verify_nonce( $_POST['pattern_pears_noncename'], plugin_basename( __FILE__ ) ) )
        return;         
    
    // Check user permissions
    if ( 'post' == $_POST['post_type'] ) {
        if ( !current_user_can( 'edit_page', $post_id ) )
            return;
    }
    else{
        if ( !current_user_can( 'edit_post', $post_id ) )
            return;
    }
    
    $html_data = $_POST['html'];
    update_post_meta($post_id, 'html', $html_data);
    
    $css_data = $_POST['css'];
    update_post_meta($post_id, 'css', $css_data);
}