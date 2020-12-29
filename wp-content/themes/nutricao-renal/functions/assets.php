<?php
/* --------------------------------------------------
Funções de <?php echo get_template_directory_uri();?>/assets
-------------------------------------------------- */
	// remove wp embed
   function my_deregister_scripts(){
   	wp_deregister_script( 'wp-embed' );
   }
   add_action( 'wp_footer', 'my_deregister_scripts' );

// Carrega Scripts, CSS e Google Font no header.php
add_action('wp_enqueue_scripts', function(){

	
	// Remove jQuery do WP
	wp_deregister_script('jquery');

	/*if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery'); 
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.0.min.js',  array(), '3.5.0'); 
        wp_enqueue_script('jquery');
	}*/

	//CSS Principal
	wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), NULL, 'all');
	wp_enqueue_style('style');

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), NULL, 'all');
    wp_enqueue_style('animate');
    
    wp_register_style('slide', get_template_directory_uri() . '/css/slide.css', array(), NULL, 'all');
    wp_enqueue_style('slide');

    
    wp_register_style('extras', get_template_directory_uri() . '/css/extras.css', array(), NULL, 'all');
    wp_enqueue_style('extras');

    
    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), NULL, 'all');
    wp_enqueue_style('font-awesome');

    
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), NULL, 'all');
    wp_enqueue_style('animate');
    
    wp_register_style('grids', get_template_directory_uri() . '/css/grids.css', array(), NULL, 'all');
    wp_enqueue_style('grids');

	wp_register_style('style-new', get_template_directory_uri() . '/css/new.css', array(), NULL, 'all');
    wp_enqueue_style('style-new');
    

  
	
});

//Carrega Script, CSS no footer.php
add_action('wp_footer', function(){

    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '4.5.0');
	wp_enqueue_script('jquery');
	  
	// vendor js
	wp_register_script('compressed', get_template_directory_uri() . '/js/compressed.js', array(), rand(), TRUE);
    wp_enqueue_script('compressed');
    
	wp_register_script('slider', get_template_directory_uri() . '/js/slider.js', array(), rand(), TRUE);
    wp_enqueue_script('slider');
    
	wp_register_script('menu', get_template_directory_uri() . '/js/menu.js', array(), rand(), TRUE);
    wp_enqueue_script('menu');
    
    
	wp_register_script('pointcom_mask', get_template_directory_uri() . '/js/pointcom_mask.js', array(), rand(), TRUE);
    wp_enqueue_script('pointcom_mask');
    
    
	wp_register_script('jquery-mask', get_template_directory_uri() . '/js/jquery-mask-plugin.js', array(), rand(), TRUE);
    wp_enqueue_script('jquery-mask');
    
    
});