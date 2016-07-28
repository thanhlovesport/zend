<?php
    session_start();
   if (isset($_SESSION['name'])){
       echo 'Session đã tồn tại';
   }else {
       echo 'Session chưa tồn tại';
   }