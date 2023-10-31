<?php

function permission()
{
	$ci = get_instance();
	$loggedUser = $ci->session->userdata['logged_user'];
	// print_r('<pre>');
	// 	print_r($loggedUser['access_type']);
	// 	die();

	if ($loggedUser['access_type'] == 'admin') {
		return $loggedUser;
	}
	
	$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
	$ci->session->keep_flashdata("danger");

	redirect(base_url());


}

function loggedUser()
{
	$ci = get_instance();
	$loggedUser = isset($ci->session->userdata['logged_user']);

	if (isset($ci->session->userdata['logged_user'])) {
		$loggedUser = $ci->session->userdata['logged_user'];
	} else {
		$loggedUser = '';
	}

	return $loggedUser;
}
