<section id="cart">
  <table>
    <tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
  <?php $total = 0; foreach ($products as $product) { ?>
    <tr>
      <td><?=$product['pro_name']?></td>
      <td><?=$product['pro_price']?><?=$product['pro_unit']?></td>
      <td><?=$product['qty']?></td>
      <td>€<?=$product['qty'] * $product['pro_price']?></td>
      <?php $total += $product['qty'] * $product['pro_price'] ?>
    </tr>
  <?php } ?>
  <tr><td></td><td></td><td></td><td>€<?=$total?></td></tr>
  </table>
  <form action="checkout.php">
    <input type="submit" value="Checkout">
  </form>
</section>
