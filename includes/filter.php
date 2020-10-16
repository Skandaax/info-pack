<?php

//------------------------------------------------------------------------------//
//------------------------------[Filters]---------------------------------------//
//------------------------------------------------------------------------------//

//--- Ajoute au menu de l'administration de WordPress l'onglet Liens
add_filter('pre_option_link_manager_enabled', '__return_false');

//--- Masquer les erreurs de connexion
