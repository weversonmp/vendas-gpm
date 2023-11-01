<div class="container p-0">
	<form action="<?= base_url() ?>cart/payment_processed/<?= $itemToBuy['id'] ?>" method="POST">
		<div class="row px-md-4 px-2 pt-4">
			<div class="col-lg-8">
				<p class="pb-2 fw-bold">Order</p>
				<div class="card">
					<div>
						<div class="table-responsive px-md-4 px-2 pt-3">
							<table class="table table-borderless">
								<tbody>
									<tr class="border-bottom">
										<td>
											<div class="d-flex align-items-center">
												<div> <img class="pic" src="<?= base_url() ?>img/shoes.png" alt=""> </div>
												<div class="ps-3 d-flex flex-column justify-content">
													<p class="fw-bold">
														<?= $itemToBuy['item_name'] ?>
													</p>
													<small class=" d-flex">
														<span class=" text-muted">Cor:&nbsp;</span>
														<span class=" fw-bold"><?= $itemToBuy['color'] ?></span>
													</small> <small class="">
														<span class=" text-muted">Tamanho:</span>
														<span class=" fw-bold"><?= $itemToBuy['item_size'] ?></span>
													</small>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex">
												<input name="total_price" class="pe-3 d-none" value="<?= $itemToBuy['price'] ?>"><span>R$ <?= $itemToBuy['price'] ?></span>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantidade</span> <span class="pe-3"> <input name="qtt" id="qtt" value="1" class="ps-2" type="number" placeholder="1" min="1" max="<?= $itemToBuy['stock'] ?>"></span>
												<div class="round"> <span class=""> <?= $itemToBuy['stock'] ?> </span> </div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 payment-summary">
				<p class="fw-bold pt-lg-0 pt-4 pb-2">Payment Summary</p>
				<div class="card px-md-3 px-2 pt-4">
					<div class="unregistered mb-4"> <span class="py-1">Usuário: <?php print_r($_SESSION['logged_user']['username']) ?></span> </div>
					<div class="d-flex justify-content-between pb-3 text-nowrap"> <small class="text-muted">Nome:&nbsp;</small>
						<small><input name="card_name" id="" class="" type="text" placeholder=" Nome no cartão" required></small>
					</div>
					<div class="d-flex justify-content-between pb-3 text-nowrap"> <small class="text-muted">Nº Cartão:&nbsp;</small>
						<small><input name="card_number" id="" class="" type="number" placeholder=" Apenas Números" required></small>
					</div>
					<div class="d-flex justify-content-between pb-3 text-nowrap"> <small class="text-muted">CCV:&nbsp;</small>
						<small><input name="card_ccv" id="" class="w-25" type="number" placeholder="xxx" required></small>
					</div>
					<div class="d-flex justify-content-between pb-3 text-nowrap"> <small class="text-muted">Validade:&nbsp;</small>
						<small><input name="card_date" id="" class="" type="date" required></small>
					</div>





					<div class="order-infos-div d-none">
						<input name="user_id" id="" class="" type="text" value="<?= $_SESSION['logged_user']['id'] ?>">
					</div>


					<div class="item-infos-div d-none">
						<input name="" id="" class="" type="text" value="">
						<input name="" id="" class="" type="text" value="">
						<input name="" id="" class="" type="text" value="">
					</div>





					<div class="d-flex flex-column b-bottom">
						<div class="d-flex justify-content-between py-3"> <small class="text-muted">Resumo da Compra:</small>
							<p>R$ <?= $itemToBuy['price'] ?></p>
						</div>
						<div class="d-flex justify-content-between pb-3"> <small class="text-muted">Frete:</small>
							<p>R$ 0.00</p>
						</div>
						<div class="d-flex justify-content-between"> <small class="text-muted">Valor Total:</small>
							<p>R$ <?= $itemToBuy['price'] ?></p>
						</div>
					</div>
					<div class="my-3"></div>
				</div>
			</div>
			<div class="d-flex align-items-center justify-content-center m-3">
				<div class="d-flex align-items-center">
					<button class="btn btn-success" type="submit">Finalizar Pagamento</button>
				</div>
			</div>
		</div>
	</form>
</div>