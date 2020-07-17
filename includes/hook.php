<?php

//*******************************************************************************/
//***************************[Hooks]*********************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//Les hooks d'action de mon menu et sous menu de mon extension
// J'ajoute un hook pour afficher mon menu principal de mon extention
//J'utilise des hooks pour mon sous menu */
add_action('admin_menu', 'ip_Add_My_Admin_Link');
add_action('admin_menu', 'ip_add_sub_menu');
add_action('admin_menu', 'ip_add_sub_menu_bread');
add_action('admin_menu', 'ip_add_sub_menu_maps');
add_action('admin_menu', 'ip_add_sub_menu_mails');
add_action('admin_menu', 'ip_add_sub_menu_plan');



