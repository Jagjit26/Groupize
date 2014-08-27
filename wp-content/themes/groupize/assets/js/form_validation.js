// JavaScript Document
$(document).ready(function() {
	
	$(".fade_back,.close").click(function(){
		$(".fade_back,.pop_up_container,.pop_up_container > div").fadeOut(500);
	});
	
	
	$("#send_form").click(function(){
		var whitespace=/^\s*$/;
		var reg_email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		
		if($("#name").val()=='' || whitespace.test($("#name").val()))
		{
			$(".validation_error_div p").hide();
			$(".validation_error_div,#err_name").show();
			return false;
		}
		if($("#email").val()=='' || whitespace.test($("#email").val()))
		{
			$(".validation_error_div p").hide();
			$(".validation_error_div,#err_email1").show();
			return false;
		}
		if(!reg_email.test($("#email").val()))
		{
			$(".validation_error_div p").hide();
			$(".validation_error_div,#err_email2").show();
			return false;
		}
		if($("#subject").val()=='' || whitespace.test($("#subject").val()))
		{
			$(".validation_error_div p").hide();
			$(".validation_error_div,#err_subject").show();
			return false;
		}
		if($("#message").val()=='' || whitespace.test($("#message").val()))
		{
			$(".validation_error_div p").hide();
			$(".validation_error_div,#err_message").show();
			return false;
		}
		send_form_data();
	});
	
	var send_form_data=function(){
	
	$(".fade_back").fadeIn(100);
	$(".pop_up_container > div").hide();
	$(".pop_up_container,#loading").fadeIn(200);
	$(".pop_up_container .close").fadeIn(200).delay(200);
	
	$.post("send_data.php",
	  {
		name:$("#name").val(),
		email:$("#email").val(),
		subject:$("#subject").val(),
		message:$("#message").val()		
	  },
	  function(data,status){
		if(data==1)
		{
			$(".fade_back").fadeIn(400);
			$("#loading").hide();		
			$("#form_sent").fadeIn(500).delay(200);
			var top=$(".pop_up_container").height();
			var left=$(".pop_up_container").width();
			
			var sc_height=$(window).height();
			var sc_width=$(window).width();
			
			var final_top=((sc_height-top)/2)-30;
			var final_left=((sc_width-left)/2)-20;
			
			if(sc_width>=320 && sc_width<=480)
			{
							var final_top="30%";
							var final_left="20%";
			}
			$(".pop_up_container").css({
				'top':final_top,
				'left':final_left
			});
		}
		else
		{
			$(".fade_back").fadeIn(400);
			$("#loading").hide();	
		
			$("#form_sent_err").fadeIn(500).delay(200);
			var top=$(".pop_up_container").height();
			var left=$(".pop_up_container").width();
			
			var sc_height=$(window).height();
			var sc_width=$(window).width();
			
			var final_top=((sc_height-top)/2)-30;
			var final_left=((sc_width-left)/2)-20;
			
			if(sc_width>=320 && sc_width<=480)
			{
							var final_top="30%";
							var final_left="14%";
			}
			$(".pop_up_container").css({
				'top':final_top,
				'left':final_left
			});
		}
		
	  });
	
};
    
});