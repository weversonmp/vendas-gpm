<div class="container mt-4 p-0 mt-5">
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
													<?= $itemToDelete['item_name'] ?>
												</p>
												<small class=" d-flex">
													<span class=" text-muted">Cor:&nbsp;</span>
													<span class=" fw-bold"><?= $itemToDelete['color'] ?></span>
												</small> <small class="">
													<span class=" text-muted">Tamanho:</span>
													<span class=" fw-bold"><?= $itemToDelete['item_size'] ?></span>
												</small>
											</div>
										</div>
									</td>
									<td>
										<div class="d-flex">
											<p class="pe-3"><span class="red">R$ <?= $itemToDelete['price'] ?></span></p>
										</div>
									</td>
									<td>
										<div class="d-flex align-items-center"> <span class="pe-3 text-muted">Quantity</span> <span class="pe-3"> <input class="ps-2" type="number" value="2"></span>
											<div class="round"> <span class=""> <?= $itemToDelete['stock'] ?> </span> </div>
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
				<div class="unregistered mb-4"> <span class="py-1">unregistered account</span> </div>
				<div class="d-flex justify-content-between pb-3"> <small class="text-muted">Transaction code</small>
					<p class="">VC115665</p>
				</div>
				<div class="d-flex justify-content-between b-bottom"> <input type="text" class="ps-2" placeholder="COUPON CODE">
					<div class="btn btn-primary">Apply</div>
				</div>
				<div class="d-flex flex-column b-bottom">
					<div class="d-flex justify-content-between py-3"> <small class="text-muted">Resumo da Compra R$:</small>
						<p>$122</p>
					</div>
					<div class="d-flex justify-content-between pb-3"> <small class="text-muted">Frete R$:</small>
						<p>$22</p>
					</div>
					<div class="d-flex justify-content-between"> <small class="text-muted">Valor Total R$:</small>
						<p>R$ <?= $itemToDelete['price'] ?></p>
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
</div>