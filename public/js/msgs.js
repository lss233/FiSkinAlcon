function getCookie(name){
	var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
	if(arr=document.cookie.match(reg))
	return unescape(arr[2]);
	else
	return null;
}
$(document).ready(function(){
	//Button 	::Start
	$("button").click(
		loadPM ();
	}
	//Button 	::End
	//全局Ajax事件	::Start
	$.ajaxStart(){
		NProgress.start();
	}
	$.ajaxStop(){
		NProgress.done();
	}
	//全局Ajax事件 ::End
	//加载PM ::Start
	function loadPM (){
  	$.post("/FiSkinAlcon/pm/json",{token:getCookie("Fi_Auth")},
  		function(data){  		$.each(data, function(i, msg) {
            $("#PM").append(
            	'<li>'+
            	'    <a herf="#">'+
            	'        <div>'+
            	'            <strong>'+msg.sender+'</strong>'+
            	'            <span class="pull-right text-muted">'+
            	'                <em>'+msg.time+'</em>'+
            	'            </span>'+
            	'        </div>'+
            	'        <div>'+msg.text+'</div>'+
            	'    </a>'+
            	'</li>'
            	);
            )
        }
        };
	}
	//加载PM ::End
	
