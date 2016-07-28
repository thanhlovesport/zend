<?php

class Cat{
	
	// Properties
	public $name;
	public $color ;
	public $age  ;
	// function đặt trong class là phương thức của class đó
	// method
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
}

$catA = new Cat();
/* echo '<br/> Name: '.$catA->name;
echo '<br/> Color:'.$catA->getcolor(); */
// cho con mèo một cái tên
$catA->setname('Meo');
$catA->setcolor('yellow');
$catA->setage(1);
echo '<br/> Name:  '.$catA->getname();
echo '<br/> Color:  '.$catA->getcolor();
echo '<br/> Age:  '.$catA->getage();

$catB = new Cat();

$catB->setname('Moon');
$catB->setcolor('White');
$catB->setage(1);
echo '<br/> Name:  '.$catB->getname();
echo '<br/> Color:  '.$catB->getcolor();
echo '<br/> Age:  '.$catB->getage();













