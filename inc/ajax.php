<?php

function process_user_data(){


    $nonce = $_POST['nonce'];
   $key  =  $_POST['key'];
   $url =   $_POST['url'];
   $id =   $_POST['id'];
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
        wp_die( 'not correct nonce', '', 400 );
    }
    $pt = WP_CONTENT_DIR;
    $variable = strstr($url, '/uploads');

    $thefile = $pt.$variable;
    if(file_exists($thefile)) {
        echo 'in';
        delete_user_meta( $id,$key);
         unlink($thefile);
    }else{
       return;
    }



}
add_action('wp_ajax_send_user_data','process_user_data');
