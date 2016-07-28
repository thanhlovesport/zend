<?php
class example{
    static $a = 1000;
    static public function showinfor(){
        echo 'show info';
    }
}
/* $example = new example();
echo example::$a;
echo '<hr/>';
$example->showinfor(); */
    example::showinfor();