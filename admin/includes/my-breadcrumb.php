<?php

//*******************************************************************************/
//***************************[My Breadcrumb]*******************************************/
//*******************************************************************************/

//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/***************************************************²*************/
/***Création d'une fonction simple du fil d'ariane****************/
function fil_ariane($atts, $content = null) {
    ob_start();

    //je recupere les parametres du shortcode
    extract(shortcode_atts(array(
        'numberposts' => 0, //Nombre de méssages à récuperer
        'category' => 0, //ID de catégories ou liste d'ID séparé par des virgules.
        'orderby' => 'date', // Organisé par date
        'post_type' => 'post', //Type de post(articles)

    ), $atts, 'categorie'));

    global $post;

    if (! is_front_page()) {
        $fil = '<div id="fil">vous êtes ici : ';
        $fil.= '<a href="'.get_bloginfo('wpurl').'"';
        $fil.= get_bloginfo('name');
        $fil.= '</a>';

        $parents = array_reverse(get_ancestors($post->ID,'page'));
        foreach($parents as $parent) {
            $fil.='<a href="' .get_permalink($parent) .'">';
            $fil.= get_the_title($parent);
            $fil.= '</a>';
        }
            $fil.= $post->post_title;

            $fil.='</div>';
    }

    return $fil;
}

/***************************************************²***************
****Fonction qui est appelé dans un modèle de page servant**********
****à l'affichage du thème*****************************************/
?>
<div class="site-content-contain">

<div id="content" class="site-content">

<?php


/***************************************************²***************/
//Shortcode qui permet d'afficher le fil d'ariane sur l'une des page de votre site
//[my_breadcrumb]
add_shortcode('my_breadcrumb', 'fil_ariane');