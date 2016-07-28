<?php
 $value = "http://www.zing.vn";
 
 if (!filter_var($value,FILTER_VALIDATE_URL)){
     echo "<br/> $value - Không là kiểu URL";
 }else{
     echo "<br/> $value -là kiểu URL ";
 }