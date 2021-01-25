function nowmenu(menu){
    console.log(menu);
    $(".menu li").eq(menu).addClass("active");
    $(".bar").css({left:menu*200});
    //$(".bar").animate({left:menu*200});

    //$(".menu li").hover(function(){},function(){});
    //mouseenter / mouseleave
    $(".menu li").hover(function(){
        let menuli = $(this).index();
        $(".bar").stop().animate({left:menuli*200},100);
    },function(){
        $(".bar").stop().animate({left:menu*200},100);
    });

};