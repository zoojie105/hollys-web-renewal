$(function(){
    //gnb
    $(".gnb > ul > li").mouseenter(function(){
        $(".sub, .sub_box").stop().slideDown(200)
    });
    $(".gnb > ul > li").mouseleave(function(){
        $(".sub, .sub_box").stop().slideUp(200)
    });


    
});