<?php
 $value = "abcd";
 if (!filter_var($value,FILTER_VALIDATE_FLOAT)){
     echo "<br/> $value - Không là kiểu float ";
 }else{
     echo "<br/> $value -là kiểu float ";
 }