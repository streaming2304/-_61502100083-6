<?php
$conn = mysqli_connect("localhost","root","","65");
$conn-> set_charset("utf8");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>