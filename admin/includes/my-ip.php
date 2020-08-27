<?php

//*******************************************************************************/
//***************************[My mails]******************************************/
//*******************************************************************************/

/* affichage simple de l' adresse IP du visiteur */
//-- Fonction de récupération de l'adresse IP du visiteur
function ip() {
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

    add_shortcode('my_ip','ip');
