$(document).ready(function(){
    $(".slider li"). click(function(){
        var idx = $(this).index();
        $(".menu_wrap > div").not($(".menu_wrap > div").eq(idx)).hide();            
        $(".menu_wrap > div").eq(idx).show();
    });

});