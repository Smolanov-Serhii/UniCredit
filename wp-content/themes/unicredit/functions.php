<?php
/**
 * unicredit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unicredit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



add_action( 'init', 'register_post_types' );
function register_post_types()
{
    register_post_type('tabscredit', [
        'label' => null,
        'labels' => [
            'name' => 'Табы кредитов', // основное название для типа записи
            'singular_name' => 'Табы кредитов', // название для одной записи этого типа
            'add_new' => 'Добавить табу', // для добавления новой записи
            'add_new_item' => 'Добавление табы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование табы', // для редактирования типа записи
            'new_item' => 'Новая таба', // текст новой записи
            'view_item' => 'Смотреть табу', // для просмотра записи этого типа.
            'search_items' => 'Искать табу', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Табы кредитов', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title','editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('main-slider', [
        'label' => null,
        'labels' => [
            'name' => 'Слайдер', // основное название для типа записи
            'singular_name' => 'Слайдер', // название для одной записи этого типа
            'add_new' => 'Добавить слайд', // для добавления новой записи
            'add_new_item' => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование слайда', // для редактирования типа записи
            'new_item' => 'Новый слайд', // текст новой записи
            'view_item' => 'Смотреть слайд', // для просмотра записи этого типа.
            'search_items' => 'Искать слайд', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Слайдер', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('credit-types', [
        'label' => null,
        'labels' => [
            'name' => 'Выди кредитов', // основное название для типа записи
            'singular_name' => 'Выди кредитов', // название для одной записи этого типа
            'add_new' => 'Добавить вид', // для добавления новой записи
            'add_new_item' => 'Добавление вида', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование вида', // для редактирования типа записи
            'new_item' => 'Новый вид', // текст новой записи
            'view_item' => 'Смотреть вид', // для просмотра записи этого типа.
            'search_items' => 'Искать вид', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Выди кредитов', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('question', [
        'label' => null,
        'labels' => [
            'name' => 'Вопросы и ответы', // основное название для типа записи
            'singular_name' => 'Вопросы и ответы', // название для одной записи этого типа
            'add_new' => 'Добавить вопрос', // для добавления новой записи
            'add_new_item' => 'Добавление вопроса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование вопроса', // для редактирования типа записи
            'new_item' => 'Новый вопрос', // текст новой записи
            'view_item' => 'Смотреть вопрос', // для просмотра записи этого типа.
            'search_items' => 'Искать вопрос', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Вопросы и ответы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title','editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('logotypes', [
        'label' => null,
        'labels' => [
            'name' => 'Логотипы', // основное название для типа записи
            'singular_name' => 'Логотипы', // название для одной записи этого типа
            'add_new' => 'Добавить логотип', // для добавления новой записи
            'add_new_item' => 'Добавление логотипа', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование логотипа', // для редактирования типа записи
            'new_item' => 'Новый логотип', // текст новой записи
            'view_item' => 'Смотреть логотип', // для просмотра записи этого типа.
            'search_items' => 'Искать логотип', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Логотипы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
    register_post_type('videorev', [
        'label' => null,
        'labels' => [
            'name' => 'Видеоотзывы', // основное название для типа записи
            'singular_name' => 'Видеоотзывы', // название для одной записи этого типа
            'add_new' => 'Добавить отзыв', // для добавления новой записи
            'add_new_item' => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование отзыва', // для редактирования типа записи
            'new_item' => 'Новый отзыв', // текст новой записи
            'view_item' => 'Смотреть отзыв', // для просмотра записи этого типа.
            'search_items' => 'Искать отзыв', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Видеоотзывы', // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

if ( ! function_exists( 'unicredit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unicredit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on unicredit, use a find and replace
		 * to change 'unicredit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unicredit', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'Main-menu' => esc_html__( 'Верхнее меню', 'unicredit' ),
				'Product-menu' => esc_html__( 'Меню продуков', 'unicredit' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'unicredit_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;

add_action('customize_register', function($customizer) {

    $customizer->add_section(

        'section_one', array(

            'title' => 'Контактные данные',

            'description' => '',

            'priority' => 11,

        )

    );

    $customizer->add_setting('phone',

        array('default' => '+375 29 55-55-189')

    );

    $customizer->add_control('phone', array(

            'label' => 'Телефон',

            'section' => 'section_one',

            'type' => 'text',

        )

    );

    $customizer->add_setting('email',

        array('default' => 'unicredit@mail.ru')

    );

    $customizer->add_control('email', array(

            'label' => 'e-mail',

            'section' => 'section_one',

            'type' => 'email',

        )

    );
    $customizer->add_setting('adress',

        array('default' => 'г. Могилев, ул. Первомайская 107')

    );

    $customizer->add_control('adress', array(

            'label' => 'Адрес',

            'section' => 'section_one',

            'type' => 'text',

        )

    );
    $customizer->add_setting('telegram',

        array('default' => 'url')

    );

    $customizer->add_control('telegram', array(

            'label' => 'telegram',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('viber',

        array('default' => 'url')

    );

    $customizer->add_control('viber', array(

            'label' => 'viber',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('whatsapp',

        array('default' => 'url')

    );

    $customizer->add_control('whatsapp', array(

            'label' => 'whatsapp',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('graph',

        array('default' => 'Пн - Вс с 9:00 до 21:00')

    );

    $customizer->add_control('graph', array(

            'label' => 'График работы',

            'section' => 'section_one',

            'type' => 'еуче',

        )

    );
    $customizer->add_setting('otzovik',

        array('default' => 'url')

    );

    $customizer->add_control('otzovik', array(

            'label' => 'Отзовик',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('yandex-rev',

        array('default' => 'url')

    );

    $customizer->add_control('yandex-rev', array(

            'label' => 'Яндекс Отзывы',

            'section' => 'section_one',

            'type' => 'url',

        )

    );
    $customizer->add_setting('yell',

        array('default' => 'url')

    );

    $customizer->add_control('yell', array(

            'label' => 'Yell.ru',

            'section' => 'section_one',

            'type' => 'url',

        )

    );

});

add_action( 'after_setup_theme', 'unicredit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unicredit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unicredit_content_width', 640 );
}
add_action( 'after_setup_theme', 'unicredit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unicredit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Форма на слайдере', 'unicredit' ),
			'id'            => 'slider-sidebar',
			'description'   => esc_html__( 'Перенесите виджет сюда', 'unicredit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    register_sidebar(
        array(
            'name'          => esc_html__( 'Опросник', 'unicredit' ),
            'id'            => 'quize',
            'description'   => esc_html__( 'Перенесите опросник сюда', 'unicredit' ),
            'before_widget' => '<section id="%1$s" class="quize %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="widget-title">',
            'after_title'   => '</div>',
        )
    );
}
add_action( 'widgets_init', 'unicredit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unicredit_scripts() {
	wp_enqueue_style( 'unicredit-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'unicredit-style', 'rtl', 'replace' );
//    wp_enqueue_script('newscript', get_template_directory_uri() . '/dist/js/common.js');
//	wp_enqueue_script( 'unicredit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'unicredit_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//обратная хронология при выводе записей start
function wph_ascending_order($query) {
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    $query->set('order', 'ASC');
}
add_action('pre_get_posts', 'wph_ascending_order');
//обратная хронология при выводе записей end

//Remove JQuery migrate

function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
// Check whether the script has any dependencies

            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );
}