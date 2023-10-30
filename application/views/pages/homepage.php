<!DOCTYPE html>
<html lang="pt-Br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css">
</head>

<body>
	<header>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="navId" role="tablist">
			<li class="nav-item">
				<a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">Active</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#tab2Id">Action</a>
					<a class="dropdown-item" href="#tab3Id">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#tab4Id">Action</a>
				</div>
			</li>
			<li class="nav-item" role="presentation">
				<a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
			</li>
			<li class="nav-item" role="presentation">
				<a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
			</li>
		</ul>
		
	</header>

	<main class="container">
		<div class="row">
		  <div class="col-4">
			<div class="card">
			  <div class="card-body">
				<h3 class="card-title"><?php print_r($items['0']['id']) ?></h3>
				<p class="card-text">Nike</p>
			  </div>
			</div>
		  </div>
		  <div class="col-4">
			<div class="card">
			  <div class="card-body">
				<h3 class="card-title">Tenis 2</h3>
				<p class="card-text">Adidas</p>
			  </div>
			</div>
		  </div>
		  <div class="col-4">
			<div class="card">
			  <div class="card-body">
				<h3 class="card-title">Tenis 3</h3>
				<p class="card-text">Adidas</p>
			  </div>
			</div>
		  </div>
		</div>
	</main>






	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	</script>
</body>

</html>