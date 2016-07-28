
$(document).ready(function(){
	$('#cancel-button').click(function(){ // click cho selector nao, su kien nao ?
		window.location = 'index.php';
	});
	
	$('#multy-delete').click(function(){
		$('#main-form').submit();
	});
	
	$('#check-all').change(function(){
		var checkStatus = this.checked; // this day la phan checkall, thuong mang 2 gia tri:true false
		$('#main-form').find(':checkbox').each(function(){ // tim tat ca checkbox co trong mainform
			this.checked = checkStatus;
		});
	});
	
	$('.success, .notice, .error').click(function() { // viết cho các đối tượng và sự kiện là click
		 $(this).toggle("slow");
	});
});
