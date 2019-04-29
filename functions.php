<?php
include "db_conn.php"; 

function countRows()
{
  global $conn;
  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);
  $rowcount = mysqli_num_rows($result);
  return $rowcount;
}

function readData()
{
  global $conn;
  $query = "SELECT id, username FROM users";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die('Query Failed!' . "<br>" . mysqli_error($conn));
  }
  while ($row = mysqli_fetch_assoc($result)) {
    // print_r($row);
    $id = $row['id'];
    $username = $row['username'];
    echo "<p class='lead'> $id / $username</p>";
  }
}

function showAllData()
{
  global $conn;
  $query = "SELECT * FROM users";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die('Query failed...' . "<br>" . mysqli_error($conn));
  }
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $username = $row['username'];
    echo "<option value='$id'> $id / $username</option>";
  }
}

function create()
{
  global $conn, $username, $password;
  if ($username && $password) {
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die('Query failed...' . "<br>" . mysqli_error($conn));
    }
    echo "<h2 class='text-center'>Congrats! You Are Now Officially Signed Up!!!<h2>" . "<br>" . "<p class='text-center'><a class='btn btn-dark btn-lg' href='http://localhost/PHP/demo/mysql/login.php'>Back to Main</a></p>";
    // header('Location: http://localhost/PHP/demo/mysql/login.php');
  } else {
    // echo "Please fill in the both boxes." . "<br>";
    ?><p class="lead text-center">Please fill in the both boxes</p><?php
  }
  // echo "Successfully submitted! ";
}

function update()
{
  global $conn, $id, $username, $password;
  if ($username && $password) {
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
      die("Query failed. " . "<br>" . mysqli_error($conn));
    } else {
      echo "<h2 class='text-center'>Successfully Updated!!!<h2>" . "<br>" . "<p class='text-center'><a class='btn btn-dark btn-lg' href='http://localhost/PHP/demo/mysql/login.php'>Back to Main</a></p>";
      // header("Location: http://localhost/PHP/demo/mysql/login.php");
    }
  } else {
    ?><p class="lead text-center">Please fill in the both boxes</p><?php
    // die("Fill in the form. " . "<br>" . "<a href='http://localhost/PHP/demo/mysql/login_update.php'>Try Again</a>");
  }
}

function delete()
{
  global $conn, $id;
  $query = "DELETE FROM users WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if (!$result) {
    die("Query failed. " . "<br>" . mysqli_error($conn));
  } else {
    echo "<h2 class='text-center'>Account Deleted<h2>" . "<br>" . "<p class='text-center'><a class='btn btn-dark btn-lg' href='http://localhost/PHP/demo/mysql/login.php'>Back to Main</a></p>";
    // header("Location: http://localhost/PHP/demo/mysql/login.php");
  }
}
