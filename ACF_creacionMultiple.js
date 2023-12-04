
jQuery(document).ready(function($) {
    $('#post').on('click', '#agregar_pestaña', function(e) {
        e.preventDefault();

        var post_id = $('#post_ID').val();
        var data = {
            action: 'agregar_nueva_pestaña',
            post_id: post_id,
        };

        $.post(ajaxurl, data, function(response) {
            if (response.success) {
                // Agrega la nueva fila al campo repetidor en el formulario
                $('.acf-field-repeater').find('.acf-repeater tbody').append(response.data);
            }
        });
    });
});


// --- --- --- // AGREGAR JS A FUNCTIONS.PHP // --- --- --- //


// function enqueue_mi_script() {
//     // Registra y encola el script
//     wp_register_script('acf-creacion-multiple', get_template_directory_uri() . '/ACF_creacionMultiple.js', array('jquery'), '1.0', true);
//     wp_enqueue_script('acf-creacion-multiple');

//     // Pasa variables de PHP a JavaScript si es necesario
//     wp_localize_script('acf-creacion-multiple', 'acf_creacion_multiple_vars', array(
//         'ajaxurl' => admin_url('admin-ajax.php'),
//     ));
// }

// add_action('wp_enqueue_scripts', 'enqueue_mi_script');
