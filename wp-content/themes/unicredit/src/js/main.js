$(document ).ready(function() {
    window.onload = function () {
        DublicateWidth();
        QuestHeight();
        }
    function DublicateWidth(){
        var FirstElem = $("#Main-menu").width();
        $(".uni-header__wrapper").width(FirstElem);
    }

    if ($('.uni-calculate').length){
        $(function() {
            $('.uni-calculate select').selectric();
        });

        if (  jQuery(window).width() <= 600 ) {
            $('.uni-calculate__tabs').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows:true,
                dots: false,
                // centerMode: true
            });
        }

    }

    $( window ).resize(function() {
        DublicateWidth();
    });

    if ($('.uni-question__show-all').length){
        $( ".uni-question__show-all" ).click(function() {
            $(this).toggleClass('showed-all');
            $('.uni-question__item.hidded-item').fadeToggle(0);
            $(".uni-question__quest").toggleClass('changed');
        });
    }

    function QuestHeight(){
        var QuestHeight = $(".uni-question__background").height();
        $(".uni-question__quest").css('min-height', QuestHeight);
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

    if ($('.uni-tabs').length){
        $('.uni-tabs .uni-tabs__navs-item').on('click', function(){
            let ClickedNav = $(this).data('navid');
            let NeedElem = $( ".uni-tabs .uni-tabs__content-item[data-contid='"+ClickedNav+"']" );
            console.log(NeedElem);
            $('.uni-tabs .uni-tabs__navs-item').removeClass('active-tab');
            $(this).addClass('active-tab');
            $('.uni-tabs .uni-tabs__content-item').removeClass('active-tab');
            NeedElem.addClass('active-tab');
        });
    }

    if ($('.uni-question').length){
        $( ".uni-question__item" ).click(function() {
            $(this).find('.uni-question__quest-answer').toggleClass('active');
        });
    }
    $('.uni-reviewes__text .strong-content').perfectScrollbar();
    $('.uni-reviewes__video-list').perfectScrollbar();
    ymaps.ready(function () {
        var IconUrl = $('.uni-footer__map').data('icon');
        var myMap = new ymaps.Map('map', {
                center: [53.925678, 30.338758],
                controls: [],
                zoom: 18
            }, {
                searchControlProvider: true
            }),

            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                // Своё изображение иконки метки.
                iconImageHref: "",
                // Размеры метки.
                iconImageSize: [0, 0],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
            }),
            myPlacemarkWithContent = new ymaps.Placemark([53.925701, 30.341069], {
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: IconUrl,
                // Размеры метки.
                iconImageSize: [72, 87],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-40, -90],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myMap.geoObjects
            // .add(myPlacemark)
            .add(myPlacemarkWithContent);
    });

});






