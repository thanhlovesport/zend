<?php
    $course = array(
                        array('id' => 2,'name'=> 'Zend2'),
                        array('id' => 3,'name'=> 'Jquery Master'),
                        array('id' => 4,'name'=> 'Falcon'),
    );
   //$str = 'My game is Fairplay';
   // ma hoa array sang mot chuoi Json de javascript co the lam viec duoc
   // truong hop nay la chuyen courseencode thanh mot chuoi
   echo $courseencode = json_encode($course);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<script type = "text/javascript" src="js/json2.js"> </script>
<script type = "text/javascript">
	var str = '<?php echo $courseencode ?>';
	// de su dung duoc json
	// chuyen mot chuoi json sang mot mang doi tuong
	var myobject = JSON.parse(str);
	console.log(myobject[1].id);
	console.log(myobject[1].name);
</script> 
</head>
<body>

</body>
</html>