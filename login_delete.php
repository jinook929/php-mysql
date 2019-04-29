<?php
include "functions.php";
if (isset($_POST['submit'])) {
  delete();
}
?>

<?php include "includes/header.php"; ?>

<h1 class="text-center">Delete Page</h1>

<br>

<div class="container">
  <div class="col-xs-6">
    <form action="login_delete.php" method="post">
      <div class="form-group text-center">
        <label for="id">Choose Your Username : </label>
        <select name="id" id="id">
          <?php
          showAllData();
          ?>
        </select>
      </div>
      <div class="form-group text-right">
        <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
      </div>
    </form>
  </div>
</div>

<p class="text-center lead"><a href="http://localhost/PHP/demo/mysql/login.php">Go to Main Page</a></p>

<?php include "includes/footer.php"; ?>