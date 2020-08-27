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
 function ip_Add_My_Admin_Link() {
     add_menu_page (
         'Info-Pack', //Titre de la page
         'Info-Pack', //Texte du lien du menu
         'manage_options', //Exigence de capacité pour voir le lien
         'info-pack/admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
     );
 }

// AJout d'un sous menu réglage, dans l'extention Info-Pack*/
  function ip_add_sub_menu() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Options', //Titre de la page du sous menu
       'Options', //Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'info-pack/admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}

function support() {
    add_submenu_page(
       'info-pack/admin/admin.php', //lien du menu parent
       'Support', //Titre de la page du sous menu
       'Support', //Texte du lien du sous menu
       'manage_options', //Exigence de capacité pour voir le lien
       'https://www.inforaz.com/assistance/' // Le 'slug' - fichier à afficher en cliquant sur le lien
    );
}
