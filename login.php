<?php 
include "functions.php";
?>

<?php include "includes/header.php"; ?>

<h1 class="text-center">We have <?php echo countRows(); ?> members on our list!!!</h1>
<br>
<p class="text-center"><a href="login_create.php" class="btn btn-danger btn-lg">Join Us</a></p>
<br>
<h2 class="text-center"><a href="login_read.php">Check Our Members!</a></h2>
<br>
<p class="lead text-center"><a href="login_update.php">Update your info here</a></p>
<p class="text-center"><a href="login_delete.php">If you want to delete your account, click here</a></p>

<?php include "includes/footer.php"; ?>