<?php
  $page = $_SERVER['REQUEST_URI'];

  $access = 0;
  if (isset($_COOKIE['pages'][$page])) { 
    $access = $_COOKIE['pages'][$page]['access'];
  }
  $access= $access+ 1;

  setCookie("pages[{$page}][access]", $access, time()+3600*24, '/');
  setCookie("pages[{$page}][title]", $page , time()+3600*24, '/');
?>
