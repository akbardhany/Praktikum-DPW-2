<?php
  require_once '../../connection.php';
  $idReserv   = $_POST['id-reservation'];
  $idadmReserv = $_POST['uname-admin'];
  $metPay     = $_POST['method-payment'];
  $toPrice  = "1000000";
  $paid = $_POST['paid'];
  $rePay = $_POST['remaining-pay'];
  $status = $_POST['status-transaction'];

  if ($idReserv == null && $idadmReserv == null && $metPay == null && $toPrice == null && $paid == null && $rePay == null && $status == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $dtran = mysqli_query($conn, "INSERT INTO transaksi (id_reservasi, username_admin, metode_pembayaran, harga_total, yang_dibayar, sisa_bayar, status_transaksi, waktu_transaksi) VALUES ($idReserv,'$idadmReserv','$metPay',$toPrice,$paid,$rePay,'$status',now())");
  }

  if ($dtran) {
    header("location: ../../boss/");
  }else{
    echo "something missed.";
    header("refresh:1.5 ; ../../boss");
  }

  mysqli_close($conn);
 ?>
