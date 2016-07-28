<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>PHP FILE - ADD</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> <!-- Nhúng đến tập tin js -->
<script type="text/javascript">
	$(document).ready(function(){
		/* aler('test'); in giá trị nào đó ra để kiểm tra */
		/* Lấy id của button cancel trỏ đến index */
		$('#cancel-button').click(function(){
			window.location = 'index.php';
		});
	});
</script>
</head>
<body>
<?php
	require_once 'functions.php';
	
	$flag	= false;
	if(isset($_POST['title']) && isset($_POST['description'])){
		$title			= $_POST['title'];
		$description	= $_POST['description'];
		
		// Error Title
		$errorTitle = '';
		if(checkEmpty($title)) 			$errorTitle = '<p class="error">Dá»¯ liá»‡u khÃ´ng Ä‘Æ°á»£c rá»—ng</p>';
		if(checkLength($title, 5, 100)) $errorTitle .= '<p class="error">TiÃªu Ä‘á»� dÃ i tá»« 5 Ä‘áº¿n 100 kÃ½ tá»±</p>';
		
		// Error Description
		$errorDescription = '';
		if(checkEmpty($description)) 			$errorDescription = '<p class="error">Dá»¯ liá»‡u khÃ´ng Ä‘Æ°á»£c rá»—ng</p>';
		if(checkLength($description, 10, 5000)) $errorDescription .= '<p class="error">Ná»™i dung dÃ i tá»« 10 Ä‘áº¿n 5000 kÃ½ tá»±</p>';
		
		
		// A-Z, a-z, 0-9: AzG09
		if($errorTitle == '' && $errorDescription == ''){
			$data	= $title . '||' . $description;
			
			$name = randomString(5);
			$filename	= './files/' . $name . '.txt';
			if(file_put_contents($filename, $data)){
				$title			= '';
				$description	= '';
				$flag			= true;
			}
		}
		
	} 
?>
	<div id="wrapper">
    	<div class="title">PHP FILE - ADD</div>
        <div id="form">   
			<form action="#" method="post" name="add-form">
				<div class="row">
					<p>Title</p>
					<input type="text" name="title" value="<?php echo $title;?>">
					<?php echo $errorTitle; ?>
				</div>
				
				<div class="row">
					<p>Description</p>
					<textarea name="description" rows="5" cols="100"><?php echo $description;?></textarea>
					<?php echo $errorDescription?>
				</div>
				
				<div class="row">
					<input type="submit" value="Save" name="submit">
					<input type="button" value="Cancel" name="cancel" id="cancel-button">
				</div>
				
				<?php
					if($flag==true) echo '<div class="row"><p>Dá»¯ liá»‡u Ä‘Ã£ Ä‘Æ°á»£c ghi thÃ nh cÃ´ng!</p></div>'; 
				?>
								
			</form>    
        </div>
        
    </div>
</body>
</html>
