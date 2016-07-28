<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" type = "text/css" href = "css/style.css">
</head>
<body>
	<div class = "content">
		<h1> PHP Upload </h1>
		<!-- form nêu quá trình xử lí và dữ liệu của ta được truyền đến file nao  -->
		<!-- bổ sung upload thì bổ sung thuộc tính enctype -->
		<form action ="upload03.php" method ="post" name = "main-form" id = "main-form" enctype = "multipart/form-data">
			<input type = "file" name = "file-upload[]" />
			<input type = "file" name = "file-upload[]" />
			<input type = "file" name = "file-upload[]" />
			<input type = "submit" value = "Submit" name = "submit"/>
		</form>
	</div>
</body>
</html>