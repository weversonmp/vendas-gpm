<main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"></h1>
	</div>

	<div class="col-md-12">

		<form action="<?= base_url() ?>homepage/update" method="post" class="d-flex flex-column justify-content-center align-content-center ">

			<input type="hidden" class="d-none form-control" name="item_id" id="item_id" value="<?= $item['id'] ?>">

			<div class="col-md-6 mb-3">
				<div class="form-group">
					<strong><label for="item_name">Nome </label></strong>
					<input type="text" class="form-control" name="item_name" id="item_name" placeholder="Nome" value="<?= $item['item_name'] ?>" required>
				</div>
			</div>

			<div class="col-md-6 mb-3">
				<div class="form-group">
					<strong><label for="description">Descrição </label></strong>
					<textarea name="description" id="description" rows="5" class="form-control" required><?= $item['description'] ?></textarea>
				</div>
			</div>

			<div class="col-md-6 mb-3">
				<div class="form-group">
					<strong><label for="brand">Marca </label></strong>
					<input type="text" class="form-control" name="brand" id="brand" placeholder="Marca" value="<?= $item['brand'] ?>" required>
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

			<div class="col-md-6 pt-4">
				<button type="submit" class="btn btn-success btn-xs m-1"><i class="fas fa-check"></i> Atualizar</button>
				<a href="<?= base_url() ?>homepage" class="btn btn-danger btn-xs m-1"><i class="fas fa-times"></i> Cancelar</a>
			</div>
	</div>
	</form>
	</div>

</main>
</div>
</div>