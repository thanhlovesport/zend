<?php
class Playstation{
    private $game;
    public function __construct($objgame){
        $this->game = $objgame;
      /*   switch ($type){
            case 'contra':
                $this->game = new Contra();
                break;
            case 'flappybird':
                $this->game = new FlappyBird();
                
                break;
             default:
                 $this->game = new FiFa();
        } */
    }
    public function setgame($objgame){
        $this->game = $objgame;
    }
    public function play(){
        echo 'Playing';
    }
}
$fifa = new FiFa();
$mario = new Mario();
$playstation = new Playstation($fifa);
$playstation->setgame($fifa);


$playstation->play();