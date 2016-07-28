<?php
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
    public function keyboar(array $color){
        $strcolor = '';
        for ($i=0;$i < count($color);$i++) $strcolor .=$color[$i].' , ';
        $strcolor = rtrim($strcolor,',');
        return $strcolor;
    }
}

$acer = new Acer();

echo $acer->keyboar(array('red','balck','green','blue'));
class lenovo extends laptop{
    public function keyboar(array $color){
        foreach ($color as $key=>$value){
            echo '<br/>'.$key.': '.$value;
        }
    }
}
$lenovo = new lenovo();
$lenovo->keyboar(array('red'=>'màu đỏ','green'=>'màu xanh','white'=>'màu trắng'));
