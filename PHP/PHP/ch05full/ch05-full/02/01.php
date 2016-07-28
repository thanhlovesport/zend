<?php

 class Cat{
	
	// Properties
	var $name	= 'Kitty';
	var $color	= 'yellow';
	var $age	= 1;
	
}

$catA = new Cat();

echo '<br />Name: ' . $catA->name;
echo '<br />Color: ' . $catA->color;
echo '<br />Age: ' . $catA->age;

echo "<br/>";
class Dog{

    // Properties
    protected   $name	= 'Kis';
    protected  $color	= 'yellow';
    protected  $age	= 1;
}

$dog = new Dog();

echo '<br />Name: ' . $dog->name;
echo '<br />Color: ' . $dog->color;
echo '<br />Age: ' . $dog->age;



/* class guitar{
    var $type = 'accountic';
    var $price = 2000000;
    var $color = 'black';
}
$guitar = new guitar();
/* echo '<pre>';
print_r($guitar);
echo '</pre>'; */
// Lấy từng thuộc tính của lớp
/* echo '<br/> Type: '.$guitar->type;
echo '<br/> Price: '.$guitar->price;
echo '<br/> Color: '.$guitar->color; */ 