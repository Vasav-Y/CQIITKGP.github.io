var fixtop = $('.gal-imgs').offset().top;

$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if (scroll >= fixtop){
        $(".gal-imgs").css({
            position: 'fixed',
            top: '0',
            left: '0'
        });
    }
    else{
        $('.gal-imgs').css({
            position: 'relative'
        });
    }

    $(".gal-img:nth-child(1)").css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200))/5)+'%, '+(-50-((scroll-fixtop-4200))/5)+'%,0) scale('+(0.2+((scroll-fixtop-4200)/500))+')',
        opacity: 0.2 + scroll/150,
    });
    $(".gal-img:nth-child(2)").css({
        transform: 'translate3d('+(-45+((scroll-fixtop-4200)-200)/5)+'%, '+(-50-((scroll-fixtop-4200)-200)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-200)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-200)/150,
    });
    $(".gal-img:nth-child(3)").css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-350)/5)+'%, '+(-50+((scroll-fixtop-4200)-350)/2)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-350)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-350)/150,
    });
    $(".gal-img:nth-child(4)").css({
        transform: 'translate3d('+(-70-((scroll-fixtop-4200)-500)/2)+'%, '+(-45+((scroll-fixtop-4200)-500)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-500)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-500)/150,
    });
    $(".gal-img:nth-child(5)").css({
        transform: 'translate3d('+(-55-((scroll-fixtop-4200)-700)/5)+'%, '+(-50-((scroll-fixtop-4200)-700)/3)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-700)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-700)/150,
    });
    $(".gal-img:nth-child(6)").css({
        transform: 'translate3d('+(-40+((scroll-fixtop-4200)-950)/2)+'%, '+(-50+((scroll-fixtop-4200)-950)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-950)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-950)/150,
    });
    $(".gal-img:nth-child(7)").css({
        transform: 'translate3d('+(-40+((scroll-fixtop-4200)-1100)/2)+'%, '+(-50-((scroll-fixtop-4200)-1100)/10)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1100)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1100)/150,
    });
    $(".gal-img:nth-child(8)").css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-1300)/8)+'%, '+(-50-((scroll-fixtop-4200)-1300)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1300)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1300)/150,
    });
    $(".gal-img:nth-child(9)").css({
        transform: 'translate3d('+(-45+((scroll-fixtop-4200)-1500)/3)+'%, '+(-50+((scroll-fixtop-4200)-1500)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1500)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1500)/150,
    });
    $(".gal-img:nth-child(10)").css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-1650)/5)+'%, '+(-50+((scroll-fixtop-4200)-1650)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1650)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1650)/150,
    });
    $(".gal-img:nth-child(11)").css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-1750)/2)+'%, '+(-50+((scroll-fixtop-4200)-1750)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1750)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1750)/150,
    });
    $(".gal-img:nth-child(12)").css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-1900)/5)+'%, '+(-50-((scroll-fixtop-4200)-1900)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-1900)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-1900)/150,
    });
    $(".gal-img:nth-child(13)").css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-2100)/2)+'%, '+(-50-((scroll-fixtop-4200)-2100)/10)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2100)/500))+')',
        opacity: 0.2 + ((scroll-fixtop-4200)-2100)/150,
    });
    $('.gal-img:nth-child(14)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-2300)/2)+'%, '+(-50+((scroll-fixtop-4200)-2300)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2300)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2300)/150,
    });
    $('.gal-img:nth-child(15)').css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-2400)/5)+'%, '+(-50+((scroll-fixtop-4200)-2400)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2400)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2400)/150,
    });
    $('.gal-img:nth-child(16)').css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-2450)/3)+'%, '+(-50-((scroll-fixtop-4200)-2450)/3)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2450)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2450)/150,
    });
    $('.gal-img:nth-child(17)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-2600)/3)+'%, '+(-50+((scroll-fixtop-4200)-2600)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2600)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2600)/150,
    });
    $('.gal-img:nth-child(18)').css({
        transform: 'translate3d('+(-40+((scroll-fixtop-4200)-2700)/8)+'%, '+(-50-((scroll-fixtop-4200)-2700)/3)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2700)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2700)/150,
    });
    $('.gal-img:nth-child(19)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-2900)/2)+'%, '+(-50-((scroll-fixtop-4200)-2900)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-2900)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-2900)/150,
    });
    $('.gal-img:nth-child(20)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-3100)/2)+'%, '+(-50+((scroll-fixtop-4200)-3100)/8)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3100)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3100)/150,
    });
    $('.gal-img:nth-child(21)').css({
        transform: 'translate3d('+(-45+((scroll-fixtop-4200)-3200)/2)+'%, '+(-50-((scroll-fixtop-4200)-3200)/7)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3200)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3200)/150,
    });
    $('.gal-img:nth-child(22)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-3350)/3)+'%, '+(-50-((scroll-fixtop-4200)-3350)/3)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3350)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3350)/150,
    });
    $('.gal-img:nth-child(23)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-3400)/8)+'%, '+(-50+((scroll-fixtop-4200)-3400)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3400)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3400)/150,
    });
    $('.gal-img:nth-child(24)').css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-3500)/3)+'%, '+(-50-((scroll-fixtop-4200)-3500)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3500)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3500)/150,
    });
    $('.gal-img:nth-child(25)').css({
        transform: 'translate3d('+(-50+((scroll-fixtop-4200)-3700)/3)+'%, '+(-50+((scroll-fixtop-4200)-3700)/3)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3700)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3700)/150,
    });
    $('.gal-img:nth-child(26)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-3800)/2)+'%, '+(-50-((scroll-fixtop-4200)-3800)/7)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3800)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3800)/150,
    });
    $('.gal-img:nth-child(27)').css({
        transform: 'translate3d('+(-50-((scroll-fixtop-4200)-3900)/8)+'%, '+(-50-((scroll-fixtop-4200)-3900)/5)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-3900)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-3900)/150,
    });
    $('.gal-img:nth-child(28)').css({
        transform: 'translate3d('+(-40+((scroll-fixtop-4200)-4000)/2)+'%, '+(-40+((scroll-fixtop-4200)-4000)/4)+'%,0) scale('+(0.2+(((scroll-fixtop-4200)-4000)/500))+')', 
        opacity: 0.2 + ((scroll-fixtop-4200)-4000)/150,
    });
    if ((scroll-fixtop-4100)<0){
        $(".gal-img").css({
            opacity: 0
        });
    }
});