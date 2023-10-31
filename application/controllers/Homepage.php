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
		// print_r('<pre>');
		// print_r($_SESSION);
		// print_r(permission());
		// die();
		$data['loggedUser'] =  loggedUser();
		$data['items'] = $this->items_model->index();
		$data['title'] = 'BuyaShoes';
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function search()
	{
		$input = $_POST['search'];
		$data['items'] = $this->items_model->search($input);
		$data['title'] = 'BuyaShoes';


		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit($id)
	{
		permission();

		$data['item'] = $this->items_model->editItem($id);
		$data['title'] = $data['item']['item_name'] . ' Editing...';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/form-edit-items', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update()
	{
		permission();

		$item['id'] = $_POST['item_id'];
		$item['item_name'] = $_POST['item_name'];
		$item['description'] = $_POST['description'];
		$item['brand'] = $_POST['brand'];
		$item['model'] = $_POST['model'];
		$item['item_size'] = $_POST['item-size'];
		$item['color'] = $_POST['color'];
		$item['stock'] = $_POST['stock'];
		$item['price'] = $_POST['price'];

		$this->items_model->update($item['id'], $item);
		$_POST = array();
		redirect('homepage');
	}

	public function deleteconfirm($id)
	{
		permission();

		$data['itemID'] = $id;
		$data['itemToDelete'] = $this->items_model->editItem($id);
		$data['title'] = 'Item Delete...';

		$this->load->view('pages/delete-item-confirm', $data);

		// $this->items_model->delete($id);
	}


	public function delete($id)
	{
		permission();

		$this->items_model->delete($id);
		redirect('homepage');
	}
}
