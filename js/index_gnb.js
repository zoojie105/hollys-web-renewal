$(function(){
    //gnb
    $(".gnb > ul > li, .gnb ul ul").mouseenter(function(){
        $(".gnb ul ul, .sub_box").stop().slideDown(200)
    });
    $(".gnb > ul > li, .gnb ul ul").mouseleave(function(){
        $(".gnb ul ul, .sub_box").stop().slideUp(200)
    });

    //top menu
    $(".language a").mouseenter(function(){
        $(".language ul").stop().slideDown(400);
    });
    $(".language a").mouseleave(function(){
        $(".language ul").stop().slideUp(400)
    });

    
});