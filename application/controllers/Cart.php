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

		custumerPermission();

		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		$data['itemID'] = $id;
		$data['itemToBuy'] = $this->items_model->editItem($id);
		$data['title'] = 'Pagando...';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/payment-confirm', $data);
		$this->load->view('templates/footer-script', $data);
		$this->load->view('templates/footer', $data);
	}

	public function payment_processed($item_id)
	{
		// print_r('<pre>');
		// print_r($_POST);
		// die();

		custumerPermission();

		$getTime = time();

		$orderInfos = (object) [
			'order' => [
				'id' => $getTime,
				'total_price' => $_POST['total_price'] * $_POST['qtt'],
				'order_state' => 'under_analysis',
				'user_id' => $_POST['user_id']
			],

			'itemInfos' => [

				'order_id' => $getTime,
				'copy_item_id' => $item_id,
				'copy_item_price' => $_POST['total_price'],
				'quantity' => $_POST['qtt']

			],

			'paymentInfos' => [

				'order_id' => $getTime,
				'copy_payment_type' => 'credit',
				'copy_card_name' => $_POST['card_name'],
				'copy_card_number' => $_POST['card_number']

			]
		];


		$this->load->model('cart_model');
		$this->cart_model->createOrder($orderInfos);
	}
}
