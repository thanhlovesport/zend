/**
 * 
 */
// khai bao ten form can thao tac
var formID = '#contact-form';

// khai bao vung hien thi du lieu
var formMessage = '#content-load'
	
// khai bao cau hinh
	var optionals = {
						target : formMessage,
						dataType: 'json',
						success	: processData
		
					};
function processData(data){
	if(data.type == undefined){
		$(formMessage).html('Có lỗi xảy ra trong quá trình xử lý').addClass('error');
	}else{
		if(data.type == 'success'){
			$(formMessage).html('Thành công').removeClass().addClass('success');
			$(formID).resetForm(); // sau khi save resert lai form
		}else{
			console.log(data.message);
			var error = '';
			for(x in data.message){
				error += data.message[x] + '<br />';
				$('input[name="' + x + '"]').val(''); // jquery truy cap vao o input
			}
			$(formMessage).html(error).removeClass().addClass('error');
		}
	}
}
$(document).ready(function(){
	$(formID).submit(function(){
		$(this).ạjaxSubmit(optinonals: formMessage);
	}); // jqueryformID su kien submit
})  ;