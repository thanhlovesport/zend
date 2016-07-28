<?php

// Class miêu tả cái gì đó chung chung, object miêu tả cái gì đó cụ thể
class Teacher{
    public $magv = 123;
    public $name = 'abc' ;
    public $ngaysinh = '25/08/1996';
    
    public function setmagv($value){
        $this->magv = $value;       // $this ở đây là lớp Teacher
    }
    public function setname($value){
        $this->name = $value;       // $this ở đây là lớp Teacher
    }
    public function setngaysinh($value){
        $this->ngaysinh = $value;       // $this ở đây là lớp Teacher
    }
    public function showInfo(){
        echo '<br />MaGV: '.$this->magv;
        echo '<br />Tên GV'.$this->name;
        echo '<br />Ngay Sinh'.$this->ngaysinh;
        
    }
    
    // Case 01
   /*  public function __construct(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
        $this->magv = 'tiki';
        $this->name = 'Tran Xuan Soan';
        $this->ngaysinh = '25/06/1998';
    } */
    // Case 02
   /*  public function __construct($magv,$name,$ngaysinh){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
        $this->magv = $magv;
        $this->name = $name;
        $this->ngaysinh = $ngaysinh;
    } */
    // Case 03
   /*  public function Teacher($arrInfo = array('magv'=>'Axon','tengv'=>'Tran Thu Ha','ngaysinh'=>'15/06/1990')){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
        $this->magv = $arrInfo['magv'];
        $this->name = $arrInfo['tengv'];
        $this->ngaysinh = $arrInfo['ngaysinh'];
    } */
    
    // Case 04
    public function __construct($arrInfo = array('magv'=>'Axon','tengv'=>'Tran Thu Ha','ngaysinh'=>'15/06/1990')){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;
        $this->magv = $arrInfo['magv'];
        $this->name = $arrInfo['tengv'];
        $this->ngaysinh = $arrInfo['ngaysinh'];
    }
    
    public function __destruct(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__;

    }
    
    
    
    
    
    
    
    
    
}