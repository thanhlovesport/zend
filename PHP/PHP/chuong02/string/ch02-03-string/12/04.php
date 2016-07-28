<?php
 $str = "           Messi     is           best       ";
 
 $str = trim($str);
 $array = explode(" ", $str);
 // In ra mảng array sẽ hiểu vì sao thực hiện thao tác bên dưới
 foreach ($array as $key => $value){
     if(trim($value) == null) unset($array[$key]);
 }
 
 $str1 = implode(" ", $array);
 
 echo "Do dai cua chuoi sau khi rut gon la: ".strlen($str1);
 