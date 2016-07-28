<?php

    // constant: Định nghĩa các biến có giá trị không đổi
    // Truy cập sử dụng ta dùng toán tử ::
   
Class Football{
    public $club = 'Leisecity';
    const club = 'LiverPool';
    public function showInfo(){
        echo  '<br /> Football club : '. $this->club;
        echo  '<br /> Football club : '. Football::club;
        echo  '<br /> Football club : '. self::club;
        
    }
    
}
$footballplayer = new Football();
$footballplayer->showInfo();

