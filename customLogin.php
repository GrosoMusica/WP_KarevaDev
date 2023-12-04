
<?php


// Agregar archivo css al head

function login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . 'custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'login_stylesheet' );


// Redireccionar logo a Home

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Kareva Viajes';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

?>