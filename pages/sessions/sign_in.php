<?php
  redirect_if_not_post('user_session', 'location: new.php');

  $user_session = new UserSession($_POST['user_session']);
  if ($user_session->isAuthenticate()) {
    //.. mostra mensagem de autenticação realizada
    //.. redirecionar para área restrita
    flash("success", "Usuário autenticado com sucesso!");
    redirect_to("/pages/statistics");
  } else {
    //.. mostra mensagem de email/senha incorretos
    flash("danger", "Usuário/senha Inválidos!");
    require 'new.php';
  }
?>