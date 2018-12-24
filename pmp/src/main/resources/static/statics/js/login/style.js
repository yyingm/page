// JavaScript Document	
$(function(){
		$("#open").click(function(){
		$(".pic").find("img").attr("src","images/open.jpg")
		})
		$("#close").click(function(){
			$(".pic").find("img").attr("src","images/close.jpg")
		})
			
		$(".loginTitTab li").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			
			
			if($(this).attr("usertype")=="deposit_user")
			{
				$("#CAPTCHA").css("display","block")
				}
			else{
				$("#CAPTCHA").css("display","none")
				}
			
			
			var is_deposit_user = $(this).attr('usertype');
			$("input[name='is_deposit_user']").val(is_deposit_user);
		})	
			
			
		})
