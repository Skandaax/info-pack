<?php

//*******************************************************************************/
//***************************[Admin]*********************************************/
//*******************************************************************************/
//Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

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
        
        <form action="" methode="">
            <br>
                <input type="checkbox" name="gmap" id="gmap"> 
                <label for="checkox">Activez My Gmap</label>
            <br>
                <input type="checkbox" name="mails" id="mails"> 
                <label for="checkox">Activez My mails</label>
            <br>
                <input type="checkbox" name="plan" id="plan"> 
                <label for="checkox">Activez Plan de site</label>
            <br>
            <div>
                <input type="submit" value="Enregistrer">
        </form>
    </div>
</body>
</html>
    