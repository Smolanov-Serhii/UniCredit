<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package unicredit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/images/favicon.png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="main-page">
	<header id="uni-header" class="uni-header">
        <div class="uni-header__mobile mobile-item">
            <div class="mobile-item__wrapper">
                <div class="mobile-item__logo">
                    <?php
                    the_custom_logo();
                    ?>
                </div>
                <div class="mobile-item__burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="mobile-item__menu" style="display: none">
                    <nav class="mobile-item__section-nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'Main-menu',
                                'menu_id'        => 'Mob-menu',
                            )
                        );
                        ?>
                    </nav>
                    <nav class="mobile-item__section-nav">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'Product-menu',
                                'menu_id'        => 'Mob-menu-2',
                            )
                        );
                        ?>
                    </nav>
                    <a href="tel:<?php echo get_theme_mod('phone'); ?>" class="contacts-info__graph-phone">
                        <?php echo get_theme_mod('phone'); ?>
                    </a>
                    <div class="socials__wrapper">
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
                </div>
            </div>
        </div>
        <div class="uni-header__top">
            <div class="uni-container">
                <div class="uni-header__location">
                    <div class="uni-header__city">Ваш город: Минск</div>
                </div>
                <nav class="uni-header__section-nav">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Main-menu',
                            'menu_id'        => 'Main-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
		<div class="uni-header__contacts contacts-info">
            <div class="uni-container">
                <?php
                the_custom_logo();
                ?>
                <div class="uni-header__wrapper">
                    <div class="contacts-info__socials">
                        <div class="socials__wrapper">
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
                    </div>
                    <div class="contacts-info__button button-green js-make-call">
                        Заказать звонок
                    </div>
                    <div class="contacts-info__graph">
                        <a href="tel:<?php echo get_theme_mod('phone'); ?>" class="contacts-info__graph-phone">
                            <?php echo get_theme_mod('phone'); ?>
                        </a>
                        <div class="contacts-info__graph-time">
                            <?php echo get_theme_mod('graph'); ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <nav class="uni-header__type">
            <div class="uni-container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Product-menu',
                        'menu_id'        => 'Product-menu',
                    )
                );
                ?>
            </div>
        </nav>
	</header><!-- #masthead -->
