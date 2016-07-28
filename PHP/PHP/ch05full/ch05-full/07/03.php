<?php
abstract class laptop{
    abstract public function keyboar();
    public function ram(){
    
    }
    public function chipset(){
    
    }
}
class Acer extends laptop{
   /*  public function keyboar(){
        return 'Chất lượng bàn phím máy tính theo tiêu chuẩn Châu Âu';
    } */
    public function keyboar(){
        return 'Bàn phím máy tính theo tiêu chuẩn Châu Âu';
    }
}
class lenovo extends laptop{
    public function keyboar(){
        return 'Bàn phím máy tính theo tiêu chuẩn max level';
    }
}

$acer = new Acer();
$lenovo = new lenovo();
/* $lenovo = new Lenovo();
echo '<pre>';
print_r($lenovo);
echo '</pre>'; */
echo $lenovo->keyboar();