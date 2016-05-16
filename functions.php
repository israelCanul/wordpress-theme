<?php  



function initializeTheme(){
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

    wp_enqueue_script( 'customjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'),4, true );

}
add_action('wp_enqueue_scripts','initializeTheme' );

//---------------------------------------------------------------------
// REGISTRAMOS EL MENU
//--
register_nav_menus( array(
    'menu-principal' => __('Menu Principal del Theme narilearsi', 'amk')
) );



