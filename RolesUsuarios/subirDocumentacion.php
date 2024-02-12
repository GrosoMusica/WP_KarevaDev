<?php

add_action( 'wpforms_process_complete', 'mover_documentos_a_carpeta_personalizada', 10, 4 );
function mover_documentos_a_carpeta_personalizada( $fields, $entry, $form_data, $entry_id ) {
    // Obtiene el nombre de usuario actual
    $user = wp_get_current_user();
    $nombre_usuario = $user->user_login;

    // Obtiene la ruta del directorio de carga de archivos de WordPress
    $directorio_subida = wp_upload_dir()['basedir'];

    // Crea la ruta completa de la carpeta de destino para el usuario
    $carpeta_usuario = $directorio_subida . '/documentacion/' . $nombre_usuario;

    // Verifica si la carpeta de destino para el usuario no existe, y si no, la crea
    if ( ! file_exists( $carpeta_usuario ) ) {
        wp_mkdir_p( $carpeta_usuario );
    }

    // Itera sobre los campos del formulario para procesar los campos de carga de archivos
    foreach ( $fields as $field ) {
        if ( $field['type'] == 'fileupload' ) {
            // Obtiene el nombre del archivo y su ubicación temporal
            $nombre_archivo = sanitize_file_name( $field['value']['filename'] );
            $ubicacion_temporal = $field['value']['path'];

            // Mueve el archivo desde la ubicación temporal a la carpeta de destino del usuario
            move_uploaded_file( $ubicacion_temporal, $carpeta_usuario . '/' . $nombre_archivo );
        }
    }
}
