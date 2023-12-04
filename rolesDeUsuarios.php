
            // CAMBIAR LOS NOMBRES DE LOS ROLES //

// Cambiar el nombre del rol "Suscriptor" a "Cliente"
// Cambiar el nombre del rol "Autor" a "Agencia"

<?php

function cambiar_nombres_roles() {
    global $wp_roles;
    
    // SUSCRIPTOR > CLIENTE
    if (isset($wp_roles->roles['subscriber'])) {
        $wp_roles->roles['subscriber']['name'] = 'Cliente';
        $wp_roles->role_names['subscriber'] = 'Cliente';
    }
    
    // AUTOR > AGENCIA
    if (isset($wp_roles->roles['author'])) {
        $wp_roles->roles['author']['name'] = 'Agencia';
        $wp_roles->role_names['author'] = 'Agencia';
    }
}

add_action('init', 'cambiar_nombres_roles');

?>