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

<body class="bg-secondary">
	<?php
	print_r('<pre>');
	print_r($loggedUser);
	die();
	?>
	<header>
		<!-- Nav -->
		<nav class="navbar navbar-expand bg-dark fixed-top ">
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
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Link
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" aria-disabled="true">Link</a>
						</li>
					</ul>
					<form action="<?= base_url() ?>homepage/search" method="post" class="d-flex" role="search">
						<input class="form-control me-2" name="search" type="search" placeholder="Pesquisar" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
					<?php if (!isset($_SESSION['logged_user']['access_type']) == 'admin') : ?>
						<button class="btn btn-primary" type="button">Login</button>
						<button class="btn btn-warning" type="button">Carrinho</button>
					<?php endif ?>
				</div>
			</div>
		</nav>

	</header>