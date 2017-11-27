<?php
  include_once('includes/init.php');

  addToCart($_GET['id']);
  $_SESSION['success_messages'][] = "Product added to cart!";

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
