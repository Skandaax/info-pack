<?php


//*******************************************************************************/
//***************************[Réglages]*********************************************/
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
    <!-- meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrapcss" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Options</title>
  </head>

<body>
    <br>
<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#general" class="nav-link active" data-toggle="tab">Général</a>
        </li>
        <li class="nav-item">
            <a href="#breadcrumb" class="nav-link" data-toggle="tab">My Breadcrumb</a>
        </li>
        <li class="nav-item">
            <a href="#ip" class="nav-link" data-toggle="tab">My Ip</a>
        </li>
        <li class="nav-item">
            <a href="#post" class="nav-link" data-toggle="tab">My Post</a>
        </li>
        <li class="nav-item">
            <a href="#plan" class="nav-link" data-toggle="tab">My Plan</a>
        </li>
    </ul>
</nav>

<div class="tab-content" class="wrap">
    <div class="tab-pane fade show active" id="general">
        <p></p>
    </div>
    <div class="tab-pane fade" id="breadcrumb">
        <br>
            <h2>My breadcrumb (fil d'Ariane)</h2>
        <br>
            <p>
                <stong>Un peu d'histoire : </strong>Prenez un grand labyrinthe, casez-y, le plus loin possible de la sortie un Minotaure, puis envoyez à Thésée une enveloppe avec photos du précédent et un petit magnétophone qui lui indiquera que sa mission, s'il l'accepte, va consister à aller trucider la chose présentée en photo.
                Voilà posé le point de départ de cette histoire de la Mythologie qui va nous faire rencontrer Ariane et son fameux fil.
                En ce temps-là, donc, il y a en Crète, dont le roi est Minos, le Labyrinthe au fond duquel le Minotaure, monstre à corps d'homme et à tête de taureau, mangeur de chair humaine, dévore chaque année sept garçons et sept filles qu'Athènes livre en Crète pour prolonger la paix avec Minos.
                Afin de faire cesser l'envoi de ce fâcheux tribut, Thésée s'offre pour faire partie de la prochaine livraison avec l'intention de tuer le Minotaure.
                Mais, à supposer que la mission réussisse, le problème est ensuite d'arriver à retrouver la sortie du labyrinthe.
                Heureusement, une fois qu'il a posé le pied en Crète, Ariane, la fille de Minos et demi-soeur du Minotaure, tombe amoureuse de Thésée.
                Aidée par Dédale, le concepteur du Labyrinthe (et accessoirement le père d'Icare), elle lui propose alors un stratagème simple pour retrouver aisément la sortie du piège : dérouler une bobine de fil dont l'extrémité est attachée à un des linteaux de l'entrée, fil dont il suffira de suivre les méandres au retour pour se retrouver à l'air libre.
                Et effectivement, une fois le Minotaure envoyé ad patres, Thésée ressort du Labyrinthe grâce au fil d'Ariane.
                C'est de cette histoire parfaitement véridique, bien sûr, que nous vient notre expression.
            </p>
            <p><strong>Pour l'utilisation cet outil : </strong></p>
            <p>
                Inserez la function PHP : <input type="text"
                value="if(function_exists('fil_ariane')) {echo fil_ariane(); }"
                size="40" readonly="readonly" />
                dans les fichiers PHP de votre thème,
        <br>
                ou utilisez le shortcode : 
                <input type="text" value="[my_breadcrumb]" readonly="readonly" />
            </p>
    </div>
    <div class="tab-pane fade" id="ip">
        <br>
            <h2>My Ip</h2>
            <br>
                <p>
                    <strong>Pour l'utilisation cet outil : </strong>
                </p>
                <p>
                    <strong>Montrer l'IP du visiteur</strong>
                </p>
                <p>
            Shortcode qui vous permets d'afficher l'IP du visiteur
            <input type="text" value="[my_ip]" readonly="readonly" />
        </p>
    </div>
    <div class="tab-pane fade" id="post">
        <br>
    <h2>My Post</h2>
        <br>
            <p><strong>Pour l'utilisation cet outil : </strong></p>
            <p><strong>Liste d'articles</strong></p>
        <p>
            Shortcode qui vous permets d'afficher un liste d'articles
            <input type="text" value="[post]" readonly="readonly" />
        </p>
            <p><strong>Articles récents</strong></p>
        <p>
            Shortcode qui vous permets d'afficher les récents articles
            <input type="text" value="[my_post]" readonly="readonly" />
        </p>
    </div>
    <div class="tab-pane fade" id="plan">
        <br>
            <h2>My Plan</h2>
        <br>
            <p><strong>Pour l'utilisation cet outil : </strong></p>
            <p><strong>Menu</strong></p>
        <p>
            Shortcode qui vous permets d'afficher les liens textuels du menu 
            <input type="text" value="[plan_du_menu]" readonly="readonly" />
        </p>
    </div>
</div>



</body>
</html>
    