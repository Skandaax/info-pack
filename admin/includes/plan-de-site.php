<?php

//*******************************************************************************/
//***************************[plan_du_site]**************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos 
//fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//Cette fonction sert à relier le fichier CSS au shortcode [plan_du_menu]
function add_css() {
    wp_register_style('plan_menu', plugins_url('css/styles.css', __FILE__));
    wp_enqueue_style('plan_menu');
}

// Fonction qui va permettre d'afficher le menu en lien textuel.
function Plan_Menu( $atts, $content=null ) {
    ob_start();

    //je recupere les parametres du shortcode
    extract(shortcode_atts(array(
        'menu' => '', //Accepte un ID de menu, un slug, un nom ou objet.
        'menu_id' => 'ID_du_menu', //L'ID qui est appliqué à l'élément ul qui forme le menu. 
        'menu_class' => 'class_du_menu' //Classe appliquée au conteneur. Par défaut 'menu- {menu slug} -container'

    ), $atts, 'Plan_Menu'));

    //Menu sans Hierarchie
        $menu = '';
        ?>
        <div class="wrap" id="menu">
        <?php
        $menu .= '<h3>'.__('Menu'). '</h3>'; //Titre du paragraphe
        $menu .= '<ul>'; // Ouverture des balises ul
        $menu .= wp_list_pages('title_li=&echo=0'); //Insertion du menu principal avec insertion de puces
        $menu .= '</ul>'; // Fermeture des balises ul
        ?>
        </div>
        <?php
        
        $m = ob_get_clean();
        return $menu .$m;

}

//Sortcode a mettre dans l'une des pages de son site pour faire apparaitre le plan du menu
// add_shortcode('plan_du_menu', 'Plan_Menu');
add_shortcode('plan_du_menu', 'Plan_Menu');

//*******************************************************************************/

