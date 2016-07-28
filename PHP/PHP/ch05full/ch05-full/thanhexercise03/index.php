<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content" style="text-align: left;">
		<h1>PHP OOP</h1>
		<?php 
		  require_once 'phanso.class.php';
		  $ps1 = new Phanso(2, 3);
		  $ps2 = new Phanso(4, 5);
		  //$ps1->tongphanso($ps2);
		  //$ps1->showps();
		  //$ps1->hieuphanso($ps2);
		  //$ps1->showps();
		  //$ps1->tichphanso($ps2);
		  //$ps1->showps();
		  $ps1->thuongphanso($ps2);
		  $ps1->showps();
		  
		  
		  
		  
		  
		  
		 /*  $phanso = new Phanso(10, 15);
		  echo $phanso->showps();
		  echo $phanso->rutgon();
		  echo $phanso->showps();
		  
		  echo '<pre>';
		  print_r($phanso);
		  echo '</pre>'; */
		?>
	</div>
</body>
</html>