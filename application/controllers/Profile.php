<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	public function index()
	{
		// print_r('<pre>');
		// print_r($_SESSION);
		// exit();

		custumerPermission();

		$data["title"] = 'Perfil - BuyaShoes';

		$this->load->view('pages/login', $data);
	}

	public function orders()
	{
		custumerPermission();

		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$this->load->model('profile_model');

		$data['allOrders'] = $this->profile_model->getOrders();


		$data["title"] = 'Compras - BuyaShoes';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/all-orders', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}
}
