<?php
  require '../../connection.php';

  $a  = $_POST['id-customer'];
  $b  = $_POST['customer-name'];
  $c  = $_POST['customer-id'];
  $d  = $_POST['customer-address'];
  $e  = $_POST['customer-phone'];
  $f  = $_POST['customer-email'];

  $sql = mysqli_query($conn,"UPDATE customer SET nama_customer='$b', noktp_customer=$c, alamat_customer='$d', nohp_customer='$e', email_customer='$f', waktu_pembuatan=now() WHERE id_customer=$a");

  if ($sql) {
    echo '<tt>'."Customer Data has been updated.";
    header("refresh: 1.5; ../../boss");
  }else {
    echo "Logic Error";
  }

 ?>
