<?php

//-------------------------------------------------------------------------------/
//-----------------------------[My POST]-----------------------------------------/
//-------------------------------------------------------------------------------/

//--- Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//*******************************************************************************/
//--- Fonction qui va me permettre d'afficher les aticles. par cétégories
function list_post($atts, $content = null) {
    ob_start();

    //--- je recupere les parametres du shortcode
    
    extract(shortcode_atts(array(
        'numberposts' => 16, // Nombre de post à récuperer
        'category' => 0, // ID de catégories ou liste d'ID séparé par des virgules.
        'orderby' => 'date', // Organisé par date
        'post_type' => 'post', // Type de post(articles)

    ), $atts, 'list_post'));

    //--- Définie le tableau d'argument d'une requête
    $args = array(
        'numberposts' => $numberposts,
        'post_type' => $post_type
    );

    $custom_posts = get_posts($args);

    //--- Template et conditions pour afficher la liste d'articles
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

//--- Sortcode a mettre dans l'une des pages de son site ou dans un widget pour faire apparaitre La liste d'articles
//--- [articles]
add_shortcode('post', 'list_post');

//*********************************************************************************************/
//--- Fonction qui va me permettre d'afficher les récents aticles.
function My_post($atts, $content = null) {
    ob_start();

    //--- je recupere les parametres du shortcode
    
    extract(shortcode_atts(array(
        'numberposts' => 5, //Nombre de méssages à récuperer
        'category' => 0, //ID de catégories ou liste d'ID séparé par des virgules.
        'orderby' => 'date', // Organisé par date
        'post_type' => 'post', //Type de post(articles)

    ), $atts, 'my_post'));

    global $post;
    $tmp_post = $post;
    $myposts = get_posts('showposts=' .$numberposts.'$orderby='.$orderby.'$post_type='.$post_type.'&category='.$category);
    $a = '<ul>';
    foreach($myposts as $post); {
        setup_postdata($post); 

        //--- Les articles récents vont s'afficher dans le template ci-dessous
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

//--- Sortcode a mettre dans l'une des pages de son site ou dans un widget pour faire apparaitre Les récents articles
//--- [articles]
add_shortcode('my_post', 'my_post');