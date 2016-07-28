function getUrlVar(key){
        	var result = new RegExp(key + "=([^&]*)", "i").exec(window.location.search); 
        	return result && unescape(result[1]) || ""; 
        }
$(document).ready(function(){
   var controller = (getUrlVar('controller')== '') ? "index" : getUrlVar('controller'); // lấy controler
   console.log(controller);
   $('div.header a.'+ controller).addClass('active'); //vào thẻ a class = index hay login gì đó cho active
 });
