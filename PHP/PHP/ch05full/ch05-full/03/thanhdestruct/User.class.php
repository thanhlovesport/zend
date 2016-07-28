<?php 
  Class User{
      private $name;
      private $tuoi;
      private $quequan;
      
      public function __construct(){
          //echo'<br/>'. __METHOD__;
          $this->name = 'messi';
          $this->tuoi = 27;
          $this->quequan = 'Argentina';
      }
      public function __destruct(){
         $_SESSION['Userasian']= serialize($this);
      }
  }