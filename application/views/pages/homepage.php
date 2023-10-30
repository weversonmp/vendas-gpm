	<main class="container">
		<div class="row">
			<?php foreach ($items as $item) : ?>
				<div class="col-sm-4 col-xl-3 fade-in">
					<div class="card">
						<div class="card-body">
							<img src="<?= base_url() ?>img/eu1.jpg" alt="Imagem do Tênis" class="card-img">
							<h3 class="card-title text-break text-nowrap "><?= $item['item_name'] ?></h3>
							<p class="card-text"><?= $item['brand'] ?></p>
							<p class="card-text"><?= $item['model'] ?></p>
							<p class="card-text"><?= $item['color'] ?></p>
							<p class="card-text">R$ <?= $item['price'] ?></p>
							<div class="mw-100 d-flex justify-content-around ">
								<a name="edit" id="" class="btn btn-success w-25 xl" href="<?= base_url() ?>homepage/edit/<?= $item['id'] ?>" role="button"><i class="fas fa-pencil-alt"></i></a>
								<a name="enable-disable" id="" class="btn btn-warning w-25" href="#" role="button"><i class="fa-solid fa-lock"></i></a>
								<a name="delete" id="" class="btn btn-danger w-25" href="#" role="button"><i class="fas fa-trash"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</main>






