<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>


	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">

	<style>
		body {
			background-image: url('<?= base_url() ?>img/wpp.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}

		#bg-effect {
			display: block;
			position: absolute;
			z-index: -1;
			width: 100vw;
			height: 100vh;
			background-color: black;
			opacity: 0.7;
		}

		form {
			background-color: #23272e;
			border-radius: 5px;
			color: white;
			border: 1px solid #595f67;
		}

		#inputPassword,
		#username {
			border-radius: 4px;
		}

		small * {
			font-weight: 5px;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>



<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body>
	<div id="bg-effect"></div>
	<div class="container min-vh-100 d-flex justify-content-center text-center">
		<form class="p-5 form-signin" method="post" action="<?= base_url() ?>login/newUser">
			<img style='border-radius: 50%;' class="mb-4 w-50" src="<?= base_url() ?>img/shoesbrand/3.jpeg">
			<h1 class="h3 mb-3 font-weight-normal text-nowrap">Cadastre-se</h1>
			<input type="text" name="username" id="username" class="form-control mb-2" placeholder="Nome do usuário" required autofocus>
			<input type="text" name="first_name" id="first_name" class="form-control mb-2" placeholder="Primeiro Nome" required autofocus>
			<input type="text" name="last_name" id="last_name" class="form-control mb-2" placeholder="Segundo Nome" required autofocus>
			<input type="email" name="user_email" id="user_email" class="form-control mb-2" placeholder="E-mail" required autofocus>
			<input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Senha" required>
			<small>
				<select class="form-control mb-2" name="access_type" id="access_type">
					<option value="0">--Defina o Nivel de Acesso--</option>
					<option value="custumer">Cliente</option>
					<option value="admin">Administador</option>
				</select>
			</small>
			<button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Cadastrar</button>
			<p>
				<a href="<?= base_url() ?>login">Cancelar</a>
			</p>
			<p class="mt-5 mb-3 text-muted">&copy; 2023</p>
		</form>
	</div>

</body>

</html>