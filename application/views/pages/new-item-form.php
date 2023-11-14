<!-- col-md-12 ml-sm-auto col-lg-12 px-4 -->
<main style="max-width: 600px;" role="main" class="container d-flex align-items-center justify-content-center align-content-center mt-5">
	<div class="bodyForm d-flex p-3 mx-5">

		<!-- col-md-12 ml-sm-auto col-lg-12 px-4 -->
		<form action="<?= base_url() ?>homepage/insertnewitem" method="post" class="">
			<div class="d-flex">
				<div class="col-md-6 my-2 mx-1">
					<div class="form-group">
						<strong><label for="item_name">Nome </label></strong>
						<input type="text" class="form-control" name="item_name" id="item_name" placeholder="Nome" value="" required>
					</div>
				</div>
				<div class="col-md-6 my-2 mx-3 overflow-hidden">
					<div class="form-group">
						<strong><label for="brand">Marca </label></strong>
						<input type="text" class="form-control" name="brand" id="brand" placeholder="Marca" value="" required>
					</div>
				</div>
			</div>

			<div class=" d-flex justify-content-center align-items-center">
				<div class="col-md-6 my-2 mx-1">
					<div class="form-group">
						<strong><label for="model">Modelo </label></strong>
						<input type="text" class="form-control" name="model" id="model" placeholder="Modelo" value="" required>
					</div>
				</div>
				<div class="y-2 mx-1">
					<div class="form-group">
						<strong><label for="color">Cor </label></strong>
						<input type="text" class="form-control" name="color" id="color" placeholder="Cor" value="" required>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-start align-content-start">
				<div class=" my-2 mx-1">
					<div class="form-group">
						<strong><label for="stock">Quantidade </label></strong>
						<input type="text" class="form-control" name="stock" id="stock" placeholder="Quantidade" value="" required>
					</div>
				</div>
				<div class=" my-2 mx-1">
					<div class="form-group">
						<strong><label for="item-size">Tamanho </label></strong>
						<input type="text" class="form-control" name="item_size" id="item-size" placeholder="Tamanho" value="" required>
					</div>
				</div>

				<div class=" my-2 mx-1">
					<div class="form-group">
						<strong><label for="price">Preço </label></strong>
						<input type="text" class="form-control" name="price" id="price" placeholder="Preço" value="" required>
					</div>
				</div>
			</div>


			<div class="col-12 pt-4">
				<div class="form-group">
					<strong><label for="description">Descrição </label></strong>
					<textarea name="description" id="description" rows="5" cols="12" class="form-control" required placeholder="Descrição"></textarea>
				</div>
			</div>
			<div class="d-flex justify-content-center align-content-center align-items-center ">
				<button type="submit" class="btn btn-success btn-xs m-1"><i class="fas fa-check"></i> Atualizar</button>
				<a class="btn btn-danger btn-xs m-1"><i class="fas fa-times"></i> Cancelar</a>
			</div>
		</form>
	</div>
</main>