<?php 
  should_be_autenticated();
  $pages = isset($_COOKIE['pages']) ? $_COOKIE['pages'] : [] ;
  ksort($pages);
  $page_title = "Relatórios";
  require "_header.php";
?>

<div class="page-header">
  <h1>Relatório de Produtos Mais Comprados</h1>

  <table class="table">
    <caption>Histórico</caption>
    <thead>
      <tr>
        <th>Id Produto</th>
        <th>Nome Produto</th>
        <th>Quantidade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($pages as $page => $data):  ?>
        <tr>
          <td><?= $data['title'] ?></td>
          <td><?= $page ?></td>
          <td><?= $data['access'] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<span class="well">
  <?= link_to('/pages/statistics/clear.php', 'Limpar histórico de navegação', 'class="btn btn-primary"') ?>
</span>

<?php require "_footer.php" ?>
