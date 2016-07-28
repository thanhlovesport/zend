<?php
 $x = false;
 if (!filter_var($x,FILTER_VALIDATE_BOOLEAN)){
     echo "<br/> $x - Không là kiểu boolean ";
 }else{
     echo "<br/> $x -là kiểu boolean ";
 }