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
            global $wpdb;
            $table_site = $wpdb->prefix. 'mygmap';
            if($wpdb->get_var("SHOW TABLES LIKE '$table_site'") !=
            $table_site) {
                $sql="CREATE TABLE '$table_site'(
                    'id' BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY , 
                    'titre' TEXT NOT NULL, 
                    'longitude' TEXT NOT NULL,
                    'latitude', TEXT NOT NULL
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
                    require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
                    dbDelta($sql);
            }

            if(class_exists("My_Gmap")) {
                $inst_map = new_Gmap();
            }

            //Ce hook est l'équivalent du hook d'action
            if(isset_map($inst_map)) {
                register_activation_hook(__FILE__, array($ins_map,'gmap_install'));
            }
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