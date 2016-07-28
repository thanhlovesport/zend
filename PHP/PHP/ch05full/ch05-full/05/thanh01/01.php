<?php

class toanhoc{
    public $diemA = 'A';
    protected $diemB = 'B';
    private $diemC = 'C';
    
    public function showinfo(){
        echo '<br/> Truy cập Trong lớp:  ';
        echo '<br/> public $diemA: '.$this->diemA;
        echo '<br/> protected $diemB: '.$this->diemB;
        echo '<br/> privated $diemC: '.$this->diemC;
    }
}
class toanhoc2 extends toanhoc{
    public function showinfo(){
        echo '<br/> Truy cập Trong lớp Con:  ';
        echo '<br/> public $diemA: '.$this->diemA;
        echo '<br/> protected $diemB: '.$this->diemB;
        echo '<br/> privated $diemC: '.$this->diemC;
    }
}
$toanhoc = new toanhoc();
$toanhoc2 = new toanhoc2();
/* echo '<br/> Truy cập ngoài lớp:  ';
echo '<br/> public $diemA: '.$toanhoc->diemA;
echo '<br/> protected $diemB: '.$toanhoc->diemB;
echo '<br/> privated $diemC: '.$toanhoc->diemC;  */

echo '<hr/>';
$toanhoc->showinfo();
$toanhoc2->showinfo();
