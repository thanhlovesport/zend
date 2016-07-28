<?php
 
   session_start();
   $_SESSION['function']= '<?php
                                 function checkNumber($number){
                                         return ($number % 2 == 0)? "Số chắn": "Số lẻ";
                                 }
                            ?>';
  /* echo '<pre>';
  print_r($_SESSION);
  echo '</pre>'; */
  // câu lệnh eval giúp thực thi được các hàm bên trong tag PHP
  eval('?>'.$_SESSION['function']);
  echo checkNumber(8);