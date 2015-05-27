<?php
require '_header.php';
require 'cookie.php'; 

$products = @$_COOKIE['product'];?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="bs-example" data-example-id="contextual-table">
        <table class="table">
          <thead>
            <h3>Itens que estão no carrinho</h3>
          </thead>
          <tbody>
            <?php if (isset($products)) {
              foreach($products as $index => $product) {
                $product = explode('::', $product);
                $id = $index + 1;
                ?>
                <tr class="active">
                  <th scope="row"><?= $id;  ?></th>
                  <td><img src="<?= $product[3]; ?>" alt="" width="50px" height="50px"></td>
                  <td><h4><?= $product[0];  ?></h4></td>
                  <td><h4>R$ <?= $product[1]*$product[2];?> </h4></td>
                  <td>
                    <form method="POST">

                      <input type="hidden" name="products" value="<?= $products ?>">
                      <input type="hidden" name="id" value="<?= $index ?>">
                      <button type="submit" class="btn btn-info" name="aumentar">+</button>
                      <div class="col-md-3">
                        <input class="form-control" type="text" placeholder="<?= $product[2]; ?>" readonly>
                      </div>
                      <button type="button" class="btn btn-danger">-</button> 
                    </form>
                  </td>
                </tr>
                <?php } }?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row text-center">
          <button class="btn btn-success btn-lg">Comprar produtos</button>
          <button class="btn btn-danger btn-lg">Zerar Carrinho</button>
        </div>

        <?php require '_footer.php'; ?>