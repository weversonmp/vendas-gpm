<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("items_model");
	}

	public function index()
	{
		$data['allItems'] = $this->items_model->index();

		$this->load->view('homepage', $data);

	}
}
