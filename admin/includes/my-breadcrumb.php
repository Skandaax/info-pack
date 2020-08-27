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
function fil_ariane(){ 
    global $post; 
  
    if (!is_home()) { 
   
 $fil = 'Vous êtes ici : '; 
 $fil.= '<a href="'.get_bloginfo('wpurl').'">'; 
 $fil.= get_bloginfo('name'); 
 $fil.= '</a> > '; 
     
  $parents = array_reverse(get_ancestors($post->ID,'page')); 
  foreach($parents as $parent){ 
  $fil.='<a href="'.get_permalink($parent).'">'; 
  $fil.= get_the_title($parent); 
  $fil.= '</a> > '; 
  } 
    $fil.= $post->post_title; 
    }         
    return $fil; 
 }

// /***************************************************²***************
// ****Fonction qui est appelé dans un modèle de page servant**********
// ****à l'affichage du thème*****************************************/
?>
<div class="site-content-contain">

<div id="content" class="site-content">

<?php


/***************************************************²***************/
//Shortcode qui permet d'afficher le fil d'ariane sur l'une des page de votre site
//[my_breadcrumb]
// add_shortcode('my_breadcrumb', 'fil_ariane');