<?php

//------------------------------------------------------------------------------//
//-----------------------------[Info-Pack]--------------------------------------//
//------------------------------------------------------------------------------//

/*
Plugin Name: Info-Pack
Plugin URI: https://www.inforaz.com/developpement-web-web-mobile/
Description: Extension WordPress permettant l'utilisation de plusieurs outils : Plan de site, articles récents, afficher une liste d'articles, montrer au visiteur son adresse IP...
Author: Couillin Yannick
Author URI: http:/www.inforaz.com/
Version: 1.0
Licence: GPLv2

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright [2020] [Yannick_Couillin] [email : ameb@inforaz.com]
*/

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

//--- Cette fonction empêche l'utilisateur public d'accéder directement à vos fichiers .php via URL
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

//--- Ici on va inclure les fichiers principaux du plugin
//--- Inclut "ip-functions.php" en  utilisent require_once 
require_once PLUGIN_DIR_path(__FILE__) . '/ip-function.php';
//--- Inclut "plan_de_site.php" pour l'utilisation de l'outils My PLAN (plan de site)
require_once PLUGIN_DIR_path(__FILE__) . 'admin/includes/my-plan.php';
//--- Inclut "my-post.php" pour l'utilisation de l'outils de My POST(articles)
require_once PLUGIN_DIR_path(__FILE__) . 'admin/includes/my-post.php';
//--- Inclut "my-gmap.php" pour l'utilisation de l'outils de My IP
require_once PLUGIN_DIR_path(__FILE__) . 'admin/includes/my-ip.php';
//--- Inclut "Filter" pour activez des outils dans le menu de l'administration
require_once PLUGIN_DIR_path(__FILE__) . 'includes/filter.php';