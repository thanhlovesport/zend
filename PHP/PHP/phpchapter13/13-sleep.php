<?php

class Student{

	public $code;
	public $name;
	public $birthday;

	// Case 01
	public function __construct($codeValue = '123456', $nameValue = 'Peter Brown', $birthdayValue = '12/05/1989'){
		$this->code		= $codeValue;
		$this->name		= $nameValue;
		$this->birthday	= $birthdayValue;
	}
	
	public function __sleep(){ // Trả về một mảng chứa thông tin mà serialize tạo ra   
		return array('code'); // Trường hợp này khi in ra chuỗi serialize chỉ có code
	}
	
	public function __wakeup(){    // Ảnh hưởng đến phương thức unserialize
		$this->birthday	=	'12/12/2012';
		$this->name		=	'jonh Smith';
		$this->code		=	'111';
	}
}

$student	= new Student();
echo '<pre style="color:red;font-weight:bold">';
print_r($student);
echo '</pre>';

echo $strObject	= serialize($student);

$object			= unserialize($strObject);
echo '<pre style="color:red;font-weight:bold">';
print_r($object);
echo '</pre>';