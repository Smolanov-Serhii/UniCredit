$(document ).ready(function() {

    if ($('.quest-slides').length){
        $('.quest-slides').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: false,
            arrows: false,
            adaptiveHeight: true,
            // prevArrow: $('.prev'),
            // nextArrow: $('.next'),
        });
        $('.quest-next').on('click', function() {
            $('.quest-slides').slick('slickNext');
        });
    }

    var $page = $('html, body');
    $('a[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });

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
            lazyLoad: 'ondemand',
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
            responsive: [
                {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 4,
                        rows: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows:true,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        rows: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows:true,
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        rows: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows:true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        rows: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows:true,
                    }
                }
            ]
        });
    }

    if ($('.uni-tabs').length){
        $('.uni-tabs .uni-tabs__navs-item').on('click', function(){
            let ClickedNav = $(this).data('navid');
            let NeedElem = $( ".uni-tabs .uni-tabs__content-item[data-contid='"+ClickedNav+"']" );
            $('.uni-tabs .uni-tabs__navs-item').removeClass('active-tab');
            $(this).addClass('active-tab');
            $('.uni-tabs .uni-tabs__content-item').removeClass('active-tab');
            NeedElem.addClass('active-tab');
        });
    }

    if ($('.mobile-item__burger').length){
        $('.mobile-item__burger').on('click', function(){
            $('.mobile-item__menu').fadeToggle(300);
        });
        $('.mobile-item__menu a').on('click', function(){
            $('.mobile-item__menu').fadeToggle(300);
        });
    }

    if ($('.uni-question').length){
        $( ".uni-question__item" ).click(function() {
            $(this).find('.uni-question__quest-answer').toggleClass('active');
        });
    }
    if (  jQuery(window).width() >= 900 ) {
        $('.uni-reviewes__text .strong-content').perfectScrollbar();
        $('.uni-reviewes__video-list').perfectScrollbar();
    } else {
        $('.strong-content').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            centerMode: true,
            arrows: false,
        });
        $('.uni-reviewes__video-list').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            centerMode: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                    }
                }
            ]
        });
    }
    if (  jQuery(window).width() >= 1100 ) {
        var FirstCoord = 53.925701;
        var SecondCoord = 30.341069;

        var CenterFirstCoord = 53.925678;
        var CenterSecondCoord = 30.338758;
    } else {
        var FirstCoord = 53.925701;
        var SecondCoord = 30.341069;

        var CenterFirstCoord = FirstCoord;
        var CenterSecondCoord = SecondCoord;
    }
    ymaps.ready(function () {
        var IconUrl = $('.uni-footer__map').data('icon');
        var myMap = new ymaps.Map('map', {
                center: [CenterFirstCoord, CenterSecondCoord],
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
            myPlacemarkWithContent = new ymaps.Placemark([FirstCoord, SecondCoord], {
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


    if ($('.uni-calculate__row').length){
        $( ".uni-calculate__row" ).each(function( index ) {
            var RangeInput = $(this).find('.editable-slider');
            var TextInput = $(this).find('.editable-box');
            RangeInput.on("input", function(){
                TextInput.val(this.value);
            });
        });

    }


    $('.uni-calculate__tab-item').on('click', function () {
        $('.active-calc-tab').removeClass('active-calc-tab')
        $(this).addClass('active-calc-tab');
        $('#calculate_table').html('');
        var i = $('.active-calc-tab').data('proc') * 1;
        $('#data-proc').html(i);
    })
    $('.js-do-calculate').click(function () {
        $('.calculate-table').fadeIn(300);
        var s = $('#sum')[0].value*1;
        var n = $('#term')[0].value*1;
        var i = $('.active-calc-tab').data('proc') * 1;
        var od = s
        var dp;
        var ms = [
            'Январь',
            'Февраль',
            'Март',
            'Апрель',
            'Май',
            'Июнь',
            'Июль',
            'Август',
            'Сентябрь',
            'Октябрь',
            'Ноябрь',
            'Декабрь',
        ]
        var html = '<tr><td>Месяц</td><td>Платежка</td><td>Осн. долг</td><td>Проценты</td><td>Доп. платежи</td><td>Остаток по долгу</td></tr>';
        // var x = s*(p+(p/(Math.pow((1+p),t)-1)));

        for(j = 1; j <= n; j++) {
            var cd = (new Date);
            var nd = cd.setMonth(cd.getMonth() + j);
            var m = ms[(new Date(nd)).getMonth()];
            var y = (new Date(nd)).getYear() + 1900;

            pk = (od * ((i/100)/12));
            dp = s/n + pk;
            os = dp - pk;
            od = od - dp + pk;

            if(j == 1){
                $('#for_month').html('' + parseInt(dp) + ' ');
            }
            html += '<tr><td>'+m+' '+y+'</td><td>'+dp.toFixed(2)+'</td><td>'+os.toFixed(2)+'</td><td>'+pk.toFixed(2)+'</td><td>0.00</td><td>'+od.toFixed(2)+'</td></tr>'

        }
        $('#calculate_table').html(html)

    })


});






