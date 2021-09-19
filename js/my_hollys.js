
$(document).ready(function(){
    //tab_title
    $(".tab_title > ul > li"). click(function(){
        var idx = $(this).index();
        $(".tab_cont > section").not($(".tab_cont > section").eq(idx)).hide();            
        $(".tab_cont > section").eq(idx).show();
    
    });
    //inner_tab
    $(".inner_title > ul > li").click(function(){
        var idx1 = $(this).index();
        $(".inner_tab1 > div").not($(".tab_cont1 > div").eq(idx1)).hide(); 
        $(".inner_tab1 > div").eq(idx1).show();
    });

    //change_title  
    $(".tab_title li").click(function(){
        var idx = $(this).index();
        var tab_title = $(".tab_title li");
        if(idx == 0){
        tab_title.eq(0).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1_crown_red.jpg)"});
        tab_title.eq(1).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1_card.jpg)"});
        }else{
        tab_title.eq(0).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1_crown.jpg)"});
        tab_title.eq(1).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1_card_red.jpg)"});
        };
    });

    $(".inner_title li").click(function(){
        var idx = $(this).index();
        var inner_title = $(".inner_title li");
        if(idx == 0){
        inner_title.eq(0).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1_red.jpg)"});
        inner_title.eq(1).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab2.jpg)"});
        }else{
            inner_title.eq(0).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab1.jpg)"});
            inner_title.eq(1).css({background:"url(../images/sub/Membership/my_hollys/tab1/tab2_red.jpg)"});
        };
    });
    
    $(".sort li").click(function(){
        var idx = $(this).index();
        $(".sort li").not($(".sort li").eq(idx)).removeClass("sort1").addClass("sort2");            
        $(".sort li").eq(idx).addClass("sort1");
    });

});