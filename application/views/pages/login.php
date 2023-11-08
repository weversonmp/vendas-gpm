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
</head>


<style>
	body {
		background-image: url('<?= base_url() ?>img/wpp.jpg');
		background-repeat: no-repeat;
		background-size: cover;
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
<!-- Custom styles for this template -->
<link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
	<form class="p-4 form-signin" method="post" action="<?= base_url() ?>login/userlogin">
		<img style='border-radius: 50%;' class="mb-4 w-50" src="<?= base_url() ?>img/shoesbrand/3.jpeg">
		<h1 class="h3 mb-3 font-weight-normal">BuyaShoes | Login</h1>
		<input type="text" name="username" id="username" class="form-control mb-2" placeholder="Nome do usuário" required autofocus>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block mb-3" type="submit">Log in</button>
		<p class="mb-3">
			<a class="icon-link icon-link-hover" href="<?= base_url() ?>login/signup">Não tem uma conta?</a>
		</p>
		<p>
			<a href="<?= base_url() ?>">Veja nosso catálogo!</a>
		</p>
		<p class="mt-3 text-muted">&copy; 2023</p>
	</form>
</body>

</html>