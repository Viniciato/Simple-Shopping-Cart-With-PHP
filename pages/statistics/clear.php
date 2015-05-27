<?php 
  should_be_autenticated();
  $pages = isset($_COOKIE['pages']) ? $_COOKIE['pages'] : [];
  
  foreach ($pages as $page => $count) {
    setCookie("pages[{$page}][access]", '', time() - 3600, '/');
    setCookie("pages[{$page}][title]", '', time() - 3600, '/');
  }

  redirect_to("/pages/statistics");
?>
