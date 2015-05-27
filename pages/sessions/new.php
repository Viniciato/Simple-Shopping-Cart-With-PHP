<?php 
  $page_title = 'Login';
  require '_header.php';

  $user_session = isset($user_session) ? $user_session : new UserSession();
?>

<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form action="sign_in.php" method="POST" role="login" novalidate>
          <h1>Formulário de login</h1>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </span>
            <input type="email" name="user_session[email]" id="email" value="<?= $user_session->getEmail() ?>" placeholder="admin@web.gp.edu.br" required class="form-control input-lg"/>
          </div>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i>
            </span>
            <input type="password" class="form-control input-lg" name="user_session[password]" id="password" placeholder="123456" required="" />
          </div>
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block glyphicon glyphicon-check">Entrar</button>
        </form>
      </div>  
    </div>



<?php require '_footer.php'; ?>