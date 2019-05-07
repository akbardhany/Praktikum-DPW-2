<?php
  require '../../connection.php';

  $id  = $_GET['delete'];

  $sql = mysqli_query($conn,"DELETE FROM tempat_acara WHERE id_tempatAcara=$id");

  if ($sql) {
    echo "<script>alert('Data has been removed.');window.location='../../boss/'</script>";
  }else {
    echo "Logic Error";
  }
mysqli_close($conn);
 ?>
