$(document).ready(function(){
    $(".title li").click(function(){
        var idx = $(this).index();
        $(".tab_cont > section").not($(".tab_cont > section").eq(idx)).hide();
        $(".tab_cont > section").eq(idx).show()
    });

    //change_title
    $(".title li").click(function(){
        var idx = $(this).index();
        var title = $(".title li");
        if(idx == 0){
            title.eq(0).addClass("title1").removeClass("title1_click");
            title.eq(1).addClass("title2").removeClass("title2_click");
        }else{
            title.eq(0).addClass("title1_click");
            title.eq(1).addClass("title2_click");
        };
    });
    $("input:radio[name=check]").click(function(){
        if($("input[name=check]:checked").val() == "per:"){
            $("input:text[name=per]").attr("readonly",false);
            $("input:text[name=biz]").attr("readonly",true);
        }else if($("input[name=check]:checked").val() == "biz:"){
            $("input:text[name=per]").attr("readonly",true);
            $("input:text[name=biz]").attr("readonly",false);
        }else{$("input:text[name=biz]").attr("readonly",true);
        $("input:text[name=per]").attr("readonly",true)
        };
    });


});