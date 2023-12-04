
<?php

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_viajes_fields',
        'title' => 'Campos Adicionales de Viajes',
        'fields' => array(
            array(
                'key' => 'field_tematica',
                'label' => 'Temática',
                'name' => 'tematica',
                'type' => 'select',
                'choices' => array(
                    'opcion_1' => 'Aventura',
                    'opcion_2' => 'Caminata',
                    'opcion_3' => 'Descanzo',
					'opcion_4' => 'Turismo',d
                ),
                'wrapper' => array(
                    'width' => '30%',
                ),
                'ui' => true,
            ),
            array(
                'key' => 'field_atracciones',
                'label' => 'Atracciones',
                'name' => 'atracciones',
                'type' => 'select',
                'choices' => array(
                    'opcion_a' => 'Teatro',
                    'opcion_b' => 'Cine',
                    'opcion_c' => 'Playa',
                ),
                'wrapper' => array(
                    'width' => '30%',
                ),
                'ui' => true,
            ),
            array(
                'key' => 'field_transporte',
                'label' => 'Transporte',
                'name' => 'transporte',
                'type' => 'select',
                'choices' => array(
                    'opcion_x' => 'Tren',
                    'opcion_y' => 'Bus',
                    'opcion_z' => 'Taxi',
                ),
                'wrapper' => array(
                    'width' => '30%',
                ),
                'ui' => true,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'viajes_post_type',
                ),
            ),
        ),
        'style' => 'seamless',
		'menu_position' => 20, 
    ));

endif;