<div style="max-width: 1440px;" class="container p-3">
  <p class="h3 pb-2 fw-bold">Ordens</p>
  <div class="card">
    <div class="table-responsive px-md-4 px-2 pt-3">
      <table class="table table-borderless">
        <thead>
          <tr class="text-center">
            <th>ID da Compra</th>
            <th>Item</th>
            <th>Marca</th>
            <th>Cor</th>
            <th>Pagamento</th>
            <th>Quantidade</th>
            <th>Preço Total</th>
            <th>Data</th>
            <th>Situação</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allOrders as $ordemItem) : ?>
            <tr class="border-bottom text-center">

              <td>
                <div>
                  <span class="text-muted"><?= $ordemItem['order_id'] ?></span>
                </div>
              </td>

              <td>
                <div class="d-flex flex-column align-items-center">
                  <div> <img class="pic" src="<?= base_url() ?>img/shoes.jpg" alt=""> </div>
                  <div class="d-flex flex-column text-center">

                    <small class=" d-flex text-center">
                      <span class=" fw-bold"><?= $ordemItem['item_name'] ?></span>
                    </small>

                    <small class="">
                      <span class="">Tamanho: </span>
                      <span class=" fw-bold text-center"><?= $ordemItem['item_size'] ?></span>
                    </small>
                  </div>
              </td>

              <td>
                <span><?= $ordemItem['brand'] ?> </span>
              </td>

              <td>
                <div class=""> <span class="text-muted"><?= $ordemItem['color'] ?></span>
                </div>
              </td>

              <td>
                <div class=""> <span class="text-muted"><?= $ordemItem['copy_payment_type'] ?></span>
                </div>
              </td>

              <td>
                <div class=""> <span class="text-muted"><?= $ordemItem['quantity'] ?></span>
                </div>
              </td>

              <td>
                <div class=""> <span class="text-muted">R$ <?= $ordemItem['total_price'] ?></span>
                </div>
              </td>

              <td>
                <div class=""> <span class="text-muted"><?= $ordemItem['order_date'] ?></span>
                </div>
              </td>

              <td>
                <div class=""> <span class="text-muted"><?= $ordemItem['order_state'] ?></span>
                </div>
              </td>

              <td>
                <div class="">
                  <a href="<?= base_url() ?>orders/<?= $ordemItem['order_id'] ?>"><i style="font-size: 40px" class="link-dark fa-solid fa-circle-info"></i></a>
                </div>
              </td>

            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>