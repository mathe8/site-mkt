<?php
function adiciona_recurso_tema(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');

}
add_action( 'after_setup_theme','adiciona_recurso_tema');


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

function registraServicos(){
    $nomeSingular = 'Serviço';
    $nomePlural = 'Serviços';
    $Imagem = 'Imagem';

    $labels = [
        'name'=>$nomePlural,
        'singular_name'=>$nomeSingular,
        'add_new'=> 'Adicionar '. $nomeSingular,
        'not_found'=> $nomeSingular . 'não encontrado.',
        'add_new_item'=>'Adicionar novo '. $nomeSingular,
        'view_item'=> 'Visualizar'. $nomeSingular,
        'edit_item'=>'Editar '. $nomeSingular,
        'all_items'=>'Todos os '. $nomePlural,
        'featured_image'=> 'Imagem do '.$nomeSingular,
        'set_featured_image' => 'Definir ' . $Imagem,
        'remove_featured_image'=> 'Remover ' . $Imagem,
        'use_featured_image'=>'Usar esta ' . $Imagem
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
        'menu_icon'=> 'dashicons-desktop'
    ];

    register_post_type( 'servicos', $args);
}

add_action( 'init', 'registraServicos' );

function registrar_menu(){
    register_nav_menu( 'menu-nav', 'Menu de navegação' );
}
add_action( 'init', 'registrar_menu' );