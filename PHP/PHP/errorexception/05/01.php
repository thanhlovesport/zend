<?php
    function myError($error_level, $error_message, $error_file, $error_line, $error_context){
        echo '<pre>';
        print_r($error_message);
        echo '</pre>';
        
        /* $result = '<b>Error number<b/>'.$error_level;
        $result.= '<br/><b>Error message  <b/>'.$error_message.' '; */
        
        $result[] = '<b>Error number<b/>'.$error_level;
        $result[]= '<br/><b>Error message  <b/>'.$error_message;
        $result[]= '<br/><b>Error FIle  <b/>'.$error_file;
        $result = implode('<br/>', $result);
        die($result);
    }
    set_error_handler('myError');
    echo $data;