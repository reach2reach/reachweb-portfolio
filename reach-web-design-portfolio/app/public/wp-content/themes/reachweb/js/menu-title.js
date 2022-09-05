
//メニュータイトルをスクロール時表示

$(window).on('scroll', function (){

    var elem = $('.p-about__title,.p-service__title,.p-works__title,.p-contact__title');
    var isAnimate = 'is-show';
    
    elem.each(function () {
    
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > elemOffset - wh + (wh /10) ){
        $(this).addClass('is-show');
    }
    });
});