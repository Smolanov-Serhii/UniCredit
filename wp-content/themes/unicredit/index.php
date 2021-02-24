<?php
/**
 * Template Name: Главная
 *
 */

get_header();
?>

    <section class="uni-slider">
        <ul class="uni-slider__items">
            <?php
            $args = array(
                'post_type' => 'main-slider',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <?php
                    $post_id = get_the_ID();
                    $meta_values = get_post_meta($post_id, $key = 'ssylka_dlya_knopki_glavnogo_slajdera', true);
                    ?>
                    <li class="uni-slider__item">
                        <picture>
                            <source media="(min-width: 500px)"
                                    srcset="<?php the_field('izobrazhenie_dlya_slajda')?>">
                            <img src="<?php the_field('izobrazhenie_slajda_dlya_mobajla')?>" alt="">
                        </picture>
                        <div class="uni-slider__item-title uni-container">
                            <?php the_field('zagolovok_dlya_slajda')?>
                        </div>
                        <div class="uni-slider__form-btn js-slider-form button button-green js-make-call">
                            Заполнить заявку
                        </div>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
        <div class="uni-slider__form">
            <?php get_sidebar('slider'); ?>
        </div>
    </section>
    <section class="uni-calculate">
        <div class="uni-calculate__tabs">
            <div class="uni-calculate__tab-item active-calc-tab" data-min="300" data-max="150000" data-proc="13.5" data-minmonth="3" data-maxmonth="84">
                Кредит наличными
            </div>
            <div class="uni-calculate__tab-item" data-min="500" data-max="100000" data-proc="13.5" data-minmonth="12" data-maxmonth="90">
                Рефинансирование
            </div>
            <div class="uni-calculate__tab-item" data-min="1000" data-max="150000" data-proc="9.9" data-minmonth="6" data-maxmonth="120">
                Автокредит
            </div>
        </div>
        <div class="uni-calculate__wrapper">
            <div class="uni-calculate__left">
                <div class="uni-calculate__row">
                    <span class="first-title">Необходимая сумма</span>
                    <span class="second-title" style="display: flex;"><div id="start-sum">300</div>&nbsp-&nbsp<div id="end-sum">150000</div>&nbspBYN</span>
                    <input class="editable-box number-only input-sum-slider-dublicate" type="text" placeholder="300" id='sum'  value='300'>
                    <input class="editable-slider input-sum-slider" type="range" name="item-sum" min="300" max="150000" value="300"> <!-- в плейсхолдер передать data-max с табы -->
                </div>
                <div class="uni-calculate__row">
                    <span class="first-title">Срок</span>
                    <span class="second-title" style="display: flex">до &nbsp<div id="pars-period">84</div>&nbsp месяцев</span>
                    <span class="container">
                        <input class="editable-box month-dublicate number-only" type="text" placeholder="1" id='term' value='1'>
                    <span class="uni-calculate__row-abs">месяцев</span>
                    </span>
                    <input class="editable-slider month-input" type="range" name="item-term" min="10" max="360" value="1" id=''>
                </div>
            </div>
            <div class="uni-calculate__right">
                <div class="uni-calculate__right-title">
                    ваше предложение
                </div>
                <div class="uni-calculate__right-subtitle">
                    Ежемесячный платёж
                </div>
                <div class="uni-calculate__right-pay">
                    <span class="сюда месячный платёж" id='for_month'></span>&nbsp BYN &nbsp
                </div>
                <div class="uni-calculate__right-proc-desc">
                    Процентная ставка
                </div>
                <div class="uni-calculate__right-proc-value">
                    от <span id="data-proc">13.5</span>% годовых <!--     процент из data-proc               -->

                </div>
                <div class="button button-green js-do-calculate">Подробный расчёт</div>
            </div>
        </div>
        <div class="calculate-table" style="display: none">
            <table id='calculate_table'>
            </table>
        </div>
    </section>
    <section class="uni-pluses">
        <div class="uni-pluses__title section-title">
            <?php the_field('zagoloyok_dlya_bloka_vygody',2);?>
        </div>
        <div class="uni-pluses__wrapper">
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_pervogo_punkta',2);?>" alt="<?php echo the_field('pervyj_punkt_vygody',2);?>">
                </div>
                <span><?php echo the_field('pervyj_punkt_vygody',2);?></span>
            </div>
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_vtorogo_punkta',2);?>" alt="<?php echo the_field('vtoroj_punkt_vygody',2);?>">
                </div>
                <span><?php the_field('vtoroj_punkt_vygody',2);?></span>
            </div>
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_tretego_punkta',2);?>" alt="<?php echo the_field('tretij_punkt_vygody',2);?>">
                </div>
                <span><?php the_field('tretij_punkt_vygody',2);?></span>
            </div>
        </div>
        <div class="uni-pluses__wrapper">
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_chetvrtogo_punkta',2);?>" alt="<?php echo the_field('chetvyortyj_punkt_vygody',2);?>">
                </div>
                <span><?php echo the_field('chetvyortyj_punkt_vygody',2);?></span>
            </div>
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_pyatogo_punkta',2);?>" alt="<?php echo the_field('pyatyj_punkt_vygody',2);?>">
                </div>
                <span><?php the_field('pyatyj_punkt_vygody',2);?></span>
            </div>
            <div class="uni-pluses__item">
                <div class="uni-pluses__image">
                    <img src="<?php echo the_field('ikonka_shestogo_punkta',2);?>" alt="<?php echo the_field('shestoj_punkt_vygody',2);?>">
                </div>
                <span><?php the_field('shestoj_punkt_vygody',2);?></span>
            </div>
        </div>
    </section>
    <section class="uni-evaluate">
        <h2 class="uni-evaluate__title section-title">
            <?php the_field('zagolovok_bloka_oczenki',2);?>
        </h2>
        <ul class="uni-evaluate__list">
            <?php
            $args = array(
                'post_type' => 'credit-types',
                'showposts' => "", //сколько показать статей
                'orderby' => "data", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    ?>
                    <li class="uni-evaluate__item">
                        <div class="uni-evaluate__image">
                            <img src="<?php the_field('izobrazhenie_dlya_elementa_straniczy');?>">
                        </div>
                        <h3 class="uni-evaluate__item-title">
                            <?php the_field('zagolovok_dlya_straniczy');?>
                        </h3>
                        <div class="uni-evaluate__bottom">
                            <div class="uni-evaluate__bottom-left">
                                <span class="digit"><?php the_field('godovaya_stravka');?></span>
                                <span class="desc">годовая ставка</span>
                            </div>
                            <div class="uni-evaluate__bottom-right">
                                <span class="digit"><?php the_field('maksimalnaya_summa');?></span>
                                <span class="desc">максимальная сумма</span>
                            </div>
                        </div>
                    </li>
                <?php }
            }
            wp_reset_query(); ?>
        </ul>
    </section>
    <section class="uni-about" id="uni-about">
        <h2 class="uni-about__title section-title">
            <?php the_field('zagolovok_dlya_sekczii_pro_nas',2);?>
        </h2>
        <div class="uni-about__body">
            <div class="uni-about__bg">
                <img src="<?php echo the_field('izobrazhenie_dlya_sekczii',2);?>" alt="<?php the_field('zagolovok_dlya_sekczii_pro_nas',2);?>">
            </div>
            <div class="uni-about__content">
                <div class="uni-about__content-wr">
                    <?php echo the_field('opisanie_sekczii_pro_nas',2);?>
                </div>
            </div>
        </div>
    </section>
    <section class="uni-tabs">
        <div class="uni-tabs__wrapper">
            <div class="uni-tabs__swicher">
                <div class="uni-tabs__navs">
                    <?php
                    $args = array(
                        'post_type' => 'tabscredit',
                        'showposts' => "", //сколько показать статей
                        'orderby' => "data", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    $counter = 1;
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <?php if ($counter == 1){
                                $DopClass = "active-tab";
                            } else {
                                $DopClass = "";
                            }?>
                            <div class="uni-tabs__navs-item  <?php echo $DopClass;?>" data-navid="<?php echo "nav-elem" . $counter;?>">
                                <div class="uni-tabs__navs-img">
                                    <img src="<?php echo the_field('ukazhite_ikonku_dlya_taby');?>" alt="<?php the_title();?>">
                                </div>
                                <h3><?php the_title();?></h3>
                            </div>
                            <?php $counter ++; ?>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </div>
                <div class="uni-tabs__content">
                    <?php
                    $args = array(
                        'post_type' => 'tabscredit',
                        'showposts' => "", //сколько показать статей
                        'orderby' => "data", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    $counter = 1;
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <?php if ($counter == 1){
                                $DopClass = "active-tab";
                            } else {
                                $DopClass = "";
                            }?>
                            <div class="uni-tabs__content-item <?php echo $DopClass?>" data-contid="<?php echo "nav-elem" . $counter;?>">
                                <div class="left">
                                    <div class="tabs-cont-item">
                                        <span class="value-name">Сумма кредита</span>
                                        <span class="value-digit"><?php echo the_field('summa_kredita_taba');?></span>
                                    </div>
                                    <div class="tabs-cont-item">
                                        <span class="value-name">Срок кредита</span>
                                        <span class="value-digit"><?php echo the_field('srok_kredita_taba');?></span>
                                    </div>
                                    <div class="tabs-cont-item">
                                        <span class="value-name">Процентная ставка</span>
                                        <span class="value-digit"><?php echo the_field('proczentnaya_stavka_taba');?></span>
                                    </div>
                                </div>
                                <div class="right">
                                    <?php the_content()?>
                                </div>
                            </div>
                            <?php $counter ++; ?>
                        <?php }
                    }
                    wp_reset_query(); ?>
                </div>
            </div>
            <div class="uni-tabs__cart">
                <div class="uni-tabs__cart-photo">
                    <img src="<?php echo the_field('fotograffiya_sotrudnika',2);?>">
                </div>
                <div class="uni-tabs__cart-about">
                    <div class="name"><?php the_field('imya_sotrudnika_dlya_bloka_s_tabami',2);?></div>
                    <div class="work"><?php the_field('dolzhnost_sotrudnika_taby',2);?></div>
                    <div class="text"><?php the_field('opisanie_pod_dolzhnostyu',2);?></div>
                    <div class="phone"><?php echo get_theme_mod('phone'); ?></div>
                    <div class="descript"><?php the_field('tekst_pod_nomerom_telefona',2);?></div>
                    <div class="button button-green js-make-call">Оставьте заявку</div>
                </div>
            </div>
        </div>
    </section>
    <section class="uni-economy">
        <div class="uni-economy__body">
            <div class="uni-economy__bg">
                <picture>
                    <source media="(min-width: 500px)"
                            srcset="<?php the_field('izobrazhenie_dlya_bloka_ekonomte_vremya', 2)?>">
                    <img src="<?php echo the_field('mob_izobrazhenie_dlya_bloka_ekonomte_vremya',2);?>" alt="<?php the_field('zagolovok_dlya_bloka_ekonomte_vremya',2);?>">
                </picture>
            </div>
            <div class="uni-economy__content">
                <div class="uni-economy__content-wr">
                    <h2 class="uni-economy__title">
                        <?php echo the_field('zagolovok_dlya_bloka_ekonomte_vremya',2);?>
                    </h2>
                    <div class="uni-economy__subtitle">
                        <?php echo the_field('podzagolovok_dlya_bloka_ekonomte_vremya',2);?>
                    </div>
                    <div class="button button-green js-make-form js-make-call">
                        Подать заявку на рассмотрение
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uni-question" id="uni-question">
        <section class="uni-quize">
            <div class="uni-quize__wrapper">
                <?php get_sidebar('quize'); ?>
            </div>
        </section>
    <div class="uni-question__background">
            <div class="uni-question__quest">
                <h2 class="uni-question__quest-title">
                    <?php echo the_field('zagolovok_bloka_voprosy',2);?>
                </h2>
                <div class="uni-question__quest-items">
                    <?php
                    $args = array(
                        'post_type' => 'question',
                        'showposts' => "-1", //сколько показать статей
                        'orderby' => "menu_order", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    $counter = 1;
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <div class="uni-question__item <?php if($counter > 9){echo 'hidded-item';}?>" style="<?php if($counter > 9){echo 'display:none';}?>">
                                <div class="uni-question__quest-head">
                                <span class="quest-title">
                                    <?php the_title();?>
                                </span>
                                    <span class="quest-triger">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.551 0.947815L5.99678 6.50253L0.442582 0.947815C0.338965 0.847719 0.173817 0.850605 0.0737207 0.954223C-0.0239055 1.05532 -0.0239055 1.21558 0.0737207 1.31665L5.81261 7.05554C5.91447 7.15738 6.07959 7.15738 6.18147 7.05554L11.9204 1.31665C12.024 1.21656 12.0268 1.05143 11.9268 0.947791C11.8267 0.844173 11.6615 0.841312 11.5579 0.941383C11.5557 0.943487 11.5531 0.945639 11.551 0.947815Z" fill="black"/>
                                        <path d="M5.99679 7.13236C5.92755 7.13248 5.86162 7.10445 5.81261 7.05554L0.0737207 1.31665C-0.0263755 1.21303 -0.0240018 1.04853 0.079616 0.948429C0.180715 0.850803 0.341508 0.850189 0.442582 0.947815L5.99678 6.50253L11.551 0.947815C11.6511 0.844197 11.8162 0.841436 11.9198 0.941508C12.0234 1.0416 12.0263 1.20673 11.9262 1.31037C11.9241 1.31255 11.9225 1.31455 11.9204 1.31665L6.18147 7.05554C6.13266 7.1045 6.0659 7.13219 5.99679 7.13236Z" fill="black"/>
                                    </svg>
                                </span>
                                </div>
                                <div class="uni-question__quest-answer">
                                    <?php the_content();?>
                                </div>
                            </div>
                            <?php $counter ++; ?>

                        <?php }
                    }
                    wp_reset_query(); ?>
                </div>
                <div class="uni-question__show-all">
                    <span class="text-hide">Весь список вопросов</span>
                    <span class="text-show">Скрыть список вопросов</span>
                    <span>
                        <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.101 0.421723L11.9926 8.7538L0.884183 0.421723C0.676948 0.271579 0.346652 0.275907 0.14646 0.431334C-0.0487926 0.582982 -0.0487926 0.823367 0.14646 0.974979L11.6242 9.58331C11.828 9.73606 12.1582 9.73606 12.362 9.58331L23.8397 0.974979C24.047 0.824834 24.0527 0.57715 23.8526 0.421686C23.6524 0.26626 23.3221 0.261968 23.1148 0.412075C23.1105 0.41523 23.1062 0.418421 23.102 0.421686L23.101 0.421723Z" fill="black"/>
                            <path d="M11.9936 9.69838C11.8551 9.69856 11.7223 9.65668 11.6242 9.58331L0.14646 0.974979C-0.0537327 0.819552 -0.0479655 0.572625 0.15927 0.422481C0.361468 0.276041 0.682034 0.275284 0.884183 0.421723L11.9926 8.7538L23.102 0.421686C23.3022 0.26626 23.6324 0.261991 23.8397 0.412099C24.0469 0.562243 24.0526 0.809929 23.8525 0.965392C23.8483 0.968657 23.8441 0.971824 23.8397 0.974979L12.362 9.58331C12.2643 9.65675 12.1318 9.69812 11.9936 9.69838Z" fill="black"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="uni-question__form">
                <div class="uni-question__person">
                    <div class="uni-question__photo">
                        <img src="<?php echo the_field('ukazhite_izobrazhenie_sotrudnika',2);?>">
                    </div>
                    <div class="uni-question__name">
                        <?php the_field('ukazhite_imya_sotrudnika',2);?>
                    </div>
                    <div class="uni-question__work">
                        <?php the_field('dolzhnost_sotrudnika',2);?>
                    </div>

                    <div class="uni-question__desc">
                        <?php the_field('tekst_pod_sotrudnikom',2);?>
                    </div>
                    <a href="tel:<?php echo get_theme_mod('phone'); ?>" class="uni-question__phone">
                        <?php echo get_theme_mod('phone'); ?>
                    </a>
                    <span class="devider">
                        или
                    </span>
                    <div class="uni-question__desc2">
                        <?php the_field('opisanie_pod_telefonom',2);?>
                    </div>
                    <div class="wc7">
                        <?php echo do_shortcode('[contact-form-7 id="129" title="Форма Задать вопрос"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="uni-question__bottom-title section-title">
            <?php the_field('blok_logotipov',2);?>
        </h2>
    </section>
    <section class="uni-brands" id="uni-brands">
        <div class="uni-brands__wrapper swiper-container">
            <div class="uni-brands__list swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'logotypes',
                    'showposts' => "100", //сколько показать статей
                    'orderby' => "data", //сортировка по дате
                    'caller_get_posts' => 1);
                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {
                        $my_query->the_post();
                        ?>
                        <div class="uni-brands__item swiper-slide">
                            <img src="<?php echo the_field('izobrazhenie_logotipa');?>" alt="<?php the_title();?>">
                        </div>
                    <?php }
                }
                wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="uni-reviewes">
        <h2 class="uni-reviewes__title section-title">
            <?php the_field('zagolovok_bloka_otzyvy',2);?>
        </h2>
        <div class="uni-reviewes__wrapper">
            <div class="uni-reviewes__text">
                <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
            </div>
