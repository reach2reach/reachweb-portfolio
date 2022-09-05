
//helloテキストをスクロール時に表示

new Vivus('move', {
    type: 'scenario-sync',
    duration: 100,
    forceRender: false,
    animTimingFunction: Vivus.EASE
    })

    
//photoをスクロール時に表示
    $(window).on('scroll', function (){

        var elem = $('.p-about__profile--photo');
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