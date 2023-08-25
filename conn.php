<?php
$conn = mysqli_connect("localhost","","","");
mysqli_set_charset($conn,"utf8");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
