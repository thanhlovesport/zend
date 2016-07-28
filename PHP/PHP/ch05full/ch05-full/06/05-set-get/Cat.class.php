<?php
class Cat {
	
	private $name;
	private $age;
	
	public function __construct($name = 'Doremon', $age = 2){
		$this->name = $name;
		$this->age = $age;
	}
	
	public function __set($name, $value){
		return $this->$name = $value;
	}
	
	public function __get($name){
		return $this->$name ;
	}
	public function hkten(){
	    echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

	}
	public function showInfo(){
		echo 'Name: ' . $this->name;
		echo '<br />Age: ' . $this->age;
		$this->hkten();
	}
}