<?php 
   require_once 'Upload.class.php';
   $upload = new Upload('file-upload');
   
   $upload->setfileextension(array('7z','png','jpg'));
   $upload->setfilesize(102440, 52428800);
   $upload->setuploaddir('./files/');
   
   if ($upload->isVail()==false){
       $upload->Upload();
   }else {
       $upload->showerror();
   }
?>