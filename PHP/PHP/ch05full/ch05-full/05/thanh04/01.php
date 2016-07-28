<?php
class example{
    const money = 15000;
    public $money = 'This is not true a test';
    // hiển thị biến constant trong hàm:
    public function showinfo(){
        echo '<h2> C1:'.example::money.'</h2>';
        echo '<h2> C2:'.self::money.'</h2>';
        echo '<h2> C3:'.$this::money.'</h2>';
    }
}
$example = new example();
echo $example->money;
echo '<br/>';
echo $example::money;
echo '<br/>';
echo example::money;
echo '<br/>';
echo $example->showinfo();
