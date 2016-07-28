<?php

class Cat{
	
	// Properties
	public $name;
	public $color ;
	public $age  ;
	// function đặt trong class là phương thức của class đó
	// method
	public function __construct(){
	    echo __METHOD__;
	    $this->name= 'meo meo';
	    $this->color='white';
	    $this->age = 1;
	}
	public function  getname(){
	    return $this->name;
	}
	public  function getcolor() {
	  /*   $this như là đối tượng con mèo
	    echo '<pre>';
	    print_r($this);
	    echo '</pre>'; */
	    return $this->color;
	}
	public function  getage(){
	    return $this->age;
	}
	public function setname($value){
	    $this->name=$value;
	}
	public function setcolor($value){
	    $this->color=$value;
	}
	public function setage($value){
	    $this->age=$value;
	}
	public function showinfo(){
	    echo '<br/> Name:  '.$this->getname();
	    echo '<br/> Color:  '.$this->getcolor();
	    echo '<br/> Age:  '.$this->getage();
	}
}

