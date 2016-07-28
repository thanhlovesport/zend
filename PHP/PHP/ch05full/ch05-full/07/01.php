<?php
abstract class laptop{
    public function keyboar(){
        
    }
}
class Acer extends laptop{
    
}
$acer = new Acer();
echo '<pre>';
print_r($acer);
echo '</pre>';

abstract class staff{
    public function inthongtin(){
        
    }
}

class teacher extends staff{
    
}

$teacher = new teacher();
echo '<pre>';
print_r($teacher);
echo '</pre>';