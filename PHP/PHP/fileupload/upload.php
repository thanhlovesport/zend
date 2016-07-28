<?php
   /*  echo '<pre>';
    print_r($_FILES);
    echo '</pre>'; */
    
    function randomString($length = 5){
    
        $arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
        $arrCharacter = implode($arrCharacter, '');
        $arrCharacter = str_shuffle($arrCharacter);
    
        $result		= substr($arrCharacter, 0, $length);
        return $result;
    }

    
    /* file upload bằng biến file truy cập vào phần tử file upload */
    $fileUpload = $_FILES['file-upload'];
    /* echo '<pre>';
    print_r($fileUpload);
    echo '</pre>'; */
    if($fileUpload['name'] != null){
        $filename = $fileUpload['tmp_name'];
        $random = randomString(6);
        $destination = './file/'.$random.$fileUpload['name'];
       // move_uploaded_file($filename, $destination);
        
        if (copy($filename, $destination)){
            echo 'OK! Success';
        };
    }