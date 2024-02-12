<?php

// Crear el nuevo rol de usuario AGENCIA

function crear_rol_agencia() {
    add_role(
        'agencia', // ID del rol
        __('Agencia'), // Nombre del rol
        array(
            'read' => true, // Capacidad para leer contenido
            'edit_posts' => true, // Capacidad para editar sus propios viajes
            'publish_posts' => true, // Capacidad para publicar sus propios viajes
            'delete_posts' => true, // Capacidad para eliminar sus propios viajes
            'edit_published_posts' => true, // Capacidad para editar sus propios viajes publicados
            'delete_published_posts' => true, // Capacidad para eliminar sus propios viajes publicados
            'edit_private_posts' => true, // Capacidad para editar sus propios viajes privados
            'delete_private_posts' => true, // Capacidad para eliminar sus propios viajes privados
            'read_private_posts' => true, // Capacidad para leer sus propios viajes privados
            'upload_files' => true, // Capacidad para subir archivos
            'show_admin_bar_front' => true, // Mostrar barra de administración en el frontend
            'edit_others_posts' => false, // Evitar editar viajes de otros
            'delete_others_posts' => false, // Evitar eliminar viajes de otros
            'edit_posts' => false, // Evitar editar entradas del blog
            'delete_posts' => false, // Evitar eliminar entradas del blog
            // Agregar más capacidades según sea necesario
        )
    );
}
add_action('init', 'crear_rol_agencia');

