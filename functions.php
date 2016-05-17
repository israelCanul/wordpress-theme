<?php  



function initializeTheme(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    //se carga el framework del tema que en este caso es MaterializeCss 
    wp_enqueue_style( 'bootstrap-css','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css');
    wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js', array('jquery'),4, true );
	//carga de iconos en el tema
	wp_enqueue_style( 'bootstrap-js', 'https://fonts.googleapis.com/icon?family=Material+Icons');
}
add_action('wp_enqueue_scripts','initializeTheme' );

//---------------------------------------------------------------------
// REGISTRAMOS EL MENU
//--
register_nav_menus( array(
    'menu-principal' => __('Menu Principal del Theme narilearsi', 'amk')
) );



