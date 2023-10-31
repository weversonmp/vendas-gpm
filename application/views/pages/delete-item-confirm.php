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

<body class="bg-secondary ">
	<div class="container min-vh-100 d-flex justify-content-center">
		<form class="d-flex justify-content-center align-items-center">
			<div class="card p-5 bg-dark d-flex flex-column justify-content-center align-items-center border-3 border-danger">

				<div class="mb-3 col-sm-4 col-xl-3 fade-in">
					<div class="card" id="card-shape">
						<div class="card-body">
							<img src="<?= base_url() ?>img/eu1.jpg" alt="Imagem do Tênis" class="card-img">
							<h3 id="h3a" class="card-title text-break text-truncate "><?= $itemToDelete['item_name'] ?></h3>
							<p class="card-text"><?= $itemToDelete['brand'] ?></p>
							<p class="card-text"><?= $itemToDelete['model'] ?></p>
							<p class="card-text"><?= $itemToDelete['color'] ?></p>
							<p class="card-text">R$ <?= $itemToDelete['price'] ?></p>
						</div>
					</div>
				</div>

				<h3>Deseja realmente deletar esse item?</h3>

				<div class="mt-3">
					<a href="<?= base_url() ?>homepage/delete/<?= $itemID ?>" class="btn btn-success btn-lg deleteBTN" type="button">Sim</a>
					<a href="<?= base_url() ?>" class="btn btn-danger btn-lg deleteBTN" type="button">Não</a>
				</div>

			</div>
		</form>
	</div>
</body>

</html>



<!-- <div class="col-sm-4 col-xl-3 fade-in">
					<div class="card" id="card-shape">
						<div class="card-body">
							<img src="<?= base_url() ?>img/eu1.jpg" alt="Imagem do Tênis" class="card-img">
							<h3 id="h3a" class="card-title text-break text-truncate "><?= $itemToDelete['item_name'] ?></h3>
							<p class="card-text"><?= $itemToDelete['brand'] ?></p>
							<p class="card-text"><?= $itemToDelete['model'] ?></p>
							<p class="card-text"><?= $itemToDelete['color'] ?></p>
							<p class="card-text">R$ <?= $itemToDelete['price'] ?></p>
						</div>
					</div>
				</div> -->