<?php
  session_start();

  function getCartSize() {
    if (!isset($_SESSION['cart']))
      return 0;

    $cart_size = 0;
    foreach ($_SESSION['cart'] as $id => $qty)
      $cart_size += $qty;

    return $cart_size;
  }

  function addToCart($id) {
    if (!isset($_SESSION['cart']))
      $_SESSION['cart'] = array();

    if (!isset($_SESSION['cart'][$id]))
      $_SESSION['cart'][$id] = 0;

    $_SESSION['cart'][$id]++;
  }

  function setCurrentUser($username) {
    $_SESSION['username'] = $username;
  }

  function getErrorMessages() {
    if (isset($_SESSION['error_messages']))
      return $_SESSION['error_messages'];
    else
      return array();
  }

  function getSuccessMessages() {
    if (isset($_SESSION['success_messages']))
      return $_SESSION['success_messages'];
    else
      return array();
  }

  function clearMessages() {
    unset($_SESSION['error_messages']);
    unset($_SESSION['success_messages']);
  }
?>
