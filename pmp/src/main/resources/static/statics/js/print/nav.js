// JavaScript Document


		
$(function(){
	$(".parent").click(function () {
        $(this).next(".child").eq(0).slideToggle();
		
    });
	$(".parent").mouseover(function() {
        $(this).addClass("active").siblings().removeClass("active");
		
    });
	$(".child ul li").mouseover(function(){
		$(this).parents(".child").find("ul li dt img").css("display","none")
		$(this).find("img").css("display","block")
		})
	
	$(".child ul li").mouseout(function() {
         $(this).find("img").css("display","none");
    });
	
		
		
    if(window.addEventListener){
    	window.addEventListener("load",loadWindow);
    }
    else{
    	window.attachEvent("onload",loadWindow);
    }
	function loadWindow(e){
    var contentWidth = $(".content").width();
    var topWidth = $(".top").width();
    var dianlu3tWidth = $(".dianLu3").width();
	$(".showHide").click(function(){
		
		if($(".content-left").css("display") == "block"||!$(".content-left").css("display"))
		{
			$(".content-left").css("display","none")
			$(".content-right").css("padding-left","")
			$(".dianlu3").css("padding-left","")
		}
		else{
			$(".content-left").css("display","block");
			$(".dianlu3").css("padding-left","90px")
			$(".content-right").css("padding-left","159px")
			}
		
		})
		
}
})






































