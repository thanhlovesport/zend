/*var itemsPerPage	= 5;
var pages			= 0;
var totalItems		= 0;
var currentPage		= 1;

function init(){
	$.ajax({
		url		: 'load-data.php',
		data	: {type: 'count', items: itemsPerPage },
		type	: 'POST',
		dataType: 'json'
	}).done(function(data){
		pages		= data.pages;
		totalItems	= data.totals;
		
		setPageInfo();

		for(var i = 1; i <= pages; i++){
			$('#slbPages').append('<option value="' + i + '">Page ' + i +'</option>');
		}
		
		loadData();
	});
}

function setPageInfo(){
	$('.pageInfo').text('Page ' + currentPage + ' of ' + pages);
	
	$('#slbPages').val(currentPage);
	
	if(currentPage == 1){
		$('.goPrevious').attr('disabled','disabled');
	}else{
		$('.goPrevious').removeAttr('disabled');
	}
	
	if(currentPage == pages){
		$('.goNext').attr('disabled','disabled');
	}else{
		$('.goNext').removeAttr('disabled');
	}
}


function loadData(){
	$.ajax({
		url		: 'load-data.php',
		data	: {type: 'list', page: currentPage, items: itemsPerPage },
		type	: 'POST',
		dataType: 'json'
	}).done(function(data){
		if(data.length > 0){
			$('.content-course').empty();
			var xhtml = '';
			$.each(data, function(i, val){
				xhtml += '<div class="media">';
				xhtml += 	'<a class="pull-left" href="#">';
				xhtml += 		'<img class="media-object"; src="data/'+ val.image + '">';
				xhtml += 	'</a>';
				xhtml += 	'<div class="media-body">';
				xhtml += 		'<h4 class="media-heading">'+ val.name + '</h4>' + val.description;
				xhtml += 	'</div>';
				xhtml += '</div>';
			});
			$('.content-course').append(xhtml);
		}
	});
}

$(document).ready(function(){

	init();
	
	$('#slbPages').on('change',function(){
		currentPage	= parseInt($(this).val());
		setPageInfo();
		loadData();
	});
	
	$('.goPrevious').on('click',function(){
		if(currentPage != 1){
			currentPage = currentPage - 1;	
			setPageInfo();
			loadData();
		}
	});
	
	$('.goNext').on('click',function(){
		if(currentPage != pages){
			currentPage = currentPage + 1;	
			setPageInfo();
			loadData();
		}
	});	
})*/




$(document).ready(function(){
	//alert(5);	// Do file index nhúng vô nên khi truy cập vào nó sẽ chạy hàm này
	var itemsPerPage = 3;
	var pages		 = 0;
	var totalItems   = 0;
	var currentPage  = 1;
	
	function loadData(){
		$.ajax({
			url:	'loaddata.php', // Gửi đến trang loaddata
			data:   {type: 'list',page: currentPage,items : itemsPerPage}, // Kiểu hiển thị là list, danh sách đó thuộc về trang nào
			type:	'POST',
			dataType: 'json'
		}).done(function(data){
			console.log(data);
			if(data.length > 0){
				$('.content-course').empty(); // Xóa dữ liệu nằm trong class content-course đi
				var xhtml = '';
				$.each(data, function(i,val){
					xhtml +='<div class="media">'; 
					xhtml += '<a class="pull-left" href="#">';
					xhtml += 	'<img class="media-object"; src="data/'+val.image+'">';
					xhtml += '</a>';
					xhtml += '<div class="media-body">';
					xhtml += '<h4 class="media-heading">'+val.name+'</h4>'+ val.description;
					xhtml +=  '</div>';
					xhtml += '</div>';
				});
				$('.content-course').append(xhtml);
			}
		});
	}
	function setSelectbox(){
		$('#currentPage').val(currentPage);
		if(currentPage == 1){ 	// Nếu currentPage là 1 tắt button Previous
			$('.goPrevious').attr('disabled','disabled');
		}else{
			$('.goPrevious').removeAttr('disabled');
		}
		
		if(currentPage == pages){ 	// Nếu currentPage là 1 tắt button Previous
			$('.goNext').attr('disabled','disabled');
		}else{
			$('.goNext').removeAttr('disabled');
		}
	}
	
	$.ajax({
		url:	'loaddata.php', // Gửi đến trang loaddata
		data:   {type: 'count',items: itemsPerPage},
		type:	'POST',
		dataType: 'json'
	}).done(function(data){ // data ở đây dịch theo tiếng Anh nghĩa là dữ liệu, sau khi trang loaddata load hết
		console.log(data);	// In ra dữ liệu bên file data, kiểm tra bên console trên trình duyệt
		pages = data.pages;
		totalIems = data.totalItems;
		
		$('.pageInfo').text('Page '+ currentPage +' of ' + pages) // Jquery truy cập class pageInfo  truy cập vào thuộc tính text
		
		for(var i = 1; i <= pages; i++){
			$('#currentPage').append('<option value = "' + i +'"> Page '+ i +' </option>'); // Jquery truy cập Id, gọi phương thức append() để truyền vào option cho nó
		}
		loadData();
		
		
		//alert(totalIems);
	});
	$('#currentPage').on('change',function(){ 		// Khi Selectbox thay đổi giá trị ta sẽ có function
		// alert ra coi thử vô được hk 
		currentPage = parseInt($(this).val()); 	// Jquery vào currentPage (biến this) lấy giá trị
		$('.pageInfo').text('Page '+ currentPage +' of ' + pages) ;
		loadData();
	});
	$('.goPrevious').on('click',function(){
		if(currentPage != 1){
			currentPage = currentPage - 1;
			$('.pageInfo').text('Page '+ currentPage +' of ' + pages) // Jquery truy cập class pageInfo  truy cập vào thuộc tính text
			setSelectbox();
			loadData();
		}
	});
	$('.goNext').on('click',function(){
		if(currentPage != pages){
			currentPage = currentPage + 1;
			$('.pageInfo').text('Page '+ currentPage +' of ' + pages) // Jquery truy cập class pageInfo  truy cập vào thuộc tính text
			setSelectbox();
			loadData();
		}
	});
});


