<?php

/*
 * Ajout d'un nouveau lien dans le menu d'administration
 * /

// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'*/
add_action( 'admin_init', 'ip_Add_My_Admin_Link' );

 // Ajout d'un nouveau lien dans le menu*/
 function ip_Add_My_Admin_Link() {
     add_menu_page (
         'Option', //Titre de la page
         'Info-Pack', //Texte du lien du menu
         'manage_options', //Exigence de capacité pour voir le lien
         'Includes/info-pack.php' // Le 'slug' - fichier à afficher en cliquant sur le lien
     );
 }

