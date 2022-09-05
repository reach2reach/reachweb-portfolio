
//アコーディオン//
$(function () {
    $(".p-about__accordion--title,.p-service__design__accordion--title,.p-service__coding__accordion--title,.p-service__WordPress__accordion--title").on("click", function () {
    $(this).next().slideToggle(1);
    $(this).toggleClass("open",0);
    });
});