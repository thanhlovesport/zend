<?php
class Phanso {
	// Thuộc tính
	public $_tuso,$_mauso;
	//Hàm xây dựng
	public function __construct($tuso,$mauso){
	    $this->_tuso= $tuso;
	    $this->_mauso = $mauso;
	}
	// Hiển thị phân số
	public function showps(){
	    echo 'Phân Số: '.$this->_tuso.'/'.$this->_mauso.'<br/>';
	}
	// Rút gọn phân số
	public function rutgon(){
	   echo  $ucln = $this->UCLN($this->_tuso, $this->_mauso).'<br/>';
	   $this->_tuso = $this->_tuso/$ucln;
	   $this->_mauso = $this->_mauso/$ucln;
	   
	}
	// Tổng 2 phân số x/y + a/b  [(x*b)+(a*y)]/(y*b)
	public function tongphanso($PHANSO){
	    $this->_tuso = $this->_tuso * $PHANSO->_mauso + $PHANSO->_tuso * $this->_mauso;
	    $this->_mauso = $this->_mauso * $PHANSO->_mauso;
	    $this->rutgon();
	}
	// Hiệu 2 phân số
	public function hieuphanso($PHANSO){
	    $this->_tuso = $this->_tuso * $PHANSO->_mauso - $PHANSO->_tuso * $this->_mauso;
	    $this->_mauso = $this->_mauso * $PHANSO->_mauso;
	    $this->rutgon();
	}
	// Tích 2 phân số
	public function tichphanso($PHANSO){
	    $this->_tuso = $this->_tuso * $PHANSO->_tuso ;
	    $this->_mauso = $this->_mauso * $PHANSO->_mauso;
	    $this->rutgon();
	}
	// Thương 2 phân số
	public function thuongphanso($PHANSO){
	    $this->_tuso = $this->_tuso * $PHANSO->_mauso ;
	    $this->_mauso = $this->_mauso * $PHANSO->_tuso;
	    $this->rutgon();
	}
	// Tìm ước chung lớn nhất
	private function UCLN($a,$b){
	    //$min = ($a > $b) ? $a:$b;
	    $min = min(array($a,$b));
	    while ($min > 0) {
	        if ($a % $min == 0 && $b % $min == 0) return $min;
	        $min--;
	    }
	}
}