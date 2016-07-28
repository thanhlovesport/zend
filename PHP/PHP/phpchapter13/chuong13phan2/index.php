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
<?php   // Làm việc với file => in ra biến file
    // print_r($_FILES);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    
    session_start();
    if(!empty($_FILES)){
        
        if ($_SESSION['token'] == $_POST['token']){ // Khi người dùng refesh trang
            unset( $_SESSION['token']);
            header('location: index.php');
            exit();
        }else{
            $_SESSION['token'] = $_POST['token']; // Khi mới vừa vào lưu token vào trong session
        }
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        
        require_once 'class/Upload.class.php';
        $upload = new Upload('file-upload');
        $upload->setFileSize(0, 10000000);
        $upload->setFileExtension(array('jpg','mp4','jpeg','png'));
        $upload->setUploadDir('data/');
       // In ra biến $upload
        
        $message = '';
        if ($upload->isValid() == true){
              $upload->upload();
              $message = 'Success';
        }else{
              $message = $upload->showError();
        }
    }
?>
	<div class="container my-content">
		<h1 class="page-header">PHP OOP - Upload File</h1>
		
		<div class="row">
			<!-- FORM UPLOAD -->
			<form action="#" method="post" id="main-form" name="main-form" class="form-inline" enctype="multipart/form-data">
				<input type="file" id="file-upload" name="file-upload" style="display: none;">
				<a class="btn btn-info" id="select-file" href="#" onclick="javascript:openFile();">Select File</a>
				<input type="hidden" id="token" name="token" value="<?php echo time();?>">
				<button type="submit" class="btn btn-primary" disabled="disabled">Upload</button>
			</form>  
		</div>
		<!-- ERROR -->
		<?php echo $message; ?>
			
		<div class="row content-course">
			
			
			<?php 
			     require_once 'list.php';
			?>
			
			
		</div>
		
		<!-- POPUP -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-body">
					   
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function openFile(){
			$('#file-upload').click(); 
			return false;
		}
		function loadImage(){
			$('div.content-course').load('list.php'); // dấu . đại diện cho class
		}
		function showImagebig(imagesrc){
			$('div.content-course').load('list.php'); // dấu . đại diện cho class
			var image = imagesrc.replace('125-','450-');
			$('#myModal .modal-body').html('<img src="'+image+'"/>');
			// alert(imagesrc);
		}
		function deleteImage(imagesrc){
			$.ajax({
				url		: 'delete.php',
				type	: 'POST',
				data	: {imagesrc : imagesrc},
				success : function(data){
					//loadImage();	// Cập nhật lại các hình ảnh nằm trong folder data
					// vô class col-md-2 vào tiếp thumbnai vô img sau đó remove class ở trên
					$('div.col-md-2 .thumbnail img[src="'+imagesrc+'"]').parent().parent().remove();
				}
			});
		}
		$(document).ready(function(){
			$('#file-upload').on('change',function(){// Khi file-upload cÃ³ sá»± thay Ä‘á»•i
				var filename = this.value.split('\\').pop();	// Cáº¯t xong láº¥y pháº§n tá»­ cuá»‘i cÃ¹ng
				$('a#select-file').text(filename); // Thay Ä‘á»•i text cho select file
				$('button[type="submit"]').removeAttr('disabled');
			}) 
		});
	</script>
</body>
</html>