<?php

if (isset($_POST['add']) || isset($_POST['increase'])) {
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
    $quantity = $product[2] + 1;
    $img = $product[3];
    if (isset($_POST['increase'])) {
      header('location:cart.php'); 
    }
  }
  else{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = 1;
    $img = $_POST['img'];
    $id = $_POST['id'];
  }

  setCookie("product[{$id}]", $name.'::'.$price.'::'.$quantity.'::'.$img, time()+3600*24);

}

?>