<style>
	#dialogEdit {
		margin: auto;
		max-width: 75%;
		border-radius: 25px;
	}

	.dialog-edit-item::backdrop {
		background-color: rgba(0, 0, 0, 0.8);
	}

	@media screen and (max-width: 450px) {
		#dialogEdit {
			max-width: 100%;
		}
	}

</style>

<main class="mt-5 container">
	<div class="row bg-dark p-3 border border-dark shadow">
		<?php if (!$items) : ?>
			<div class="">
				<h1 style="color: white;">A pesquisa não obteve resultados...</h1>
			</div>
		<?php endif ?>

		<?php foreach ($items as $item) : ?>

			<div class="m-md-auto col-sm-5 col-lg-3 fade-in mb-3">
				<div class="card mb-3" id="card-shape">
					<div class="card-body">
						<img src="<?= base_url() ?>img/shoes.jpg" alt="Imagem do Tênis" class="card-img">
						<h3 id="h3a" class="card-title text-break text-truncate "><?= $item['item_name'] ?></h3>
						<p class="card-text mb-2 text-truncate"><?= $item['brand'] ?></p>
						<p class="card-text mb-2 text-truncate"><?= $item['model'] ?></p>
						<p class="card-text mb-2 text-truncate"><?= $item['color'] ?></p>
						<p class="card-text mb-2 text-truncate">R$ <?= $item['price'] ?></p>
						<?php ?>

						<?php if (!$whoIsLogged || $whoIsLogged['access_type'] == 'custumer') : ?>

							<div class="mw-100 d-flex justify-content-around ">
								<a name="edit" id="" class="btn btn-success w-25 xl" href="<?= base_url() ?>cart/payment/<?= $item['id'] ?>" role="button"><i class="fa-solid fa-money-bill-1-wave"></i></a>
							</div>

						<?php elseif ($whoIsLogged['access_type'] == 'admin') : ?>

							<div class="mw-100 d-flex justify-content-around gap-md-2  ">
								<a name="edit" id="modal-edit-<?= $item['id'] ?>" class="btn btn-success m-auto col-md-4" role="button" onclick="modalEditItem(<?= $item['id'] ?>)"><i class="fas fa-pencil-alt"></i></a>
								<a name="enable-disable" id="" class="btn btn-warning m-auto col-md-4 " href="#" role="button"><i class="fa-solid fa-lock"></i></a>
								<a name="delete" id="" class="btn btn-danger m-auto col-md-4 " href="<?= base_url() ?>homepage/deleteconfirm/<?= $item['id'] ?>" role="button"><i class="fas fa-trash"></i></a>
							</div>

						<?php endif ?>

					</div>
				</div>
			</div>

			<?php if (isset($whoIsLogged['access_type'])) : ?>
				<?php if ($whoIsLogged['access_type'] == 'admin') : ?>

					<dialog id="dialogEdit" class="col-lg-6 dialog-edit-item dialog-edit-item-<?= $item['id'] ?>">
						<div class="bodyForm d-flex flex-column p-3">

							<!-- col-md-12 ml-sm-auto col-lg-12 px-4 -->
							<form action="<?= base_url() ?>homepage/update" method="post" class="">
								<input type="hidden" class="d-none form-control" name="item_id" id="item_id" value="<?= $item['id'] ?>">
								<div class="d-flex">
									<div class="col-md-6 my-3 mx-1">
										<div class="form-group">
											<strong><label for="item_name">Nome </label></strong>
											<input type="text" class="form-control" name="item_name" id="item_name" placeholder="Nome" value="<?= $item['item_name'] ?>" required>
										</div>
									</div>
									<div class="col-md-6 my-3 mx-3 overflow-hidden">
										<div class="form-group">
											<strong><label for="brand">Marca </label></strong>
											<input type="text" class="form-control" name="brand" id="brand" placeholder="Marca" value="<?= $item['brand'] ?>" required>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="form-group">
										<strong><label for="model">Modelo </label></strong>
										<input type="text" class="form-control" name="model" id="model" placeholder="Modelo" value="<?= $item['model'] ?>" required>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="form-group">
										<strong><label for="color">Cor </label></strong>
										<input type="text" class="form-control" name="color" id="color" placeholder="Cor" value="<?= $item['color'] ?>" required>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="form-group">
										<strong><label for="stock">Quantidade </label></strong>
										<input type="text" class="form-control" name="stock" id="stock" placeholder="Quantidade" value="<?= $item['stock'] ?>" required>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="form-group">
										<strong><label for="item-size">Tamanho </label></strong>
										<input type="text" class="form-control" name="item-size" id="item-size" placeholder="Tamanho" value="<?= $item['item_size'] ?>" required>
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<div class="form-group">
										<strong><label for="price">Preço </label></strong>
										<input type="text" class="form-control" name="price" id="price" placeholder="Preço" value="<?= $item['price'] ?>" required>
									</div>
								</div>
								<div class="col-12 pt-4">
									<div class="form-group">
										<strong><label for="description">Descrição </label></strong>
										<textarea name="description" id="description" rows="5" cols="12" class="form-control" required><?= $item['description'] ?></textarea>
									</div>
								</div>
								<div class="d-flex justify-content-center align-content-center align-items-center ">
									<button type="submit" class="btn btn-success btn-xs m-1"><i class="fas fa-check"></i> Atualizar</button>
									<a href="<?= base_url() ?>homepage" class="btn btn-danger btn-xs m-1"><i class="fas fa-times"></i> Cancelar</a>
								</div>
							</form>
						</div>
					</dialog>
				<?php endif ?>
			<?php endif ?>

		<?php endforeach ?>
	</div>
</main>

<script>
	const modalEditItem = (itemId) => {
		const modalItem = document.querySelector(`.dialog-edit-item-${itemId}`)
		modalItem.showModal()
	}
</script>