<?php
   $array = array(
                    array('tinh yeu'=>'Quynh Ai','Van Hoc'=>'Phap'),
                    array('tinh yeu'=>'Khanh Tran','Van Hoc'=>'Anh')
                );
   session_start();
   //session_unset();
   $_SESSION['array']= $array;
   echo '<pre>';
   print_r($_SESSION);
   echo '</pre>';