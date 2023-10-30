<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("items_model");
	}

	public function index()
	{
		$data['items'] = $this->items_model->index();
		$data['title'] = 'BuyaShoes';


		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage', $data);
		$this->load->view('templates/footer', $data);

	}

	public function edit($id)
	{
		$this->load->view('templates/header');
		$this->load->view('templates/form-edit-items');
		$this->load->view('templates/footer');

	}
}
