<section id="categories">
  <h2>Categories</h2>
  <ul>
    <?php foreach ($categories as $category) { ?>
      <li><a href="?cat_id=<?=$category['cat_id']?>"><?=$category['cat_name']?></a></li>
    <?php } ?>
  </ul>
</section>
