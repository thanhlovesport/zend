<?php 
    $cssURL = PUBLIC_URL.DS.'css'.DS;
    $jsURL = PUBLIC_URL.DS.'js'.DS;
    Session::init();
    
    $menu = '<a class = "index" href = "index.php?controller=index&action=index">Home </a>';
    if(Session::get('loggedIn') == true){ // nếu lấy đúng giá trị => menu sẽ được nối thêm
        $menu.= ' <a class = "group" href = "index.php?controller=group&action=index">Group </a>';
        $menu.= ' <a class = "user" href = "index.php?controller=user&action=logout">Logout </a>';
    }else {
        $menu .= '<a class = "user" href = "index.php?controller=user&action=login">Login </a>';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Insert title here</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssURL?>style.css">
    <script type="text/javascript" src = "<?php echo $jsURL?>jquery.js"></script>
    <script type="text/javascript" src = "<?php echo $jsURL?>custom.js"></script>
    <script type="text/javascript">
        
    </script>
</head>
<body>
    <div class = "wrapper">
        <div class = "header">
         <h3>Header</h3>
         <?php echo $menu ;?>         
         
         <a href = "">Register </a>
         
         </div> 