<?php require 'logics/statistics/statistics_logic.php' ?>

<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site de Vendas">
    <meta name="author" content="MichaelVornes/ViniciusNadin">

    <title><?= @$page ?> | APS-2</title>

    <?php stylesheet_include_tags('bootstrap.min.css','heroic-features.css') ?>

    <!--
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/heroic-features.css" rel="stylesheet">
-->

</head>

<body>

    <?php require "_navbar.php" ?>

    <div class="container">
      <?php foreach (flash() as $flash_type => $flash_msg): ?>
       <div class="alert alert-<?= $flash_type ?>" role="alert">
         <a class="close" data-dismiss="alert">x</a>
         <p><?= $flash_msg ?></p>
     </div>
 <?php endforeach ?>