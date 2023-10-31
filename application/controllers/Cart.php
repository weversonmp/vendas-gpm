<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("items_model");
	}

	public function index()
	{
		echo 'N tem nada ainda';
	}

	public function payment($id)
	{

		$isLogged = isset($this->session->userdata['logged_user']);

		if (!$isLogged) {
			permission();
		}

		
		$data['loggedUser'] = loggedUser();
		$data['itemID'] = $id;
		$data['itemToBuy'] = $this->items_model->editItem($id);
		$data['title'] = 'Item Delete...';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/payment-confirm', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}

	public function payment_processed()
	{
		print_r('<pre>');
		print_r($_POST);
		die();
	}
}
