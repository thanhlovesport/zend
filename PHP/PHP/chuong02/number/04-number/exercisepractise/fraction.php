<?php 
function UCLN($n1, $n2){
       for($i = 1;$i <= $n1; $i++){
           if ($n1 % $i == 0)
               $uclnn1[]= $i;
       }
       for($i = 1;$i <= $n2; $i++){
           if ($n2 % $i == 0)
               $uclnn2[]= $i;
       }
       // lay ra gia tri vua co mat o n1 va n2
       $temp = array_intersect($uclnn1, $uclnn2);
       $result = max($temp);
       /* echo "<pre>";
       print_r($uclnn1);
       echo "<pre>";
       
       echo "<pre>";
       print_r($uclnn2);
       echo "<pre>";
       
       echo "<pre>";
       print_r($temp);
       echo "<pre>"; */
       return $result;
   }

   function optimizeFraction($fraction){
       // tach chuoi ra mang lay tu va mau so
       $arrfraction = explode("/", $fraction);
       $uocchunglonnhat = UCLN($arrfraction[0], $arrfraction[1]);
       $arrfraction[0] /= $uocchunglonnhat;
       $arrfraction[1] /= $uocchunglonnhat;
       
       return $arrfraction;
   }