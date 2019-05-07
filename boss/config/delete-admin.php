<?php
  require '../../connection.php';

  $id  = $_GET['delete'];

  $sql = mysqli_query($conn,"DELETE FROM user WHERE id_user=$id");

  if ($sql) {
    echo "<script>alert('Data has been removed.');window.location='../../boss/'</script>";
  }else {
    echo "Logic Error";
  }
mysqli_close($conn);
 ?>
