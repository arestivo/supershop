<section id="products">
  <?php foreach ($products as $product) { ?>
    <article>
      <h2><?=$product['pro_name']?></h2>
      <p class="description"><?=$product['pro_description']?></p>
      <img src="images/products/<?=$product['pro_id']?>.png">
      <p class="price"><?=$product['pro_price']?>€<?=$product['pro_unit']?></p>
      <a href="action_add_to_cart.php?id=<?=$product['pro_id']?>">Buy</a>
    </article>
  <?php } ?>
</section>
