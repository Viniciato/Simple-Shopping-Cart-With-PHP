<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-header">

      <?= link_to('/', include_span('home') . ' Início ', ' class="navbar-brand"') ?>
      
      <!--
      <?= link_to('/', '<span class="glyphicon glyphicon-home"> </span> Início ', ' class="navbar-brand"') ?>

      <?= link_to('/', 'Início', 'class="navbar-brand"> <span class="glyphicon glyphicon-home"> </span') ?>

      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Início</a>
    -->
  </div>

    <!-- 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class=" navbar-right"><a href="login.php" class="navbar-brand"> <span class="glyphicon glyphicon-lock"></span> Login</a></p>
      <p class=" navbar-right"><a href="cart.php" class="navbar-brand"> <span class="glyphicon glyphicon-shopping-cart"></span> Carrinho<span class="badge">3</span></a></p>
    </div>
  -->

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php if (isset($_SESSION['user'])): ?>
      <p class=" navbar-right"> <?= link_to('/pages/sessions/sign_out.php', include_span('lock') . ' Logout', ' class="navbar-brand"') ?></p>
      <p class=" navbar-right"> <?= link_to('/pages/statistics/', include_span('list-alt') . ' Relatórios', ' class="navbar-brand"') ?> </p>
      <p class=" navbar-right"> <a class="navbar-brand" > Olá  <?= $_SESSION['user']['name'] ?> </a> </p>
    <?php else: ?>
      <p class=" navbar-right"> <?= link_to('/pages/sessions/new.php', include_span('lock') . ' Login ', ' class="navbar-brand"') ?> </p>
      <p class=" navbar-right"> <?= link_to('/cart.php', include_span('shopping-cart') . ' Carrinho ', ' class="navbar-brand"') ?> </p>
    <?php endif ?>  
      <!--
      <p class=" navbar-right"><a href="login.php" class="navbar-brand"> <span class="glyphicon glyphicon-lock"></span> Login</a></p>
      <p class=" navbar-right"><a href="cart.php" class="navbar-brand"> <span class="glyphicon glyphicon-shopping-cart"></span> Carrinho<span class="badge">3</span></a></p>
    -->

  </div>

</div>
</nav>  