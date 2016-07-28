<?php
   $array = array(
                    array('name'=>'Quynh Ai', 'age'=>'20'),
                    array('name'=>'Khanh Tran', 'age'=>'22'),
                    array('name'=>'Modric','age'=>29)
                );
   foreach ($array as $value){ // $value chính là các mảng trong mảng con
       echo '<pre>';
       print_r($value);
       echo '</pre>';
       die('Function die have call');
   }