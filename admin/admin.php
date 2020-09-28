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
    
<h3 class="wrap">Options</h3>
    <hr>

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

    </div>
    <div class="tab-pane fade" id="ip">

    </div>
    <div class="tab-pane fade" id="post">

    </div>
    <div class="tab-pane fade" id="plan">

    </div>
</div>

</body>
</html>
    