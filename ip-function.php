<?php

//*******************************************************************************/
//***************************[function]******************************************/
//*******************************************************************************/

//La page ip-function.php regroupe toutes les fonctions principale de l'extension.*/
//ici je vais mettre les codes require_once pour inclure le fichier.
require_once PLUGIN_DIR_path(__FILE__) . 'includes/hook.php';

//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

 // Ajout d'un menu dans l'administration*/
 function ip_admin_Add_My_Admin_Link() {
     add_menu_page (
        'Info-Pack', //Titre de la page
        'Info-Pack', //Texte du lien du menu
        'manage_options', //Exigence de la capacité pour voir le lien
        'info-pack/admin/admin.php', // Le 'slug' - fichier à afficher en cliquant sur le lien
        '', //  Espace entre le slug et l'icône
        plugins_url( 'info-pack/img/icon.png' ), // Affichage de l'icône de l'extension
        3 // La position du menu dans l'administration de Wordpress
     );
 }

// AJout d'un sous menu réglage, dans l'extention Info-Pack*/
  function ip_option_add_sub_menu() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Options', //Titre de la page du sous menu
       'Options', //Texte du lien du sous menu
       'manage_options', //Exigence de la capacité pour voir le lien
       'info-pack/admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

// AJout d'un sous menu réglage, dans l'extention Info-Pack*/
function ip_shortcodes__add_sub_menu() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Shortcodes', //Titre de la page du sous menu
       'Shortcodes', //Texte du lien du sous menu
       'manage_options', //Exigence de la capacité pour voir le lien
       'info-pack/admin/shortcodes.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

function ip_support__add_sub_menu() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Support', //Titre de la page du sous menu
       'Support', //Texte du lien du sous menu
       'manage_options', //Exigence de la capacité pour voir le lien
       'https://www.inforaz.com/assistance/' // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

//Je supprime les menus que je ne vais pas utiliser dans WordPress
function remove_admin_menus() {
    remove_menu_page( 'edit.php?post_type=project' ); //Supprimer menu Projets (DIVI) du back office de Wordpress
    remove_menu_page( 'edit.php?post_type=feedback' ); //Supprimer menu Feedback (DIVI) du back office de Wordpress
}

// //Je supprime les Widgets qui ne servent pas
function wpm_remove_default_widgets() {
    unregister_widget( 'WP_Widget_Recent_Comments' ); // Le widget Commentaires récents
}

