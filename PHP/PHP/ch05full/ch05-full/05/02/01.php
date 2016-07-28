<?php

class Sample{
	static $a = 1000;
	
	static public function showInfo(){
		echo '<h3>showInfo</h3>';
	} 
}

/*
$sample = new Sample();
echo 'Static $a: ' . Sample::$a;
$sample->showInfo();
*/

Sample::showInfo();
echo Sample::$a;

Class hamstatic{
    static $deptrai = 'co gi sai';
    static public function inthongtin(){
        echo '<h3 style = "color:red;font-weight:bold">'. __METHOD__.'</h3>';

    }
}

echo "<br/> Dep trai ".hamstatic::$deptrai;
echo "<br/>".hamstatic::inthongtin();