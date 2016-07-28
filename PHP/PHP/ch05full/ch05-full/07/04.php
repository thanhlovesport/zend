<?php
abstract class laptop{
    abstract public function keyboar($color);
    public function ram(){
    
    }
    public function chipset(){
    
    }
}
class Acer extends laptop{
   /*  public function keyboar(){
        return 'Chất lượng bàn phím máy tính theo tiêu chuẩn Châu Âu';
    } */
    public function keyboar($color = 'black'){
        return 'Color of the keyboard: '.$color;
    }
}
class lenovo extends laptop{
    public function keyboar($color = 'White'){
        return 'Bàn phím máy tính theo tiêu chuẩn max level';
    }
}
$acer = new Acer();
$lenovo = new lenovo();
/* $lenovo = new Lenovo();
echo '<pre>';
print_r($lenovo);
echo '</pre>'; */
echo $acer->keyboar();
// Truyền theo dạng mảng
/* <?php
abstract class laptop{
    abstract public function keyboar(array $color);
    public function ram(){

    }
    public function chipset(){

    }
}
class Acer extends laptop{
    /*  public function keyboar(){
     return 'Chất lượng bàn phím máy tính theo tiêu chuẩn Châu Âu';
     } */
  /*   public function keyboar(array $color){
        return 'Color of the keyboard: '.$color;
    } */
/* }
class lenovo extends laptop{
    public function keyboar(array $color){
        return 'Bàn phím máy tính theo tiêu chuẩn max level';
    }
}
$acer = new Acer();
$lenovo = new lenovo(); */
/* $lenovo = new Lenovo();
 echo '<pre>';
 print_r($lenovo);
echo '</pre>'; */
echo $acer->keyboar('white');
 