<?php
abstract class laptop{
    public function keyboar(){
        return 'Bàn phím máy tính theo tiêu chuẩn Châu Âu';
    }
    public function ram(){
    
    }
    public function chipset(){
    
    }
}
class Acer extends laptop{
    public function keyboar(){
        return 'Chất lượng bàn phím máy tính theo tiêu chuẩn Châu Âu';
    }
}
class Lenovo extends laptop{
    public function ram(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

    }
}
$acer = new Acer();
/* $lenovo = new Lenovo();
echo '<pre>';
print_r($lenovo);
echo '</pre>'; */
echo $acer->keyboar();
$lenovo = new Lenovo();
$lenovo->ram();