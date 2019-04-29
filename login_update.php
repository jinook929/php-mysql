<?php
include "functions.php";
if (isset($_POST['submit'])) {
  update();
}
?>

<?php include "includes/header.php"; ?>

<h1 class="text-center">Update Page</h1>

<div class="container">
  <div class="col-xs-6">
    <form action="login_update.php" method="post">
      <div class="form-group">
        <label for="id">Choose Your ID:</label>
        <select name="id" id="id">
          <?php 
          showAllData();
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="username">New Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="New Username Here">
      </div>
      <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="New Password Here">
      </div>
      <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
      </div>
    </form>
  </div>
</div>

<p class="text-center lead"><a href="http://localhost/PHP/demo/mysql/login.php">Go to Main Page</a></p>

<?php include "includes/footer.php"; ?>