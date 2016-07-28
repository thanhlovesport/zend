<?php
   session_start();
   $_SESSION['courses']='PHP Programming';
   $_SESSION['info']= array(
                               'sach' => 'Đắc Nhân Tâm',
                                'ca si'=> 'Le Hiếu'
   );
   /* session_unset(); */
   
   //echo $session = session_encode();
   $session = session_encode();
   session_unset();
   session_decode($session);
   echo '<pre>';
   print_r($_SESSION);
   echo '</pre>';