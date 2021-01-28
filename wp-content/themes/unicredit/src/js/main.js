$(document ).ready(function() {
    window.onload = function () {
        DublicateWidth();
        }
    function DublicateWidth(){
        var FirstElem = $("#Main-menu").width();
        $(".uni-header__wrapper").width(FirstElem);
    }
    if ($('.uni-slider').length){
        $('.uni-slider .uni-slider__items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            arrows:false,
            dots: true,
            autoplaySpeed: 5000,
        });
    }

    if ($('.uni-brands').length){
        $('.uni-brands .uni-brands__list').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            arrows:true,
            autoplaySpeed: 5000,
            rows: 3,
        });
    }

    if ($('.uni-question').length){
        $( ".uni-question__item" ).click(function() {
            $(this).find('.uni-question__quest-answer').toggleClass('active');
        });
    }
    $('.uni-reviewes__text .strong-content').perfectScrollbar();

});






