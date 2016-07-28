<?php 

class Student{
		
	public $code;
	public $name;
	public $birthday;

	public function __construct($codeValue = '123456', $nameValue = 'Peter Brown', $birthdayValue = '12/05/1989'){
		$this->code		= $codeValue;
		$this->name		= $nameValue;
		$this->birthday	= $birthdayValue;
	}
	public function __toString(){
	    $xhtml = '<br/> Name: '.$this->name;
	    $xhtml .= '<br/> Code: '.$this->code;
	    $xhtml .= '<br/> Birthday: '.$this->birthday;
	    
	    return  $xhtml;
	}
	
}

$student = new Student();
echo $student;



