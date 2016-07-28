<?php
 $value = "88";
 $int_option = array("options"=>array("min_range"=>5,"max_range"=>100));
 if (!filter_var($value,FILTER_VALIDATE_INT,$int_option)){
     echo "<br/> $value - Không là kiểu số nguyên ";
 }else{
     echo "<br/> $value -là kiểu số nguyên ";
 }