<!--            <div class="uni-reviewes__video">-->
<!--                <div class="uni-reviewes__video-list">-->
<!--                    --><?php
//                    $args = array(
//                        'post_type' => 'videorev',
//                        'showposts' => "100", //сколько показать статей
//                        'orderby' => "data", //сортировка по дате
//                        'caller_get_posts' => 1);
//                    $my_query = new wp_query($args);
//                    if ($my_query->have_posts()) {
//                        while ($my_query->have_posts()) {
//                            $my_query->the_post();
//                            ?>
<!--                            <a href="--><?php //the_field('ssylka_na_otzyv_youtube');?><!--"-->
<!--                               class="uni-reviewes__video-item fresco">-->
<!--                                <img class="bg-image" src="--><?php //echo the_field('kartinka_dlya_oblozhki');?><!--">-->
<!--                                --><?php //the_field('zagolovok_bloka_otzyvy');?>
<!--                                <span class="video-type">--><?php //the_field('opisanie_kredita');?><!--</span>-->
<!--                                <img class="play-btn" src="--><?php //echo get_template_directory_uri()?><!--/images/youtube-play.png">-->
<!--                                <span class="video-name">--><?php //the_field('imya_polzovatelya');?><!--</span>-->
<!--                            </a>-->
<!--                        --><?php //}
//                    }
//                    wp_reset_query(); ?>
<!--                </div>-->
<!--            </div>-->
            <div class="uni-reviewes__links">
