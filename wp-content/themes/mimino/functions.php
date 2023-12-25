<?php
/**
 * Mimino functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mimino
 */

function mimino_setup()
{
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	// add_theme_support('custom-logo');

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

	register_nav_menus(
		array("header_nav" => "Header Navigation")
	);


}
add_action('after_setup_theme', 'mimino_setup');


function mimino_scripts()
{
	//Подключение стилей
	wp_enqueue_style('mimino-styles', get_template_directory_uri() . '/dist/main.css', array(), "_S_VERSION");
	wp_enqueue_script('mimino-main-js', get_template_directory_uri() . '/dist/main.js', array(), "_S_VERSION");

	//Подключение скриптов, файлов для работы слайдеров


	wp_enqueue_style('mimino-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), "_S_VERSION");

	wp_enqueue_style('mimino-slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), "_S_VERSION");


	wp_enqueue_script('jquery1', "//code.jquery.com/jquery-1.11.0.min.js", array('jquery'), "_S_VERSION", true);

	wp_enqueue_script('jquery2', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jquery'), "_S_VERSION", true);

	wp_enqueue_script('slick-min', "//code.jquery.com/jquery-migrate-1.2.1.min.js", array('jquery'), "_S_VERSION", true);



	wp_enqueue_script('mimino-script-restaurant', get_template_directory_uri() . '/src/js/slider-restaurant.js', array('jquery'), "_S_VERSION", true);

	wp_enqueue_script('mimino-script-restaurant-menu', get_template_directory_uri() . '/src/js/slider-restaurant-menu.js', array('jquery'), "_S_VERSION", true);

	wp_enqueue_script('mimino-slider', get_template_directory_uri() . '/src/js/slider.js', array('jquery'), "_S_VERSION", true);

	wp_enqueue_script('mimino-slider-hotel', get_template_directory_uri() . '/src/js/slider-hotel.js', array('jquery'), "_S_VERSION", true);

	//Подключение хедер-скролл
	wp_enqueue_script('scroll-header', get_template_directory_uri() . '/src/js/scroll-header-btn-top.js', array(), "_S_VERSION", true);

	// Подключение модалок, паттернов для них


	wp_enqueue_script('modal', get_template_directory_uri() . '/src/js/modal.js', array(), "_S_VERSION", true);


	wp_enqueue_script('modal-menu-pattern', get_template_directory_uri() . '/src/js/data-menu.js', array(), "_S_VERSION", true);


	wp_enqueue_script('modal-pattern',
		get_template_directory_uri() . '/src/js/imask.js', array(), "_S_VERSION", true);

	//Подключение мобильного меню

	wp_enqueue_script('modal-mobile-menu',
		get_template_directory_uri() . '/src/js/mobile-menu.js', array(), "_S_VERSION", true);


}
add_action('wp_enqueue_scripts', 'mimino_scripts');


//добавление доболнительного post-type

function mimino_register_post_type()
{
	$args = array(
		'label' => esc_html__("restaurant-menu"),

		'labels' => [
			'name' => 'restaurant-menu', // основное название для типа записи
			'add_new' => 'Добавить блюдо', // для добавления новой записи
			'add_new_item' => 'Добавление новых блюд', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item' => 'Редактирование блюд', // для редактирования типа записи
			'new_item' => 'Новое блюдо', // текст новой записи
			'view_item' => 'Смотреть меню', // для просмотра записи этого типа.
			'search_items' => 'Искать', // для поиска по этим типам записи
			'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name' => 'restaurant-menu', // название меню
		],
		'description' => '',
		'public' => true,
		'publicly_queryable' => true, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		'show_ui' => true, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu' => true, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest' => null, // добавить в REST API. C WP 4.7
		'rest_base' => null, // $post_type. C WP 4.7
		'menu_position' => null,
		'menu_icon' => "dashicons-carrot",
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical' => false,
		'supports' => ['title', 'editor', 'author', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies' => [],
		'has_archive' => true,
		'rewrite' => array("slug" => 'restaurant-menu'),
		'query_var' => true,


	);


	register_post_type('restaurant-menu', $args);
}
add_action('init', 'mimino_register_post_type');

# Добавление возможноси загрузки svg изображений в WP

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext' => $filetype['ext'],
		'type' => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');