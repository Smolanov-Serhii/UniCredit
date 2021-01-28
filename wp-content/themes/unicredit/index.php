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
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $post_id = get_the_ID();
                    $meta_values = get_post_meta($post_id, $key = 'ssylka_dlya_knopki_glavnogo_slajdera', true);
                    ?>
                    <li class="uni-slider__item" style="background-image: url(<?php the_field('izobrazhenie_dlya_slajda')?>)">
                        <div class="uni-slider__item-title uni-container">
                            <?php the_field('zagolovok_dlya_slajda')?>
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
        <div class="uni-evaluate__title section-title">
            <?php the_field('zagolovok_bloka_oczenki',2);?>
        </div>
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
    <section class="uni-about">
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

    </section>
    <section class="uni-economy">
        <div class="uni-economy__body">
            <div class="uni-economy__bg">
                <img src="<?php echo the_field('izobrazhenie_dlya_bloka_ekonomte_vremya',2);?>" alt="<?php the_field('zagolovok_dlya_bloka_ekonomte_vremya',2);?>">
            </div>
            <div class="uni-economy__content">
                <div class="uni-economy__content-wr">
                    <div class="uni-economy__title">
                        <?php echo the_field('zagolovok_dlya_bloka_ekonomte_vremya',2);?>
                    </div>
                    <div class="uni-economy__subtitle">
                        <?php echo the_field('podzagolovok_dlya_bloka_ekonomte_vremya',2);?>
                    </div>
                    <div class="button button-green js-make-form">
                        Подать заявку на рассмотрение
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uni-question">
        <div class="uni-question__background">
            <div class="uni-question__quest">
                <div class="uni-question__quest-title">
                    <?php echo the_field('zagolovok_bloka_voprosy',2);?>
                </div>
                <div class="uni-question__quest-items">
                    <?php
                    $args = array(
                        'post_type' => 'question',
                        'showposts' => "", //сколько показать статей
                        'orderby' => "data", //сортировка по дате
                        'caller_get_posts' => 1);
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <div class="uni-question__item">
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
                        <?php }
                    }
                    wp_reset_query(); ?>
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
    <section class="uni-brands">
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
            <div class="uni-reviewes__video">

            </div>
            <div class="uni-reviewes__links">
                <div class="button-green js-reviewe">
                    Оставить свой отзыв
                </div>
                <a href="<?php echo get_theme_mod('otzovik'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/otzovik.jpg"></a>
                <a href="<?php echo get_theme_mod('yandex-rev'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/yandex.jpg"></a>
                <a href="<?php echo get_theme_mod('yell'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/yell.jpg"></a>
            </div>
        </div>
    </section>
<?php
get_footer();