<?php
require_once 'Lion.class.php';
$arrayinfo = array(
                        'name'=>'Sư Tử Đỏ',
                        'color'=>'Vàng',
                        'age'  =>2,
                        'weight'=>'85kg'
                   );
$lionA = new Lion($arrayinfo);

echo '<pre>';
print_r($lionA);
echo '</pre>';
echo '<br/> Phần in ra showinfo'.'<hr/>';
echo $lionA->showInfo();