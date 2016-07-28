<?php
$variable = "19";
function checknumber($number){
   $flag = false;
   if($number %2 == 0) $flag = true;
   return $flag;
}
if(!filter_var($variable,FILTER_CALLBACK,array('options'=>'checknumber'))){
    echo 'Số kiểm tra là số lẻ';
}
else{
    echo 'Số kiểm tra là số chẵn';
}