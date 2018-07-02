<?php
  $servername = "localhost";
  $username   = "root";
  $pass       = "";
  $database   = "";

  $conn = mysqli_connect($servername,$username,$pass,$database);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
    echo "Connected Successfully";

  mysqli_close($conn);
 ?>
