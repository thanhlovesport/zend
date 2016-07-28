<?php
    require_once 'functions.php';
    $configs = parse_ini_file('config.ini');
    $fileUpload = $_FILES['file-upload'];
   /*  echo '<pre>';
    print_r($fileUpload);
    echo '</pre>';  */
    foreach ($fileUpload['name'] as $key => $value){
        if($value != null){
            $filename = randomString($fileUpload['name'],6);
            $flagsize = checkSize($fileUpload['size'][$key],  $configs['min_size'],  $configs['max_size']);
            $flagExtension = checkExtension($fileUpload['name'], explode('|', $configs['extension']));

            if ($flagsize==true && $flagExtension ==true){
                move_uploaded_file($fileUpload['tmp_name'][$key], './file/'.$filename);
            }
        }
    }
    
    
   
   
   
  
    