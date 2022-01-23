var fixmeTop = $('.left').offset().top;
$(window).scroll(function() {
    var currentScroll = $(window).scrollTop();
    if (currentScroll >= fixmeTop) {
        $('.left').css({
            position: 'fixed',
            top: '65px',
            left: '0'
        });
    } else {
        $('.left').css({
            position: 'static'
        });
    }
});