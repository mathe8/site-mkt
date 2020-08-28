<?php
function registraClientes(){

    $nomeSingular = 'Cliente';
    $nomePlural = 'Clientes';
    $logo = 'logomarca';

    $labels = [
        'name'=>$nomePlural,
        'singular_name'=>$nomeSingular,
        'add_new'=> 'Adicionar '. $nomeSingular,
        'not_found'=> $nomeSingular . 'não encontrado.',
        'add_new_item'=>'Adicionar novo '. $nomeSingular,
        'view_item'=> 'Visualizar'. $nomeSingular,
        'edit_item'=>'Editar '. $nomeSingular,
        'all_items'=>'Todos os '. $nomePlural,
        'featured_image'=> 'Logo do '.$nomeSingular,
        'set_featured_image' => 'Definir ' . $logo,
        'remove_featured_image'=> 'Remover ' . $logo,
        'use_featured_image'=>'Usar esta ' . $logo
    ];
    $supports = [
        'title', 
        'editor',
        'thumbnail'
    ];
    $args = [
        'public' => true,
        'supports' => $supports,
        'labels' => $labels,
        'menu_icon'=> 'dashicons-buddicons-buddypress-logo'
    ];
    register_post_type( 'clientes', $args);

}
add_action( 'init', 'registraClientes' );