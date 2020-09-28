<?php

//*******************************************************************************/
//***************************[Options]*******************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//*******************************************************************************/
//***************************[Template]******************************************/
//*******************************************************************************/
?>

<!DOCTYPE html PUBLIC >
<html lang="fr" >
  <head>
    <!-- meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php
    
//****Bootstrap JS****
wp_register_script('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
wp_enqueue_script('prefix_bootstrap');

//****Bootstrap CSS****
wp_register_style('prefix_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
wp_enqueue_style('prefix_bootstrap');
 
?>"  type="text/css" media="all"/>

    <title>Options</title>
  </head>

<body>
    
<nav class="wrap">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#general" class="nav-link active" data-toggle="tab">Général</a>
        </li>
        <li class="nav-item">
            <a href="#ip" class="nav-link " data-toggle="tab">Hardware</a>
        </li>
        <li class="nav-item">
            <a href="#post" class="nav-link" data-toggle="tab">Publication</a>
        </li>
        <li class="nav-item">
            <a href="#plan" class="nav-link" data-toggle="tab">Plan de site</a>
        </li>
    </ul>
</nav>

<div class="tab-content" class="wrap">
    <div class="tab-pane fade show active" id="general">
        <br>
        <p>Passer à l'onglet suivant !</p>
    </div>
    <div class="tab-pane fade" id="ip">
        <br>
            <h2>My Ip</h2>
            <br>
                <p>
                    <strong>Pour l'utilisation de cet outil : </strong>
                </p>
                <p>
                    <strong>Montrer l'IP du visiteur</strong>
                </p>
                <p>
            Shortcode qui vous permet d'afficher l'IP du visiteur
            <input type="text" value="[my_ip]" readonly="readonly" />
        </p>
    </div>
    <div class="tab-pane fade" id="post">
        <br>
    <h2>My Post</h2>
        <br>
        <p><strong>Pour l'utilisation de ces outils : </strong></p>
        <p><strong>Liste d'articles</strong></p>
        <p>
            Shortcode qui vous permet d'afficher un liste d'articles
            <input type="text" value="[post]" readonly="readonly" />
        </p>
            <p><strong>Articles récents</strong></p>
        <p>
            Shortcode qui vous permet d'afficher les récents articles
            <input type="text" value="[my_post]" readonly="readonly" />
        </p>
    </div>
    <div class="tab-pane fade" id="plan">
        <br>
            <h2>My Plan</h2>
        <br>
            <p><strong>Pour l'utilisation de cet outil : </strong></p>
            <p><strong>Menu</strong></p>
        <p>
            Shortcode qui vous permet d'afficher les liens textuels du menu 
            <input type="text" value="[plan_du_menu]" readonly="readonly" />
        </p>
    </div>
</div>

</body>
</html>