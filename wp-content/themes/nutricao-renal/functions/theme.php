<?php

//ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

add_filter('show_admin_bar', '__return_false');

// cria pagina de opção do tema (junto com ACF)
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title'	=> 'Opções',
		'menu_slug' 	=> 'opcoes-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ));
    
}
/* ativa post thumbnails e especifica padrão para tamanho de imagem */
add_theme_support('post-thumbnails');



//Registrando menu
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header' ));
    register_nav_menu('footer-menu',__( 'Footer' ));
}
  add_action( 'init', 'register_my_menu' );

//Adicionando classe ao <li> do menu
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//Adicionando classe ao <a> do menu
function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="o-menu__item__link js-menu-item"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

// Tamanho do excerpt
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}
