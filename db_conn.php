<?php 
$conn = mysqli_connect('localhost', 'root', 'root', 'loginapp');
if($conn) {
  // echo "DB successfully connected.";
} else {
  die("DB connection failed. " . mysqli_connect_error());
}

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

// Next lines allow typing special characters in text boxes.
  // $username = mysqli_real_escape_string($conn, $username);
  // $password = mysqli_real_escape_string($conn, $password);

$password = crypt($password, "$2y$10$.....................A");
// $hash = "$2y$10$";
// $salt = "usesomesillystringfore";
// $hash_salt = $hash . $salt;
// $password = crypt($password, $hash_salt);
?>