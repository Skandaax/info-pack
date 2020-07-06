<?php

/*
 * Ajout d'un nouveau lien dans le menu d'administration
 * /

// J'ajoute un hook pour afficher le lien de mon extention*/
add_action( 'admin_menu', 'ip_Add_My_Admin_Link');

 // Ajout d'un nouveau lien dans le menu d'administration*/
 function ip_Add_My_Admin_Link() {
     add_menu_page (
         'Reglage', //Titre de la page
         'Info-Pack', //Texte du lien du menu
         'manage_options', //Exigence de capacité pour voir le lien
         'info-pack/admin/admin.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
     );
 }



