<?php
require_once 'Cat.class.php';
Class Lion extends Cat {
    public $maxspeed = '60km/h';
    

    public function showInfo(){
       /*  echo '<br />Name: ' . $this->getName();
        echo '<br />Age: ' . $this->getAge();
        echo '<br />Color: ' . $this->getColor();
        echo '<br />Weight: ' . $this->getWeight();
        echo '<br />Max speed : ' . $this->maxspeed; */
        parent::showInfo();
        // hoặc ta có thể:
        echo '<br />Name: ' . parent::getName();
        echo '<br />Age: ' . parent::getAge();
        echo '<br />Color: ' . parent::getColor();
        echo '<br />Weight: ' . parent::getWeight();
        echo '<br />Max speed : ' . $this->maxspeed;
        echo'<br/> Chứng thực ';
    }
}