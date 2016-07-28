<?php
   require_once 'fraction.php';
   $fraction1 = "4/6";
   $fraction2 = "2/4";
   
   echo "<hr/> Input <br />";
   echo "Phan so 1: " . $fraction1."<br/>";
   echo "Phan so 2: " .$fraction2."<br/>";
   
   $fraction1 = optimizeFraction($fraction1);
   $fraction2 = optimizeFraction($fraction2);
   
   echo "<hr/> Toi Gian <br/>";
   echo "Phan so 1: " . implode("/", $fraction1);
   echo "<br/>";
   echo "Phan so 2: " . implode("/", $fraction2);
   
   echo "<hr/> Nhan hai phan so <br/>";
   $phansotich[0] = $fraction1[0]*$fraction2[0];
   $phansotich[1] = $fraction1[1]*$fraction2[1];
   
   echo "Tich hai phan so: ".implode("/", $phansotich);
   $phansotich = implode("/", $phansotich);
   $phansotich = optimizeFraction($phansotich);
   echo "<br/>Tich toi gian hai phan so".implode("-", $phansotich);
   echo "<br/>".rand(10, 18);