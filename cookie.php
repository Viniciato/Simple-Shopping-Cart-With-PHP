<?php

if (isset($_POST['add']) || isset($_POST['increase']) || isset($_POST['decrease']) || isset($_POST['buy'])) {
  $id = $_POST['id'];
  set_product($id);
}

if (isset($_POST['clear'])) {
  clear_cart();
}

function clear_cart(){
  for ($i=0; $i < 12; $i++) { 
    setcookie("product[$i]", "");
  }
  header("location:cart.php");
}

function set_product($id){
  if (isset($_COOKIE['product'][$id])) {
    $product = explode('::', $_COOKIE['product'][$id]);
    $name = $product[0];
    $price = $product[1];
    if (isset($_POST['increase']) || isset($_POST['buy'])) {
      $quantity = $product[2] + 1;
    }
    elseif (isset($_POST['decrease'])) {
      $quantity = $product[2] - 1;
    }
    $img = $product[3];
  }
  else{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = 1;
    $img = $_POST['img'];
    $id = $_POST['id'];
  }
  if (isset($_POST['increase']) || isset($_POST['decrease']) || isset($_POST['buy'])) {
    header('location:cart.php'); 
  }

  setCookie("product[{$id}]", $name.'::'.$price.'::'.$quantity.'::'.$img, time()+3600*24);

}

?>