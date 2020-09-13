<?php

//*******************************************************************************/
//***************************[My ip]******************************************/
//*******************************************************************************/

/* affichage simple de l' adresse IP du visiteur */
//-- Fonction de récupération de l'adresse IP du visiteur
//-- Shortcode : [my_ip]
function ip_client($atts, $content = null){
	if (isset($_SERVER['HTTP_CLIENT'])) {
		$ip = $_SERVER['HTTP_CLIENT'];
	}
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	if (isset($_SERVER['REMOTE_ADDR'])) {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	if ($ip == '') {
		$ip = 'UNKNOWN';
	}

	return $ip;
}

add_shortcode('my_ip','ip_client');
