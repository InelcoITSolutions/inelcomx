$(document).ready(function(){
	$(".box-solutions").mouseover(function(){
        $(this).find(".icon").stop(true,true).css("color", "#88b3dd");	
        $(this).find(".h2-css").stop(true,true).css("color", "#1E3662");
        $(this).find(".p-css").stop(true,true).css("color", "#1E3662");
        $(this).css("background", "rgba(0,0,0,0.02)");
    });
    $(".box-solutions").mouseout(function(){
    	$(this).find(".icon").stop(true,true).css("color", "#3661b0");
        $(this).find(".h2-css").stop(true,true).css("color", "#666");
        $(this).find(".p-css").stop(true,true).css("color", "#666");
        $(this).css("background", "#FFF");
    });
});