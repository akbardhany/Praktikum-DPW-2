<?php
  require '../../connection.php';

  if (isset($_POST['submit'])) {
    $a  = $_POST['st-id'];
    $b  = $_POST['st-name'];
    $c  = $_POST['st-nik'];
    $e  = $_POST['st-address'];
    $d  = $_POST['st-phone'];
    $f  = $_POST['st-member'];

    $sql = mysqli_query($conn,"UPDATE security_team SET nama_securityTeam='$b', noktp_securityTeam=$c, alamat_securityTeam='$e', nohp_securityTeam='$d', anggota_securityTeam='$f', waktu_pembuatan=now() WHERE id_securityTeam=$a");

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
