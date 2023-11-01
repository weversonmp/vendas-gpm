<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newitem extends CI_Controller
{

	public function index() {

		adminPermission();

		$this->load->model('items_model');
		
		$data['title'] = 'BuyaShoes';
		
		$this->items_model->index();

	}

	public function itemForm() {

		adminPermission();

		$this->load->model('items_model');

		$item = $_POST;

		$this->load->view('new-item-form');

	}
	
}
