<?php
   // error_reporting(0); // tắt thông báo lỗi
    //ini_set('error_reporting', 0); // tắt thông báo lỗi
    //error_reporting(E_ALL);//Hiển thị tất cả thông báo lỗi
   // error_reporting(E_WARNING);
    error_reporting(E_NOTICE); // Chỉ hiển thị notice
    foreach ($array as $key => $value){
        echo $html.= $value;
    }