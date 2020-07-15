<?php

//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//La classe My Gmap regroupe les fonctionx principals de l'extension
if(!class_exists("My_Gmap")) {
    class My_Gmap {
        //Cette fonction sert à créer une table dans la base de données
        function gmap_install() {

        }
        function gmap_uninstall() {

        }
        function init() {

        }
        function gmap_admin_page() {
            
        }
        function gmap_admin_header() {

        }
        function shortcode() {

        }
    }
}