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
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/styles.css">

    <title>Réglages</title>
  </head>

<body>
    <div id="border" class="wrap">
        <h2>Réglages</h2>
            <form action="#" methode="#">
                <div>
                    <br>
                    <h4><stron>Cocher l'une des cases pour activez les liens du sous menu de l'administration de WordPress</strong></h4>
                    <div>
                        <input type="checkbox" name="enregistrement" id="breacrumb" value="1">
                        <label for="checkox">My Breadcrumb (fil d'ariane)</label>
                    </div>
                    <br>
                    <div>
                        <input type="checkbox" name="enregistrement_b" id="gmap" value="2"> 
                        <label for="checkox">My Gmap</label>
                    </div>    
                    <br>
                    <div>
            
                        <input type="checkbox" name="enregistrement_g" id="mail" value="3"> 
                        <label for="checkox">My Mails</label>
                    </div>   
                    <br>
                    <div>
                        <input type="checkbox" name="enregistrement4" id="plan" value="4"> 
                        <label for="checkox">My Plan</label>
                    </div>    
                    <br>
                </div>
                <!--Bouton permettant d'enregistrer les réglages-->
                <div>
                    <?php submit_button(); ?>
                </div>
        </form>
    </div>
</body>
</html>
    