<?php 

class Student{
		
	private $country;
	protected $name;
	
	public function __construct($countryValue = 'American', $nameValue = 'Peter Brown'){
		$this->country		= $countryValue;
		$this->name			= $nameValue;
	}
	
	public function __get($property){ // Giúp ngoài class có thể truy cập các thuộc tính private, protected trong class
	    $result = strtoupper($this->$property);
	    
	    return $result;
	}
	public function __set($propertyName,$propertyValue){ // Có thể cho ngoài class thay đổi các thuộc tính bên trong
	    $this->$propertyName = $propertyValue;
	    
	}
}

$student = new Student();
$student->name = 'Lucas Silva';
// echo $student->name;

echo '<pre>';
print_r($student);
echo '</pre>';

