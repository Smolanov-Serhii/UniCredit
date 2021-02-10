<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unicredit
 */

?>

	<footer id="uni-footer" class="uni-footer">
        <div class="uni-footer__map" data-icon="<?php echo get_template_directory_uri()?>/images/marker-map.svg">
            <div id="map" style="width:100%; height:100%;"></div>
            <div class="uni-footer__content">
                <div class="uni-footer__content-logo">
                    <img src="<?php echo get_template_directory_uri()?>/images/footer_logo.svg">
                </div>
                <div class="uni-footer__content-adr">
                    <h3>Посетите наш офис</h3>
                    <span class="adress">
                        Наш адресс
                    </span>
                    <span class="adress-value">
                        <?php echo get_theme_mod('adress'); ?>
                    </span>
                    <span class="email">
                        E-mail
                    </span>
                    <span class="email-value">
                        <?php echo get_theme_mod('email'); ?>
                    </span>
                    <span class="phone">
                        Телефон
                    </span>
                    <span class="phone-value">
                        <?php echo get_theme_mod('phone'); ?>
                    </span>
                    <div class="contacts-info__button button-green js-make-call">
                        Заказать звонок
                    </div>
                </div>
            </div>
        </div>
        <div class="uni-footer__copyright">
            <a href="<?php echo get_theme_mod('telegram'); ?>">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 0.40625C6.04256 0.40625 0.40625 6.04338 0.40625 13C0.40625 19.9566 6.04338 25.5938 13 25.5938C19.9574 25.5938 25.5938 19.9566 25.5938 13C25.5938 6.04338 19.9566 0.40625 13 0.40625ZM19.1856 9.03419L17.1186 18.7744C16.9658 19.4651 16.5547 19.6324 15.9811 19.3074L12.8326 16.9869L11.3141 18.4494C11.1467 18.6168 11.0045 18.759 10.6795 18.759L10.9029 15.5545L16.7375 10.283C16.9918 10.0596 16.6814 9.93281 16.3459 10.1562L9.13494 14.6957L6.02713 13.7256C5.35194 13.5127 5.3365 13.0504 6.16931 12.7254L18.3113 8.04294C18.8752 7.83981 19.3676 8.18025 19.1847 9.03337L19.1856 9.03419Z" fill="black"/>
                </svg>
            </a>
            <a href="<?php echo get_theme_mod('messanger'); ?>">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13 0C5.82029 0 0 5.38915 0 12.037C0 15.8251 1.89041 19.204 4.84472 21.4104V26L9.2711 23.5707C10.4524 23.8976 11.7039 24.0741 13 24.0741C20.1797 24.0741 26 18.6849 26 12.037C26 5.38915 20.1797 0 13 0ZM14.2919 16.2099L10.9814 12.679L4.52175 16.2099L11.6273 8.66667L15.0186 12.1975L21.3975 8.66667L14.2919 16.2099Z" fill="black"/>
                </svg>
            </a>
            <a href="<?php echo get_theme_mod('whatsapp'); ?>">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0033 0H12.9967C5.82888 0 0 5.8305 0 13C0 15.8438 0.9165 18.4795 2.47487 20.6196L0.85475 25.4491L5.85162 23.8518C7.90725 25.2135 10.3594 26 13.0033 26C20.1711 26 26 20.1679 26 13C26 5.83213 20.1711 0 13.0033 0ZM20.5676 18.3576C20.254 19.2432 19.0093 19.9777 18.0164 20.1922C17.3371 20.3369 16.4499 20.4523 13.4631 19.214C9.64275 17.6313 7.1825 13.7491 6.99075 13.4972C6.80713 13.2454 5.447 11.4416 5.447 9.57613C5.447 7.71063 6.39438 6.80225 6.77625 6.41225C7.08988 6.09212 7.60825 5.94587 8.1055 5.94587C8.26637 5.94587 8.411 5.954 8.541 5.9605C8.92288 5.97675 9.11462 5.9995 9.3665 6.60238C9.68013 7.358 10.4439 9.2235 10.5349 9.41525C10.6275 9.607 10.7201 9.867 10.5901 10.1189C10.4683 10.3789 10.361 10.4942 10.1692 10.7153C9.9775 10.9362 9.7955 11.1053 9.60375 11.3425C9.42825 11.5489 9.23 11.7699 9.451 12.1518C9.672 12.5255 10.4358 13.7719 11.5602 14.7729C13.0114 16.0647 14.1879 16.4775 14.6087 16.653C14.9224 16.783 15.2961 16.7521 15.5252 16.5084C15.8161 16.1947 16.1752 15.6748 16.5409 15.1629C16.8009 14.7956 17.1291 14.7501 17.4736 14.8801C17.8246 15.002 19.682 15.9201 20.0639 16.1102C20.4457 16.302 20.6976 16.393 20.7902 16.5539C20.8813 16.7148 20.8812 17.4704 20.5676 18.3576Z" fill="black"/>
                </svg>
            </a>
        </div>
	</footer>
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>-->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@0.6.12/dist/js/perfect-scrollbar.jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/jquery.selectric.min.js" defer></script>
<script src="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU" type="text/javascript" defer></script>
<script src="<?php echo get_template_directory_uri()?>/dist/js/common.js" defer></script>
<?php wp_footer(); ?>

</body>
</html>
