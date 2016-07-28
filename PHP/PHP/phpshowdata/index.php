<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Show Data</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>		
<body>
	<div class="container list-quiz">
		<h1 class="page-header">Danh Sách Phim</h1>
		<div id="show-films">
		  <!-- Thẻ div này mình tự tạo để show film ra -->
		  
		</div>
	
		<div class="row">
			<p class="col-md-2 col-md-offset-5">
				<button type="button" class="btn btn-primary btn-block" id="btn-show" onclick="javascript:loadData();">Xem Thêm</button>
			</p>
		</div>
		
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">

		var position = 0;
		$(document).ready(function(){
			$('#show-films').load('loaddata.php',{position: position}) 			// id bắt đầu bằng dấu #
		});
		function loadData(){
			// load-data.php getElements 0 4 : get four element at first
			// load-data.php getElements 4 4
			// load-data.php getElements 8 4
			$.ajax({
					url	: 'loaddata.php',
					type: 'POST',
					data: {position: position + 4},
					success	: function(data){
						if(data.length > 0){
							$('.film-info:last').after(data);
							position += 4;
							$('body').animate({scrollTop: $(document).height()}, 2000);
						}else{
							$('#btn-show').hide();
						}
					}
				});
		}
	</script>
</body>
</html>