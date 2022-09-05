$(function(){
    var modal_open  = $('.js-modal-open'); //モーダルを開く
    var modal_close = $('.js-modal-close');//モーダル閉じる

    modal_open.on('click', function(){
        var target = $(this).data('target');//クリックした「js-modal-open」の「data-target」属性を取得し、変数「target」に代入
        var modal  = document.getElementById(target); //「data-target」の値はモーダルウィンドウのID属性とリンクさせているので、「document.getElementById(target)」とすることで、モーダルウィンドウが複数あっても表示したいものだけ取得することができます。

        $(modal).fadeIn();
        $('html, body').css('overflow-y', 'hidden');//モーダル開いとき、背景スクロールしない
        return false;
    });

    modal_close.on('click', function(){
        $('.js-modal').fadeOut();
        $('html, body').css('overflow-y', 'auto');//モーダル開いとき、背景スクロールする
        return false;
    });
});