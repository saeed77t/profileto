<?php

function process_user_data(){


    $nonce = $_POST['nonce'];
   $key  =  $_POST['key'];
   $url =   $_POST['url'];
   $id =   $_POST['id'];
   $textkey = $_POST['linkkey'];
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) ) {
        wp_die( 'not correct nonce', '', 400 );
    }
    if(isset($textkey) && strlen($textkey) > 2 ){

        $pt = WP_CONTENT_DIR;
        $variable = strstr($url, '/uploads');
        $thefile = $pt.$variable;
        echo 'the file var : ';

        var_dump($thefile);
        echo '<br>';
        if(file_exists($thefile)) {
            echo 'in';
           $one = delete_user_meta( $id,$key);
           var_dump($key);
           echo 'one variable ';
           var_dump($one);
            echo '<br>';
           $two =  unlink($thefile);
            echo 'two variable ';
            var_dump($two);
            echo '<br>';
              $three =   delete_user_meta( $id,$textkey);
            echo 'three variable ';
            var_dump($three);
            echo '<br>';
                echo 'deleted user meta social link ';

        }



    }else{
        $pt = WP_CONTENT_DIR;
        $variable = strstr($url, '/uploads');
        $thefile = $pt.$variable;
        if(file_exists($thefile)) {
            echo 'in';
            unlink($thefile);
            delete_user_meta( $id,$key);
        }

    }




}
add_action('wp_ajax_send_user_data','process_user_data');
