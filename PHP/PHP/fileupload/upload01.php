<?php
    require_once 'functions.php';
    $fileUpload = $_FILES['file-upload'];
    /* echo '<pre>';
    print_r($fileUpload);
    echo '</pre>'; 
    */
    $filename = randomString($fileUpload['name'],6);
    $flagsize = checkSize($fileUpload['size'], 100 * 1024, 5 * 1024 * 1024);
    $flagExtension = checkExtension($fileUpload['name'], array('png','jpg','mp3','zip'));
    
    if ($flagsize==true && $flagExtension ==true){
          move_uploaded_file($fileUpload['tmp_name'], './file/'.$filename);
    }
    