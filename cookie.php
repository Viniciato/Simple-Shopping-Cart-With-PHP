<?php

if (isset($_POST['add']) || isset($_POST['increase'])) {
  $id = $_POST['id'];
  setproduct($id);
}

function setproduct($id){
  if (isset($_COOKIE['product'][$id])) {
    $product = explode('::', $_COOKIE['product'][$id]);
    $name = $product[0];
    $price = $product[1];
    $quantity = $product[2] + 1;
    $img = $product[3];
  }
  else{
    $name = $_POST['products'][0];
    $price = $_POST['products'][1];
    $quantity = 1;
    $img = $_POST['products'][3];
    $id = $_POST['id'];
  }
  setCookie("product[{$id}]", $name.'::'.$price.'::'.$quantity.'::'.$img, time()+3600*24);

}

?>