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

	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>

	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">

</head>

<body class="bg-dark">
	<div id="mirrorEffect"></div>

	<header>
		<nav class="navbar bg-dark fixed-top shadow ">
			<!-- Nav Mobile -->
			<div id="nav-mobile" class="container-fluid">
				<div class="collapse" id="navbarToggleExternalContent">
					<div class="bg-dark p-4">

						<?php if (!$whoIsLogged) : ?>
							<a href="<?= base_url() ?>login" class="me-2">
								<h5>Login</h5>
							</a>
							<!-- <button class="btn btn-warning" type="button">Carrinho</button> -->

						<?php elseif ($whoIsLogged['access_type'] == 'admin') : ?>

							<a class="" href="<?= base_url() ?>login/admincreateuser">
								<h5>Adicionar Usuário</h5>
							</a>
							<a class="" href="<?= base_url() ?>vendas">
								<h5>Vendas Realizadas</h5>
							</a>
							<a class="" href="#">
								<h5>Items Desativados</h5>
							</a>
							<a class="" href="<?= base_url() ?>login/logout">
								<h5>Log out</h5>
							</a>

							<a href="<?= base_url() ?>newitem/itemForm/" class="btn btn-warning text-nowrap">
								<i class="fa-solid fa-plus"></i> Item
							</a>

						<?php elseif ($whoIsLogged['access_type'] == 'custumer') : ?>

							<!-- <a class="" href="<?= base_url() ?>profile/">
								<h5>Perfil</h5>
							</a> -->
							<a class="" href="<?= base_url() ?>profile/orders/">
								<h5>Compras</h5>
							</a>
							<a class="" href="<?= base_url() ?>login/logout">
								<h5>Log out</h5>
							</a>

							<!-- <button class="btn btn-warning" type="button">Carrinho</button> -->
						<?php endif ?>

					</div>
				</div>

			</div>

			<div id="nav-mobile-fixed" class="m-auto">
				<div class="container-fluid d-flex justify-content-center align-content-center">
					<div class="container-fluid d-flex justify-content-between">
						<a style="color: #eee;" class="navbar-brand" href="<?= base_url() ?>">BuyaShoes</a>
						<div class="">
							<form action="<?= base_url() ?>homepage/search" method="post" role="search">
								<div class="d-flex justify-content-center">
									<input class="form-control w-50" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
									<button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: white"></i></button>
								</div>
							</form>
						</div>
						<div>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
								<i class="fa-solid fa-bars" style="color: #eee;"></i>
						</div>
					</div>

				</div>
			</div>

			<!-- Nav LG -->
			<div id="nav-lg" class="container-fluid col-lg-10">
				<a style="color: #eee;" class="navbar-brand" href="<?= base_url() ?>">BuyaShoes</a>
				<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
				</ul>
				<form action="<?= base_url() ?>homepage/search" method="post" class="d-flex" role="search">
					<input class="form-control me-2" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
					<button class="btn btn-outline-success me-2" type="submit">Search</button>
				</form>
				<?php if (!$whoIsLogged) : ?>
					<a href="<?= base_url() ?>login" class="btn btn-primary me-2" type="button">Login</a>
					<!-- <button class="btn btn-warning" type="button">Carrinho</button> -->

				<?php elseif ($whoIsLogged['access_type'] == 'admin') : ?>
					<div class="dropdown me-2">
						<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?= $whoIsLogged['first_name'] ?>
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?= base_url() ?>login/admincreateuser">Novo Usuário</a></li>
							<li><a class="dropdown-item" href="<?= base_url() ?>profile/sales">Vendas Realizadas</a></li>
							<li><a class="dropdown-item" href="#">Items Desativados</a></li>
							<li><a class="dropdown-item" href="<?= base_url() ?>login/logout">Log out</a></li>
						</ul>
					</div>
					<a href="<?= base_url() ?>homepage/newitem" class="btn btn-warning text-nowrap">
						<i class="fa-solid fa-plus"></i> Item
					</a>

				<?php elseif ($whoIsLogged['access_type'] == 'custumer') : ?>
					<div class="dropdown me-2">
						<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?= $whoIsLogged['first_name'] ?>
						</button>
						<ul class="dropdown-menu">
							<!-- <li><a class="dropdown-item" href="<?= base_url() ?>profile/">Perfil</a></li> -->
							<li><a class="dropdown-item" href="<?= base_url() ?>profile/orders/">Compras</a></li>
							<li><a class="dropdown-item" href="<?= base_url() ?>login/logout">Log out</a></li>
						</ul>
					</div>
					<!-- <button class="btn btn-warning" type="button">Carrinho</button> -->
				<?php endif ?>



			</div>
		</nav>

	</header>

	<body>