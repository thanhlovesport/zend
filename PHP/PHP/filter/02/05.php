<?php
 $value = "127.0.1.9abc";
 
 if (!filter_var($value,FILTER_VALIDATE_IP)){
     echo "<br/> $value - Không là kiểu ID";
 }else{
     echo "<br/> $value -là kiểu ID ";
 }