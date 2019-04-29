<?php
include "functions.php";
?>

<?php include "includes/header.php"; ?>

<h1 class="text-center">Meet Our Proud Members</h1>
<br>
<p class="text-center lead"><a class="btn btn-info" href="http://localhost/PHP/demo/mysql/login.php">Go to Main Page</a></p>

<div class="container" style="display: flex; justify-content: center; width: 100%;">
  <div style="background: beige; margin: 10px; padding: 10px 50px; border-radius: 5px;">
    <pre class="lead">
      <?php readData(); ?>
    </pre>
  </div>
</div>

<p class="text-center lead"><a class="btn btn-warning" href="#top">To Top</a></p>

<?php include "includes/footer.php"; ?>