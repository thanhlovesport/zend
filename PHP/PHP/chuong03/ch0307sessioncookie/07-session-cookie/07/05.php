<?php
$array1 = range(0, 5);
echo '<pre>';
print_r($array1);
echo '</pre>';
$array2 = range('a','e');
echo '<pre>';
print_r($array2);
echo '</pre>';
$arraycharacter = array_merge($array1,$array2);
echo '<pre>';
print_r($arraycharacter);
echo '</pre>';
echo time();
echo "<br/>";
echo 20 + time();
