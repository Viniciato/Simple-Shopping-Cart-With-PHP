<?php

  redirect_if_not_post('contact', "location: index.php");
  
  $contact = new Contact($_POST['contact']);

  if ($contact->save();) {
    
    flash('success', 'Sua mensagem foi enviada com sucesso!');
    redirect_to("/");
  } else {
    flash('danger', 'Dados inválidos');
    require 'index.php';
  }

?>