<!--                <div class="button-green js-reviewe">-->
<!--                    Оставить свой отзыв-->
<!--                </div>-->
<!--                <a href="--><?php //echo get_theme_mod('otzovik'); ?><!--"><img src="--><?php //echo get_template_directory_uri(); ?><!--/images/otzovik.jpg"></a>-->
                <a href="<?php echo get_theme_mod('yandex-rev'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/yandex.jpg"></a>
                <a href="<?php echo get_theme_mod('googleotz'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/google-otz.png"></a>
<!--                <a href="--><?php //echo get_theme_mod('yell'); ?><!--"><img src="--><?php //echo get_template_directory_uri(); ?><!--/images/yell.jpg"></a>-->
            </div>
        </div>
    </section>
    <div class="popup-modal" style="display: none;">
        <div class="uni-question__form">
            <div class="close-btn">
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.707078 0.292893C1.0976 -0.0976311 1.73077 -0.0976311 2.12129 0.292893L16.9142 15.0858L30.2929 1.70711C30.6834 1.31658 31.3166 1.31658 31.7071 1.70711C32.0976 2.09763 32.0976 2.7308 31.7071 3.12132L18.3284 16.5L31.7071 29.8787C32.0976 30.2692 32.0976 30.9024 31.7071 31.2929C31.3166 31.6834 30.6834 31.6834 30.2929 31.2929L16.9142 17.9142L2.12129 32.7071C1.73077 33.0976 1.0976 33.0976 0.707078 32.7071C0.316553 32.3166 0.316553 31.6834 0.707078 31.2929L15.5 16.5L0.707078 1.70711C0.316554 1.31658 0.316554 0.683417 0.707078 0.292893Z" fill="#F0DD45"/>
                </svg>
            </div>
            <div class="uni-question__person">
                <div class="uni-question__desc2">
                    <?php the_field('opisanie_pod_telefonom',2);?>
                </div>
                <div class="wc7">
                    <?php echo do_shortcode('[contact-form-7 id="288" title="Форма Попап"]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();