<?php
  require '../../connection.php';

  if (isset($_POST['submit'])) {
    $a  = $_POST['fc-id'];
    $b  = $_POST['fc-name'];
    $c  = $_POST['fc-nik'];
    $e  = $_POST['fc-phone'];
    $d  = $_POST['fc-address'];
    $f  = $_POST['fc-email'];

    $sql = mysqli_query($conn,"UPDATE korlap SET nama_korlap='$b', noktp_korlap=$c, nohp_korlap='$e', alamat_korlap='$d', email_korlap='$f', waktu_pembuatan=now() WHERE id_korlap=$a");

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
