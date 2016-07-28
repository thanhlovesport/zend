<?php
 $value = "phamngocthanh3009@gmail.com";
 if (!filter_var($value,FILTER_VALIDATE_EMAIL)){
     echo "<br/> $value - Không là kiểu email ";
 }else{
     echo "<br/> $value -là kiểu email ";
 }