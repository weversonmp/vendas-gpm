<?php

function permission()
{
	$ci = get_instance();
	$loggedAdmin = $ci->session->userdata['logged_user'];

	if ($loggedAdmin['access_type'] == 'admin') {
		return $loggedAdmin;
	}
	
	$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
	$ci->session->keep_flashdata("danger");

	redirect(base_url());


}

function loggedUser()
{
	$ci = get_instance();

	if (isset($ci->session->userdata['logged_user'])) {
		$loggedUser = $ci->session->userdata['logged_user'];
	} else {
		$loggedUser = '';
	}

	return $loggedUser;
}
