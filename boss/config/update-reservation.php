<?php
  require '../../connection.php';

  if (isset($_POST['submit'])) {
    $a  = $_POST['id-reservasi'];
    $c  = $_POST['time-event'];
    $d  = $_POST['id-venue'];
    $e  = $_POST['id-vendor'];
    $f  = $_POST['concept'];

    $sql = mysqli_query($conn,"UPDATE reservasi SET waktu_acara='$c', id_tempatAcara=$d, id_vendor='$e', konsep_acara='$f', waktu_pembuatan=now() WHERE id_reservasi=$a");

    if ($sql) {
      header("Location:../../boss");
    }else {
      echo "Logic Error";
    }
    mysqli_close($conn);
  }else {
    header("Location:../../boss");
  }

 ?>
