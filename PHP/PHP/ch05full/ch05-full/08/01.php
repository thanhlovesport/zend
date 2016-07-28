<?php
interface people{
    public function eat();
    public function sleep();
}
interface animal{
    public function run();
}
class Lion{
    public function shout(){
        echo '<br/>'.__METHOD__;
    }
}
class supermen extends Lion implements people,animal{
    public function eat(){
        echo '<br/>'.__METHOD__;
    }
    public function sleep(){
        echo '<br/>'.__METHOD__;
    }
    public function run(){
        echo '<br/>'.__METHOD__;
    }
}
$supermen = new supermen();
$supermen->eat();
$supermen->run();
$supermen->shout();