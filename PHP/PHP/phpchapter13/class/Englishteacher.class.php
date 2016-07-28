<?php
    require_once 'Teacher.class.php';

class EnglishTeacher extends Teacher{
    public $salary = 10000000;
    public function showInfo(){
        $this->magv = 'Silva';
        echo '<br />MaGV: '.$this->magv;
        echo '<br />Tên GV'.$this->name;
        echo '<br />Ngay Sinh'.$this->ngaysinh;
        echo '<br />Mức Lương'.$this->salary;
    }
}