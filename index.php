<?php
  include_once('database/connection.php');
  include_once('database/category.php');

  $categories = getAllCategories();

  include_once('templates/common/header.php');
  include_once('templates/category/list_categories.php');
  include_once('templates/product/list_products.php');
  include_once('templates/common/footer.php');
?>
