$(document).ready(function(){
    
    $("#header nav .wrap > li").hover(function(){
        $("ul.sub").stop().slideDown();
    },function(){
        $("ul.sub").stop().slideUp();
    });
});