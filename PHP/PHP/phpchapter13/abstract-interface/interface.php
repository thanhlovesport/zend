<?php
interface People{
    public function eat();
    public function sleep();
}

interface Bird{
    public function fly();
}
class soilder{
    public function fight(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;

    }
}
// Interface: lớp kế thừa từ interface, cho phép kế thừa nhiều interface, bắt buộc phải định nghĩa
// tất cả các phương thức có trong tất cả các interface
class Superman extends soilder implements People,Bird{
    public function eat(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;

    }
    public function sleep(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
    }
    public function fly(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;

    }
}
$superman = new Superman();
$superman->eat();
$superman->sleep();
$superman->fly();
$superman->fight();