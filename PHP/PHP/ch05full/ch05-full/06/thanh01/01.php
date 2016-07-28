<?php
 require_once 'Cat.class.php';
 $CatA = new Cat('Meo',1,'Yellow','1kg');
 
 echo '<hr/><br/>';
 $CatB = clone $CatA;
 $CatB->setName('MeoMeo');
 $CatB->setAge(2);
 $CatB->setColor('White');
 $CatB->showInfo();
 echo '<hr/>';
 $CatA->showInfo();