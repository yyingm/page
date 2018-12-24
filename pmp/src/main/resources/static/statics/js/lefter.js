
window.onload=function(){
    var contentWidth = $(".content").width();
    var topWidth = $(".top").width();
    var dianlu3tWidth = $(".dianLu3").width();
    $(".newDL1").css("padding-left","128px");
    $(".dianluShort").css("padding-left","500px");
    if($(".dianlu1").width()>=1803)
	{
		
		$(".top").width($(".dianlu1").width()+138)
		
	}
    if($(".content-right").width()>=1803)
	{
		
		$(".top").width($(".content-right").width()+'128px')
		
	}
    
    $(".showHide").click(function(){
        if($(".content-left").css("display") == "block"||!$(".content-left").css("display"))
        {
            $(".content-left").css("display","none")

        }
        else{
            $(".content-left").css("display","block");
        }

    })
}