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
		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$data['items'] = $this->items_model->index();
		$data['title'] = 'BuyaShoes';


		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}

	public function search()
	{
		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);


		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$input = $_POST['search'];
		$data['items'] = $this->items_model->search($input);
		$data['title'] = 'BuyaShoes';


		$this->load->view('templates/header', $data);
		$this->load->view('pages/homepage', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update()
	{
		adminPermission();


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

	public function deleteConfirm($id)
	{
		adminPermission();

		$data['itemID'] = $id;
		$data['itemToDelete'] = $this->items_model->editItem($id);
		$data['title'] = 'Item Delete...';

		$this->load->view('pages/delete-item-confirm', $data);

		// $this->items_model->delete($id);
	}


	public function delete($id)
	{
		adminPermission();

		$this->items_model->delete($id);
		redirect('homepage');
	}

	public function newItem()
	{
		adminPermission();

		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$data['items'] = $this->items_model->index();
		$data['title'] = 'BuyaShoes';


		$this->load->view('templates/header', $data);
		$this->load->view('pages/new-item-form', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}

	public function insertNewItem()
	{
		adminPermission();

		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$this->load->model('items_model');
		$result = $this->items_model->newItem($_POST);

		$data['title'] = 'BuyaShoes';

		$this->load->view('templates/header', $data);

		if (!$result) {

?>
			<div class="d-flex container-fluid alert alert-success mt-5 col-6 justify-content-center align-items-center">
				<a class="btn btn-warning mx-3" href="<?= base_url() ?>"><i class="fa-solid fa-x"></i></a>
				<div class="close" data-dismiss="alert" aria-label="close">Item adicionado com sucesso!</div>
			</div>
		<?php
		} else { ?>
			<div class="-flex container-fluid alert alert-success mt-5 col-6 justify-content-center align-items-center">
				<a class="btn btn-warning mx-3" href="<?= base_url() ?>"><i class="fa-solid fa-x"></i></a>
				<div class="close" data-dismiss="alert" aria-label="close">Falha ao adicionar o item</div>
			</div>
<?php

			$this->load->view('templates/footer-script', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
