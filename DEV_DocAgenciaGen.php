
// Función para organizar archivos por agencia

<?php


function custom_upload_dir($uploads) {
    if (isset($_REQUEST['post_id']) || isset($_REQUEST['type'])) {
        $post_id = $_REQUEST['post_id'];
        if (empty($post_id)) {
            $post_id = $_REQUEST['post_ID'];
        }
        if ($post_id) {
            $post = get_post($post_id);
            $user_id = $post->post_author;
            $user_info = get_userdata($user_id);

            // Verificar si el usuario tiene el rol 'agencia_'
            if ($user_info && in_array('agencia_', $user_info->roles)) {
                $uploads['subdir'] = '/agencias/' . $user_info->user_login;
            }
        }
    }
    return $uploads;
}

add_filter('upload_dir', 'custom_upload_dir');
