<?php

function viajes_post_type() {

$labels = array(
	'name'                  => _x( 'Viajes', 'Post Type General Name', 'viajestext_domain' ),
	'singular_name'         => _x( 'Viaje', 'Post Type Singular Name', 'viajestext_domain' ),
	'menu_name'             => __( 'Viajes', 'viajestext_domain' ),
	'name_admin_bar'        => __( 'Viajes', 'viajestext_domain' ),
	'archives'              => __( 'Viaje', 'viajestext_domain' ),
	'attributes'            => __( 'Atributos del viaje', 'viajestext_domain' ),
	'parent_item_colon'     => __( 'Viajes', 'viajestext_domain' ),
	'all_items'             => __( 'Todos', 'viajestext_domain' ),
	'add_new_item'          => __( 'Agregar viaje nuevo', 'viajestext_domain' ),
	'add_new'               => __( 'Agregar', 'viajestext_domain' ),
	'new_item'              => __( 'Nuevo', 'viajestext_domain' ),
	'edit_item'             => __( 'Editar', 'viajestext_domain' ),
	'update_item'           => __( 'Actualizar', 'viajestext_domain' ),
	'view_item'             => __( 'Ver viaje', 'viajestext_domain' ),
	'view_items'            => __( 'Ver viajes', 'viajestext_domain' ),
	'search_items'          => __( 'Buscar', 'viajestext_domain' ),
	'not_found'             => __( 'No Encontrado', 'viajestext_domain' ),
	'not_found_in_trash'    => __( 'No envontrado en papelera', 'viajestext_domain' ),
	'featured_image'        => __( 'Imagen destacada', 'viajestext_domain' ),
	'set_featured_image'    => __( 'Asignar imagen', 'viajestext_domain' ),
	'remove_featured_image' => __( 'Remover imagen', 'viajestext_domain' ),
	'use_featured_image'    => __( 'Usar Imagen', 'viajestext_domain' ),
	'insert_into_item'      => __( 'Insertar', 'viajestext_domain' ),
	'uploaded_to_this_item' => __( 'Subir a viajes', 'viajestext_domain' ),
	'items_list'            => __( 'Lista viajes', 'viajestext_domain' ),
	'items_list_navigation' => __( 'Navegar viajes', 'viajestext_domain' ),
	'filter_items_list'     => __( 'Filtrar viajes', 'viajestext_domain' ),
);
$args = array(
	'label'                 => __( 'Viaje', 'viajestext_domain' ),
	'description'           => __( 'Gestionar todos los viajes', 'viajestext_domain' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'thumbnail', 'custom-fields' ),
	'taxonomies'            => array(),
	'hierarchical'          => false,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_position'         => 5,
	'menu_icon'             => 'dashicons-airplane',
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => true,
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'page',
);
register_post_type( 'viajes_post_type', $args );
}
add_action( 'init', 'viajes_post_type', 0 );


