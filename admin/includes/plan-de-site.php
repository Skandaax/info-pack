<?php

//*******************************************************************************/
//***************************[plan_du_site]**************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos 
//fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function add_css() {
    wp_register_style('plan_du_menu', plugins_url('styles.css', __FILE__));
    wp_enqueu_style('plan_du_menu');
}

// Fonction qui va permettre d'afficher le menu en lien textuel.
function Plan_Menu( $atts, $content=null ) {
    ob_start();

    //je recupere les parametres du shortcode
    extract(shortcode_atts(array(
        'menu' => '', //Accepte un ID de men, un slug, un nom ou objet.
        'menu_id' => '', //L'ID qui est appliqué à l'élément ul qui forme le menu. 
    ), $atts, 'Plan_Menu'));

    //Menu principal
        $menu = '';

        $menu .= '<div class="wrap">';
        $menu .= '<h2>'.__('Menu principal'). '</h2>'; //Titre du paragraphe
        $menu .= '<ul>'; // Ouverture des balises ul
        $menu .= wp_page_menu('title_li=echo=0'); //Insertion du menu principal avec insertion de puces
        $menu .= '</ul>'; // Fermeture des balises ul
        $menu .= '</div>';

        $m = ob_get_clean();
        return $menu .$m;
}

//Sortcode a mettre dans l'une des pages de son site pour faire apparaitre le plan du menu
// add_shortcode('plan_du_menu', 'Plan_Menu');
add_shortcode('plan_du_menu', 'Plan_Menu');

