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
		$data['title'] = 'Login...';

		// print_r('<pre>');
		// print_r($_SESSION);
		// die();

		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = $this->login_model->userLogin($username, $password);


		$data['whoIsLogged'] = '';
		$isLogged = isset($this->session->userdata['logged_user']);

		if ($isLogged) {
			$data['whoIsLogged'] = $this->session->userdata['logged_user'];
		}

		if (isset($user['username'])) {
			if ($user['username'] == $_POST['username']) {
				$this->session->set_userdata("logged_user", $user);
				redirect("homepage");
			}
		} else {
			$this->load->view('templates/header', $data);
?>
			<div class="container-fluid col-6 mt-5 p-5">
				<h3 class="alert alert-danger mt-5 text-center" role="alert">
					<i class="fa-solid fa-triangle-exclamation"></i>
					O usuário ou a senha está incorreta.
				</h3>
			</div>

			<?php

			$this->load->view('templates/footer-script', $data);
			$this->load->view('templates/footer', $data);

			?>
			<script>
				setTimeout(() => {
					alert('Voltando para tela de login...')
				}, "2000");
				setTimeout(() => {
					window.location.href = "<?= base_url() ?>login";
				}, "2000");
			</script>
<?php

		}
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

	public function adminCreateUser()
	{
		adminPermission();

		$data["title"] = 'Login - BuyaShoes';

		$this->load->view('pages/new-user-create', $data);
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
