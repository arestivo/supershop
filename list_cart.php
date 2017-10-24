<?php
  include_once('includes/init.php');

  include_once('database/category.php');
  include_once('database/product.php');

  $categories = getAllCategories();
  $products = getCartProducts();

  include_once('templates/common/header.php');
  include_once('templates/category/list_categories.php');
  include_once('templates/product/list_cart.php');
  include_once('templates/common/footer.php');
?>
