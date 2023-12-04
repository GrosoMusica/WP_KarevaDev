
<?php

function agregar_metabox() {
    add_meta_box(
        'metabox_programas',
        'Programas',
        'contenido_metabox',
        'viajes_post_type',
        'normal',
        'high'
    );
}

function contenido_metabox($post) {
    // Obtiene los programas actuales
    $programas = get_post_meta($post->ID, 'programas', true);
    ?>
    <div>
        <?php
        if ($programas) {
            foreach ($programas as $programa) {
                echo '<div>
                        <div>
                            <p>Nombre: ' . esc_html($programa['nombre_programa']) . '</p>
                            <p>Descripción: ' . esc_html($programa['descripcion_programa']) . '</p>
                        </div>
                    </div>';
            }
        }
        ?>
        <div id="nuevo_programa">
            <label for="nombre_programa">Nombre del Programa:</label>
            <input type="text" name="nombre_programa" id="nombre_programa">

            <label for="descripcion_programa">Descripción del Programa:</label>
            <textarea name="descripcion_programa" id="descripcion_programa"></textarea>

            <button id="agregar_pestaña" name="agregar_pestaña" type="submit" value="true"> + Agregar Programa </button>
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $('#agregar_pestaña').on('click', function(e) {
                e.preventDefault();

                // Obtiene los valores ingresados
                var nombrePrograma = $('#nombre_programa').val();
                var descripcionPrograma = $('#descripcion_programa').val();

                // Agrega el nuevo programa a la lista
                if (nombrePrograma && descripcionPrograma) {
                    var programaHtml = '<div><div><p>Nombre: ' + nombrePrograma + '</p><p>Descripción: ' + descripcionPrograma + '</p></div></div>';
                    $('#nuevo_programa').before(programaHtml);

                    // Limpia los campos
                    $('#nombre_programa').val('');
                    $('#descripcion_programa').val('');
                }
            });
        });
    </script>
    <?php
}

function guardar_datos($post_id) {
    // No es necesario guardar datos aquí, ya que se manejan dinámicamente con JavaScript
}

add_action('add_meta_boxes', 'agregar_metabox');
add_action('save_post', 'guardar_datos');
