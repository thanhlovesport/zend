<?php

class Cat{
	
	// Properties
	public $name	= 'Kitty';
	private $color	= 'yellow';
	protected $age	= 1;
}

$catA = new Cat();

echo '<br />Name: ' . $catA->name;
//echo '<br />Color: ' . $catA->color;
//echo '<br />Age: ' . $catA->age;

class Dog{
    public $name = 'lulu';
    public $old = 2;
    public $color = 'brown';
}

$dog = new Dog();

echo '<br/>Name: '.$dog->name;
echo '<br/>Old: '.$dog->old;
echo '<br/>Color: '.$dog->color;