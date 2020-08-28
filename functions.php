<?php
function adiciona_recurso_tema(){
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');

}
add_action( 'after_setup_theme','adiciona_recurso_tema');

require 'functions/registraCliente.php';

require 'functions/registraServico.php';

function registrar_menu(){
    register_nav_menu( 'menu-nav', 'Menu de navegação' );
}
add_action( 'init', 'registrar_menu' );