<?php
  include_once('includes/init.php');

  addToCart($_GET['id']);

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
