<?php

/*
 * Ajout d'un nouveau lien dans le menu d'administration
 * /

// J'ajoute un hook pour afficher le lien de mon extention*/
add_action( 'admin_menu', 'ip_Add_My_Admin_Link');

 // Ajout d'un nouveau lien dans le menu*/
 function ip_Add_My_Admin_Link() {
     add_menu_page (
         'Réglages', //Titre de la page
         'Info-Pack', //Texte du lien du menu
         'manage_options', //Exigence de capacité pour voir le lien
         'admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
     );
 }

 function Info_pack_admin_page() {
    require_once ('../admin.php');
}