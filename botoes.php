<?php

if (isset($_POST['adicionar']) || isset($_POST['aumentar'])) {
  $id = $_POST['id'];
  setproduto($id);
}

function setproduto($id){
  if (isset($_COOKIE['product'][$id])) {
    $product = explode('::', $_COOKIE['product'][$id]);
    $name = $product[0];
    $valor = $product[1];
    $qtd = $product[2];
    $qtd++;
    $img = $product[3];
  }
  else{
    $name = $_POST['products'][0];
    $valor = $_POST['products'][1];
    $qtd = 1;
    $img = $_POST['products'][3];
    $id = $_POST['id'];
  }
  setCookie("product[{$id}]", $name.'::'.$valor.'::'.$qtd.'::'.$img, time()+3600*24);

}

?>