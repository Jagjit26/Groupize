// JavaScript Document

$(document).ready(function(){
	var show_dropdown1=0;
	var show_dropdown2=0;
	
	$(".option_selected,.option_dropdownicon").click(function(){
		//$(".option_list_container").slideUp(100);
		var option_container=$(this).parent();
		option_container=$(option_container).find('.option_list_container');
		/*$(option_container).animate({
			opacity:1
		},200);*/
		$(option_container).slideToggle(200);
		show_dropdown1=1;
		return false;
	});
	
	$(document).click(function()
	{
		var drop_parent=$(".dropdown-menu-container");
			$(".option_list_container").slideUp(200);
	});
	
	$(".options1").click(function(){
		
		if($(this).attr('class')=='options1')
		{
			var value=$(this).html();
			var opt_val=($(this).attr('id')).split('_');
			opt_val=opt_val[1];
			$("#drop_down1").val(opt_val);
			var parent_option_selected=$(this).parent().parent();
			var option_selected=$(parent_option_selected).children("span");
			var drop_down=$(option_selected).attr('id');
			$(option_selected).html(value);
			value=value.toLowerCase();
			if(drop_down=='opt_selected1')
			{
				var other_drop_down=$("#opt_selected2").parent();
				$("#opt_selected2").html('I want to...');
				$("#drop_down2").val('0');
				other_drop_down=$(other_drop_down).children('.option_list_container').children('.options2');
				$(other_drop_down).show();
				if(value==('Hotel').toLowerCase())
				{
					$(other_drop_down).each(function(i,e){
						
						if(($(e).html()).toLowerCase() != ('Get Technology for my Hotel').toLowerCase() && ($(e).html()).toLowerCase() != ('Get more Groups').toLowerCase())
						{
							$(e).hide();
						}
					});
				}
				else if(value==('Hotel Chain').toLowerCase())
				{
					$(other_drop_down).each(function(i,e){
						
						if(($(e).html()).toLowerCase() != ('Get Technology for my Chain').toLowerCase() && ($(e).html()).toLowerCase() != ('Get more Groups').toLowerCase())
						{
							$(e).hide();
						}
					});
				}
				else if(value==('Web Sites').toLowerCase())
				{
					$(other_drop_down).each(function(i,e){
						
						if(($(e).html()).toLowerCase() != ('Sell Groups Online').toLowerCase())
						{
							$(e).hide();
						}
					});
				}
				else if(value==('Planner').toLowerCase())
				{
					$(other_drop_down).each(function(i,e){
						
						if(($(e).html()).toLowerCase() != ('Plan a Group or Meeting').toLowerCase())
						{
							$(e).hide();
						}
					});
				}
			}
		}
	});
	
	$(".options2").click(function(){
		if($(this).attr('class')=='options2')
		{
			var value=$(this).html();
			var opt_val=($(this).attr('id')).split('_');
			opt_val=opt_val[1];
			$("#drop_down2").val(opt_val);
			var parent_option_selected=$(this).parent().parent();
			var option_selected=$(parent_option_selected).children("span");
			var drop_down=$(option_selected).attr('id');
			$(option_selected).html(value);		
		}
	});
	
	$("#submit_drop").click(function(){
  if($("#drop_down1").val()!='0' && $("#drop_down2").val()!='0')
  {
   window.location='/home-widget-handler/?option1='+$("#drop_down1").val()+'&option2='+$("#drop_down2").val();
  }
  else
  {
   alert("Please provide all information.");
   return false;
  }
 });
	
});