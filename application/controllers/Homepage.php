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

		$this->load->view('pages/homepage', $data);

	}

	public function teste()
	{
		

	}
}
