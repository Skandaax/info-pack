<?php

//La page ip-function.php regroupe toutes les fonctions principale de l'extension.*/
//ici je vais mettre les codes require_once pour inclure le fichier.
require_once PLUGIN_DIR_path(__FILE__) . 'includes/hook.php';


//*******************************************************************************/
//***************************[IP function]***************************************/
//*******************************************************************************/

//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

 // Ajout d'un menu dans l'administration*/
 function ip_Add_My_Admin_Link() {
     add_menu_page (
         'Info-Pack', //Titre de la page
         'Info-Pack', //Texte du lien du menu
         'manage_options', //Exigence de capacité pour voir le lien
         'info-pack/admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
     );
 }

// AJout un sous menu réglage, dans l'extention Info-Pack*/
  function ip_add_sub_menu() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Réglages', //Titre de la page du sous menu
       'Réglages', //Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'info-pack/admin/admin.php', // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

// AJout un sous menu My Gmap, dans l'extention Info-Pack*/
function ip_add_sub_menu_maps() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'My Gmap', //Titre de la page du sous menu
       'My Gmap', //Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'info-pack/admin/templates/t-my-gmap.php', // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

// AJout un sous menu My mails, dans l'extention Info-Pack*/
function ip_add_sub_menu_mails() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'My mails', //Titre de la page du sous menu
       'My mails', //Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'info-pack/admin/templates/t-my-mails.php', // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

// AJout un sous menu plan de site , dans l'extention Info-Pack*/
function ip_add_sub_menu_plan() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Plan de site', //Titre de la page du sous menu
       'Plan de site',//Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'info-pack/admin/templates/t-plan-de-site.php', // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}
