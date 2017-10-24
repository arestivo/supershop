<?php
  include_once('includes/init.php');

  session_destroy();

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
