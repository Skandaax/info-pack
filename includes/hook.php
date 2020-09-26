<?php

//*******************************************************************************/
//***************************[Hooks]*********************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//Les hooks d'action de mon menu et sous menu de mon extension
//J'ajoute un hook pour afficher mon menu principal de mon extention
//J'utilise des hooks pour mon sous menu */
add_action('admin_menu', 'ip_Add_My_Admin_Link');
add_action('admin_menu', 'ip_add_sub_menu');
add_action('admin_menu', 'support');

//J'ajoute le hook qui va me permettre de supprimer les menus (DIVI) du backoffice de wordpress
add_action( 'admin_menu', 'remove_admin_menus' );

//J'ajoute le hook qui va me permettre de supprimer les Widgets
add_action('widgets_init', 'wpm_remove_default_widgets');


