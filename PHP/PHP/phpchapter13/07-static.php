<?php

// Static truy cập nhanh biến(thuộc tính) và phương thức mà không cần khởi tạo đối tượng

class Teacher{
    
    static public $magv = 123;
    static private $name = 'abc' ;
    static protected  $ngaysinh = '25/08/1996';
    
    
        static public function showInfo(){
        echo '<br />MaGV: '.Teacher::$magv;
        echo '<br />Tên GV: '. Teacher::$name;
        echo '<br />Ngay Sinh: '.Teacher::$ngaysinh; 
    
    }
    
}
//echo '<br/> MaGV: ' . Teacher::$magv;
Teacher::showInfo();
echo '<br />: MaGV: '.Teacher::$magv;