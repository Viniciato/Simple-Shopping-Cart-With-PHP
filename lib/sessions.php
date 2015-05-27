<?php

function should_be_autenticated(){
  if (!(isset($_SESSION['user']))) {
    flash('danger', 'Você deve estar logado para acessar está página!');
    redirect_to('/pages/sessions/new');
  }
}

function should_not_be_autenticated(){
  if (isset($_SESSION['user'])) {
    flash('warning', 'Você deve estar deslogado para acessar está página!');
    redirect_to('/');
  }
}

?>