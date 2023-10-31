	<main class="mt-5 container">
		<div class="rad row bg-dark p-3 border border-dark shadow">
			<?php if (!$items) : ?>
				<div class="">
					<h1 style="color: white;">A pesquisa não obteve resultados...</h1>
				</div>
			<?php endif ?>

			<?php foreach ($items as $item) : ?>

				<div class="col-sm-4 col-xl-3 fade-in mb-3">
					<div class="card" id="card-shape">
						<div class="card-body">
							<img src="<?= base_url() ?>img/shoes.png" alt="Imagem do Tênis" class="card-img">
							<h3 id="h3a" class="card-title text-break text-truncate "><?= $item['item_name'] ?></h3>
							<p class="card-text"><?= $item['brand'] ?></p>
							<p class="card-text"><?= $item['model'] ?></p>
							<p class="card-text"><?= $item['color'] ?></p>
							<p class="card-text">R$ <?= $item['price'] ?></p>
							<?php ?>
							<?php if (isset($loggedUser['access_type']) == 'true') : ?>
								<?php if ($loggedUser['access_type'] == 'admin') : ?>
									<div class="mw-100 d-flex justify-content-around ">
										<a name="edit" id="" class="btn btn-success w-25 xl" href="<?= base_url() ?>homepage/edit/<?= $item['id'] ?>" role="button"><i class="fas fa-pencil-alt"></i></a>
										<a name="enable-disable" id="" class="btn btn-warning w-25" href="#" role="button"><i class="fa-solid fa-lock"></i></a>
										<a name="delete" id="" class="btn btn-danger w-25" href="<?= base_url() ?>homepage/deleteconfirm/<?= $item['id'] ?>" role="button"><i class="fas fa-trash"></i></a>
									</div>
								<?php endif ?>
							<?php endif ?>
						</div>
					</div>
				</div>

			<?php endforeach ?>
		</div>
	</main>