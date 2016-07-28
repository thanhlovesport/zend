<?php
class Teacher{
    public $name;
    public $age;
    public $old;
    
    public function getname(){
        return $this->name;
    }
    public function getage(){
        return $this->age;
    }
    public function getold(){
        return $this->old;
    }
    public function setname($value){
        $this->name = $value;
    }
    public function setage($value){
        $this->age = $value;
    }
    public function  setold($value){
        $this->old = $value;
    }
    
    public function __construct($arrinfo){
        $this->name = $arrinfo['name'];
        $this->age  = $arrinfo['age'];
        $this->old  = $arrinfo['old'];
    }
    
    public function showinfo(){
        echo "<br/>Name: ".$this->getname();
        echo "<br/>Age: ".$this->getage();
        echo "<br/>Old: ".$this->getold();
        
    }
}