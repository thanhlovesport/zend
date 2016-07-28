<?php
$variable = "Pham Ngoc Thanh";
function ConvertString($string){
    $string = str_replace(' ', '_', $string);
    return  $string;
}
echo filter_var($variable,FILTER_CALLBACK,array('options'=>'ConvertString'));