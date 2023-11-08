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

	public function signup()
	{
		// print_r('<pre>');
		// print_r($_SESSION);
		// exit();

		if (isset($_SESSION['logged_user'])) {
			redirect('homepage');
		}

		$data["title"] = 'Login - BuyaShoes';

		$this->load->view('pages/signup', $data);
	}

	public function adminCreateUser()
	{
		adminPermission();

		$data["title"] = 'Login - BuyaShoes';

		$this->load->view('pages/new-user-create', $data);
	}

	public function newCustumer()
	{
		$this->load->model('login_model');

		$newUser['username'] = $_POST['username'];
		$newUser['first_name'] = $_POST['first_name'];
		$newUser['last_name'] = $_POST['last_name'];
		$newUser['email'] = $_POST['user_email'];
		$newUser['user_password'] = $_POST['user_password'];
		$newUser['access_type'] = 'custumer';

		$this->login_model->userSignup($newUser);

		redirect(base_url());
	}

	public function newUser()
	{

		adminPermission();

		$this->load->model('login_model');

		$newUser['username'] = $_POST['username'];
		$newUser['first_name'] = $_POST['first_name'];
		$newUser['last_name'] = $_POST['last_name'];
		$newUser['email'] = $_POST['user_email'];
		$newUser['user_password'] = $_POST['user_password'];
		$newUser['access_type'] = $_POST['access_type'];

		$this->login_model->userSignup($newUser);

		redirect(base_url());
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

	public function editLogin()
	{
		$this->load->model('login_model');
	}

	public function logout()
	{

		$this->session->unset_userdata("logged_user");
		redirect('homepage');
	}
}
