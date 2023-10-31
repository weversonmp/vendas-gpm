<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		// print_r('<pre>');
		// print_r($_SESSION);
		// exit();

		if (isset($_SESSION['logged_user'])) {
			redirect('homepage');
		}

		$data["title"] = 'Login - BuyaShoes';

		$this->load->view('pages/login', $data);
	}

	public function userLogin()
	{
		$this->load->model('login_model');

		// print_r('<pre>');
		// print_r($_SESSION);
		// die();

		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = $this->login_model->userLogin($username, $password);

		if ($user) {
			$this->session->set_userdata("logged_user", $user);
			redirect("homepage");
		} else {
			redirect("login/userLogin");
		}
	}

	public function logout()
	{

		$this->session->unset_userdata("logged_user");
		redirect('login');
	}
}
