<?php
class Teacher{
    public $magv = 123;
    public $name = 'abc' ;
    public $ngaysinh = '25/08/1996';

    public function showInfo(){
        echo '<br />MaGV: '.$this->magv;
        echo '<br />Tên GV'.$this->name;
        echo '<br />Ngay Sinh'.$this->ngaysinh;

    }
}
class TeacherMath extends Teacher{
    
}

/*				In Class	Out Class	In Children Class
 * Public		+			+			+
 * Private		+			-			-
 * Protected		+			-			+
 */

$teacher = new Teacher();
$teachermath = new TeacherMath();   
//$teacher->showInfo();
echo '<br />MaGV: '.$teacher->magv;
echo '<br />Tên GV'.$teacher->name;
echo '<br />Ngay Sinh'.$teacher->ngaysinh;
