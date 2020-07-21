<?php

//*******************************************************************************/
//***************************[My_Plan]**************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos 
//fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


add_action( 'wp_enqueue_scripts', 'add_css' );

// Fonction qui va permettre d'afficher le menu en lien textuel.
function Plan_Menu( $atts, $content = null) {
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
        $menu .= '<h3>'.__(''). '</h3>'; //Titre du paragraphe
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
//[plan_du_menu]
add_shortcode('plan_du_menu', 'Plan_Menu');

//*******************************************************************************/
// Fonction qui va me permettre d'afficher les aticles. par cétégories
function cat($atts, $content = null) {
    ob_start();

    //je recupere les parametres du shortcode
    
    extract(shortcode_atts(array(
        'numberposts' => 0, //Nombre de méssages à récuperer
        'category' => 0, //ID de catégories ou liste d'ID séparé par des virgules.
        'orderby' => 'date', // Organisé par date
        'post_type' => 'post', //Type de post(articles)

    ), $atts, 'cat'));

    //Définie le tableau d'argument d'une requête
    $args = array(
        'numberposts' => $numberposts,
        'post_type' => $post_type
    );

    $custom_posts = get_posts($args);

    //Template et conditions pour afficher la liste d'articles
    if( ! empty( $custom_posts ) ){
		$output = '<ul>';
		foreach ( $custom_posts as $p ){

			$output .= '<li><a href="' 
			. get_permalink( $p->ID ) . '">' 
			. $p->post_title . '</a> ' . '</li>';
		}

		$output .= '</ul>';
	}

return $output ?? '<strong>Sorry. No posts matching your criteria!</strong>';
}

//Sortcode a mettre dans l'une des pages de son site ou dans un widget pour faire apparaitre La liste d'articles
//[articles]
add_shortcode('post', 'cat');

//*******************************************************************************/
// Fonction qui va me permettre d'afficher les récents aticles.
function categorie($atts, $content = null) {
    ob_start();

    //je recupere les parametres du shortcode
    
    extract(shortcode_atts(array(
        'numberposts' => 5, //Nombre de méssages à récuperer
        'category' => 0, //ID de catégories ou liste d'ID séparé par des virgules.
        'orderby' => 'date', // Organisé par date
        'post_type' => 'post', //Type de post(articles)

    ), $atts, 'categorie'));

    global $post;
    $tmp_post = $post;
    $myposts = get_posts('showposts=' .$numberposts.'$orderby='.$orderby.'$post_type='.$post_type.'&category='.$category);
    $a = '<ul>';
    foreach($myposts as $post); {
        setup_postdata($post); 

        //Les articles récents vont s'afficher dans le template ci-dessous
        $a .= '<li><h3><a href="'.get_permalink().'">'.the_title('','',false).'</a></h3></li>';
        $a .= '<a href="'.get_permalink().'">'.get_the_post_thumbnail($id = null, $attr = '' ).'</a>';
        $a .= get_the_excerpt();
        $a .='<p><a href="'.get_permalink().'">Lire la suite... </a></p>';
        $a .= '<hr />';
        $a .= '</li>';

    };
    wp_reset_postdata();
    $post = $tmp_post;
    return $a;  

}

//Sortcode a mettre dans l'une des pages de son site ou dans un widget pour faire apparaitre Les récents articles
//[articles]
add_shortcode('articles', 'categorie');