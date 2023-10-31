<?php

function permission()
{
	$ci = get_instance();
	$loggedUser = $ci->session->userdata['logged_user'];

	if (!$loggedUser) {
		$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
		redirect("login");
	}

	return $loggedUser;
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

	// if ($loggedUser['access_type'] == 'admin') {
	// 	// $ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
	// 	// redirect("login");
	// }

	return $loggedUser;
}
