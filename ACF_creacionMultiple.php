<?php

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_programas',
        'title' => 'Programas',
        'fields' => array(
            array(
                'key' => 'field_programas',
                'label' => 'Programas',
                'name' => 'programas',
                'type' => 'flexible_content',
                'button_label' => 'Agregar Programa', // Etiqueta del botón de agregar
                'layouts' => array(
                    array(
                        'key' => 'layout_programa',
                        'name' => 'programa',
                        'label' => 'Programa',
                        'display' => 'block',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_nombre',
                                'label' => 'Nombre',
                                'name' => 'nombre_programa',
                                'type' => 'text',
                            ),
                            array(
                                'key' => 'field_descripcion',
                                'label' => 'Descripción',
                                'name' => 'descripcion_programa',
                                'type' => 'textarea',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'viajes_post_type', // Ajusta según tu tipo de publicación
                ),
            ),
        ),
    ));
}