<?php


// підключення стилів і скриптів
add_action( 'wp_enqueue_scripts', 'tsuhli_scripts_action' );

function tsuhli_scripts_action(){
		
		wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css');
		wp_enqueue_style( 'style', get_template_directory_uri().'./assets/css/style.min.css' );

		wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/main.min.js', array(), 'null', true );
}


// підключення меню
add_action('after_setup_theme', 'tsuhli_setup');

function tsuhli_setup(){
    add_theme_support('menus');

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'footer-bottom-menu' => __('Footer Bottom Menu')
        )  
        );
}


 add_theme_support(  'custom-logo' );

   
// відображення зображень у заданому розмірі
add_image_size('custom-size', 300, 300, true);

// додавання зображень для постів
add_theme_support( 'post-thumbnails' );


// підключення сайдбару
add_action( 'widgets_init', 'register_tsugli_sidebar' );

function register_tsugli_sidebar(){
	register_sidebar( array(
		'name' => 'Сайдбар',
		'id' => 'sidebar',
		'before_widget' => '<li class="sidebar-block">',
		'after_widget' => '</li>',
		) );
}




 // категорії сайдбару (назва) - додавання <span>
function custom_category_output($output) {
    return preg_replace('/<a([^>]*)>(.*?)<\/a>/', '<a$1><span class="category-name">$2</span></a>', $output);
}
add_filter('wp_list_categories', 'custom_category_output');




// категорії сайдбару (кількість) - додавання <span>
function remove_category_count_parentheses($output) {
    return preg_replace('/<\/a>\s*\((\d+)\)/', ' <span class="category-count">$1</span></a>', $output);
}
add_filter('wp_list_categories', 'remove_category_count_parentheses');


