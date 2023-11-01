<?php

function adminPermission()
{
	$ci = get_instance();

	$isLogged = isset($ci->session->userdata['logged_user']);

	if ($isLogged) {
		$whoIsLogged = $ci->session->userdata['logged_user']['access_type'];

		switch ($whoIsLogged) {
			case 'admin':
				return 'admin';
				break;

			default:
				$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
				$ci->session->keep_flashdata("danger");
				redirect(base_url() . '/login');
				break;
		}
	}

	$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
	$ci->session->keep_flashdata("danger");
	redirect(base_url() . '/login');
}

function custumerPermission()
{
	$ci = get_instance();

	$isLogged = isset($ci->session->userdata['logged_user']);

	if ($isLogged) {
		$whoIsLogged = $ci->session->userdata['logged_user']['access_type'];

		switch ($whoIsLogged) {
			case 'custumer':
				return 'custumer';
				break;

			default:
				$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
				$ci->session->keep_flashdata("danger");
				redirect(base_url() . '/login');
				break;
		}
	}

	$ci->session->set_flashdata("danger", "Você precisa estar logado para acessar esta página");
	$ci->session->keep_flashdata("danger");
	redirect(base_url() . '/login');

}
