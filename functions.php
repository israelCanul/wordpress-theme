<?php  



function initializeTheme(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    
    //se carga el framework del tema que en este caso es MaterializeCss 
    wp_enqueue_style( 'Material-css','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css');
    wp_enqueue_script( 'Material-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', array('jquery'),4, true );
	//carga de iconos en el tema
	wp_enqueue_style( 'material-icons-js', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	wp_enqueue_style( 'narilearsi-css',get_template_directory_uri().'/css/narilearsi.css');
	//carga de js del tema
	wp_enqueue_script( 'javascript-narilearsi-js', get_stylesheet_directory_uri().'/js/javascript-narilearsi.js', array('jquery'),4, true );


	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','initializeTheme' );

//---------------------------------------------------------------------
// REGISTRAMOS EL MENU
//--
register_nav_menus( array(
    'menu-principal' => __('Menu Principal del Theme narilearsi', 'amk')
) );



