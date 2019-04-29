<?php
include "functions.php";
if (isset($_POST['submit'])) {
  create();
}
?>

<?php include "includes/header.php"; ?>

<h1 class="text-center">Sign Up Page</h1>

<div class="container">
  <div class="col-xs-6">
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username Here">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password Here">
      </div>
      <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" name="submit" value="SIGN UP">
      </div>
    </form>
  </div>
</div>

<p class="text-center lead"><a href="http://localhost/PHP/demo/mysql/login.php">Go to Main Page</a></p>

<?php include "includes/footer.php"; ?>