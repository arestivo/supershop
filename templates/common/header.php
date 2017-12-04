<!DOCTYPE html>
<html>

  <head>
    <title>Ultra Shop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="javascript/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <header>
      <div id="info">
        <img src="images/site/logo.svg">
        <h1><a href="index.php">Ultra Shop</a></h1>
        <a href="list_cart.php"><i class="fa fa-shopping-cart"></i>(<?=getCartSize()?>)</a>
      </div>
      <?php include_once('templates/common/user.php'); ?>
    </header>

    <nav id="menu">
      <ul>
        <li><a href="index.php">Products</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contacts.php">Contacts</a></li>
      </ul>
    </nav>

    <section id="messages">
      <?php $errors = getErrorMessages();foreach ($errors as $error) { ?>
      <article class="error">
        <p><?=$error?></p>
      </article>
      <?php } ?>
      <?php $successes = getSuccessMessages();foreach ($successes as $success) { ?>
      <article class="success">
        <p><?=$success?></p>
      </article>
      <?php } clearMessages(); ?>
    </section>
