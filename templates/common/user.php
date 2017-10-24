<div id="user">
  <?php if (isset($_SESSION['username']) && $_SESSION['username'] != '') { ?>
    <form action="action_logout.php" method="post">
      <a href="register.php"><?=$_SESSION['username']?></a>
      <input type="submit" value="Logout">
    </form>
  <?php } else { ?>
    <form action="action_login.php" method="post">
      <input type="text" placeholder="username" name="username">
      <input type="password" placeholder="password" name="password">
      <div>
        <input type="submit" value="Login">
        <a href="register.php">Register</a>
      </div>
    </form>
  <?php } ?>
</div>
