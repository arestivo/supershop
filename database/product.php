<?php

  function getAllProducts() {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM product JOIN
                                category USING (cat_id)
                           ORDER BY pro_id DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getProductById($id) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM product JOIN
                                category USING (cat_id)
                           WHERE pro_id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

?>
