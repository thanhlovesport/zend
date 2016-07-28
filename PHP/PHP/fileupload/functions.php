<?php

function randomString($fileName, $length = 5){
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $arrCharacter = array_merge(range('A','Z'), range('a','z'), range(0,9));
    $arrCharacter = implode($arrCharacter, '');
    $arrCharacter = str_shuffle($arrCharacter);

    echo $result		= substr($arrCharacter, 0, $length) . '.' . $ext;
    return $result;
}
 // check file size
 function checkSize($size, $min, $max){
     $flag = false;
     if ($size >= $min && $size<= $max) $flag = true;
     return $flag;
 }
 
 // check file extensen
 function checkExtension($fileName, $arrExtension){
    $ext = pathinfo($fileName,PATHINFO_EXTENSION);
    $flag = false;
    if(in_array(strtolower($ext), $arrExtension)) $flag = true;
    return $flag;
 }