<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model("items_model");

	}
	public function index()
	{
		echo 'N tem nada ainda';
	}

	public function payment($id)
	{
		$data['loggedUser'] = loggedUser();

		$data['itemID'] = $id;
		$data['itemToDelete'] = $this->items_model->editItem($id);
		$data['title'] = 'Item Delete...';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/payment-confirm', $data);
	}

	public function payment_processed()
	{
		echo 'payment_processed_page';
	}
}