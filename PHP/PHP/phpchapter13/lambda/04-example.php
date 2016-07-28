<?php
    $input =    array(1,2,3,4,5,6,7,8);
    
   /* Case 01 
    * $output = array();
    foreach($input as $value){
        if($value > 5){
            $output[] = $value;
        }
    } */
    
    /*  Case 02
     *  function compare($value){
        return ($value > 5);
    }
    
    $output = array_filter($input,compare); */ // Lọc ra các phần tử của một mảng sử dụng hàm đã được định nghĩa
    
   /* Case 03 
    * $compare = function ($value){
        return ($value > 5);
        
    };
    $output = array_filter($input,$compare); */
    
    // Case 04
    /*
    $output = array_filter($input,function($value){return ($value > 5);});
    */
    
    // Case 05
    $compare = function($max){
        return function($value) use($max){
          return $value > $max;
        };
    };
    $output = array_filter($input,$compare(4));
    echo '<pre>';
    print_r($output);
    echo '</pre>';
    
    
    
    
    
    
    
    