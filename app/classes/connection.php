<?php
// create connection
$con = mysqli_connect("localhost","root","","legitize_test");

//check connection
if (!$con)
  {
  die("Connection error: " . mysqli_connect_errno());
  }

?>