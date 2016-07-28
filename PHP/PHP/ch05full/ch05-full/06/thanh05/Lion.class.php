<?php
    
    class Lion{
        private $info;
       
        
        public function __construct($name = 'Doraemon',$age = 5){
            $this->name = $name;
            $this->age = $age;
        }
        
        public function __set($name,$value){
            return $this->info[$name]=$value;
        }
        public function __get($name){
            return $this->info[$name];
        }
        public function showinfo(){
            echo 'Name: '. $this->name;
            echo '<br/> Age: '. $this->age;
        }
    }