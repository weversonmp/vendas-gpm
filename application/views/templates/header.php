<?php
// print_r('<pre>');
// print_r($whoIsLogged);
// die();
?>

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

	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			list-style: none;
			font-family: 'Montserrat', sans-serif
		}

		body {
			background-color: #b064f7;
			line-height: 1rem;
			font-size: 14px;
			padding: 10px
		}

		.container {
			border-top-left-radius: 25px;
			border-top-right-radius: 25px;
			border-bottom-left-radius: 25px;
			border-bottom-right-radius: 25px;
			background-color: #eee;
			max-width: 75%;
			/* margin-top: 70px; */
		}

		.navbar-brand {
			text-transform: uppercase;
			font-size: 14px;
			font-weight: 800
		}

		small {
			font-size: 12px
		}

		.icon {
			background-color: #eee;
			width: 40px;
			height: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%
		}

		.pic {
			height: 70px;
			width: 100px;
			border-radius: 5px
		}

		td {
			vertical-align: middle
		}

		.b-bottom {
			border-bottom: 2px dotted black;
			padding-bottom: 20px
		}

		p {
			margin: 0px
		}

		table input {
			width: 50px;
			border: 1px solid #eee
		}

		input:focus {
			border: 1px solid #eee;
			outline: none
		}

		.round {
			background-color: #eee;
			height: 40px;
			width: 40px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center
		}

		.payment-summary .unregistered {
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: #eee;
			text-transform: uppercase;
			font-size: 14px
		}

		.payment-summary input {
			width: 100%;
			margin-right: 20px
		}

		.payment-summary .sale {
			width: 100%;
			background-color: #e9b3b3;
			text-transform: uppercase;
			font-size: 12px;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 5PX 0
		}

		@media screen and (max-width: 468px) {
			#nav-test {
				display: none;
			}
		}
	
	</style>


	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">

	<!-- <style>
		#mirrorEffect {
			content: ' ';
			display: block;
			position: absolute;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			opacity: 0.6;
			background-image: url('<?= base_url() ?>img/wpp.jpg');
			background-repeat: no-repeat;
			background-position: 50% 0;
			background-size: cover;
			border-radius: 10px;
			border: 1px solid rgba(255, 255, 255, 0.18);

		}
	</style> -->
</head>

<body class="bg-dark">
	<div id="mirrorEffect"></div>

	<header>
		<!-- Nav -->
		<nav id="nav-teste" class="navbar navbar-expand bg-dark fixed-top shadow">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url() ?>">BuyaShoes</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarScroll">
					<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
						</li>
					</ul>
					<form action="<?= base_url() ?>homepage/search" method="post" class="d-flex" role="search">
						<input class="form-control me-2" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
						<button class="btn btn-outline-success me-2" type="submit">Search</button>

						<?php if (!$whoIsLogged) : ?>
							<a href="<?= base_url() ?>login" class="btn btn-primary me-2" type="button">Login</a>
							<button class="btn btn-warning" type="button">Carrinho</button>

						<?php elseif ($whoIsLogged['access_type'] == 'admin') : ?>
							<div class="dropdown me-2">
								<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									<?= $whoIsLogged['first_name'] ?>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?= base_url() ?>login/usercreateadmin">Perfil</a></li>
									<li><a class="dropdown-item" href="#">Vendas Realizadas</a></li>
									<li><a class="dropdown-item" href="#">Items Desativados</a></li>
									<li><a class="dropdown-item" href="<?= base_url() ?>login/logout">Log out</a></li>
								</ul>
							</div>
							<a href="<?= base_url() ?>newitem/itemForm/" class="btn btn-warning text-nowrap">
								<i class="fa-solid fa-plus"></i> Item
							</a>

						<?php elseif ($whoIsLogged['access_type'] == 'custumer') : ?>
							<div class="dropdown me-2">
								<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
									<?= $whoIsLogged['first_name'] ?>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="<?= base_url() ?>profile/">Perfil</a></li>
									<li><a class="dropdown-item" href="<?= base_url() ?>profile/orders/">Compras</a></li>
									<li><a class="dropdown-item" href="<?= base_url() ?>login/logout">Log out</a></li>
								</ul>
							</div>
							<button class="btn btn-warning" type="button">Carrinho</button>
						<?php endif ?>

					</form>

				</div>
			</div>
		</nav>

	</header>

	<body>