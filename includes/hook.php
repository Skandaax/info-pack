<?php

//Les hooks d'action de mon menu et sous menu de mon extension
// J'ajoute un hook pour afficher mon menu principal de mon extention
//J'utilise des hooks pour mon sous menu */
add_action('admin_menu', 'ip_Add_My_Admin_Link');
add_action('admin_menu', 'ip_add_sub_menu');
add_action('admin_menu', 'ip_add_sub_menu_maps');
add_action('admin_menu', 'ip_add_sub_menu_mails');
add_action('admin_menu', 'ip_add_sub_menu_plan');
