//ハンバーガーボタンとメニュー
$(function() {
    $('.c-button--hamburger').on("click",function(){ 
        $(this).toggleClass('is-active');
 
        if ($(this).hasClass('is-active')) {
            $('.p-global-nav').addClass('is-active');
        } else {
            $('.p-global-nav').removeClass('is-active');
        }
    });

    //メニュー開いてる時、メニュークリックしたらメニューとXボタンが閉じてリンクに飛ぶ
    $('#menu-item-40, #menu-item-41, #menu-item-42, #menu-item-43, #menu-item-251, #menu-item-252, #menu-item-253, #menu-item-254 a').on('click',function() {
        $('.p-global-nav,.c-button--hamburger').removeClass('is-active');
    } );

    //window横幅がpcサイズになったらis-open外す//
    $(window).on("resize", function() {
        var w = $(window).width();
        if(w >=1025) {
            $('.c-button--hamburger,.p-global-nav').removeClass("is-active");
        }
        });
});

