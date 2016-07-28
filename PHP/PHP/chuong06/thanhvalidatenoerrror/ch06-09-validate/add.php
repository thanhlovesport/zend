<?php 
    /* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */
    $result = array(); // Nếu result là một chuỗi rỗng thì sẽ có phần thông báo lỗi trong ô textbox
    $errors = '';
    // thực hiện validate khi mảng $_POST khác rỗng
    if(!empty($_POST)){
        $source = $_POST;
        require_once 'Validate.class.php';
        $validate = new Validate($source);
//         echo '<pre>';
//         print_r($validate);
//         echo '</pre>';
        // Rule
        $validate->addRule('name', 'string', 5, 100)
        ->addRule('age', 'int', 1, 90)
        ->addRule('url', 'url')
        ->addRule('email', 'email');
        // Run
        $validate->run();
        $errors = $validate->showErrors();
        $result = $validate->getResult();
        /* echo '<pre>';
        print_r($errors);
        echo '</pre>'; */
        $xhtml = '';
        if (!empty($errors)){
            $xhtml .= '<ul class = "error">';
              foreach ($errors as $key=>$value){
                  $xhtml.='<li><b>'.$key.': </b>' .$value.'</li>';
              }
             $xhtml .=  '</ul> ';
        }
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP Validate</title>
</head>
<body>
	<div id="wrapper">
    	<div class="title">PHP Validate</div>
        <div id="form">  
            <?php echo $errors ?>
			<form action="#" method="post" name="add-form">
				<div class="row">
					<p>Name</p>
					<input type="text" name="name" value="<?php echo $result['name'];?>">
				</div>
				<div class="row">
					<p>Age</p>
				    <input type="text" name="age" value="<?php echo $result['age'];?>">
				</div>
				<div class="row"> 
					<p>Website</p>
				    <input type="text" name="url" value="<?php echo $result['url'];?>">
				</div>
				<div class="row"> 
					<p>Email</p>
				    <input type="text" name="email" value="<?php echo $result['email'];?>">
				</div>
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
				</div>
			</form>    
        </div>
        
    </div>
</body>
</html>
