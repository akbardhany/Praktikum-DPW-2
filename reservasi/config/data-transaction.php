<?php
  require_once '../../connection.php';
  $idReserv   = $_POST['id-reservation'];
  $idadmReserv = "get from session";
  $metPay     = $_POST['method-payment'];
  $toPrice  = "1000000";
  $paid = $_POST['paid'];
  $rePay = $_POST['remaining-pay'];
  $status = $_POST['status-transaction'];

  if ($idReserv == null && $idadmReserv == null && $metPay == null && $toPrice == null && $paid == null && $rePay == null && $status == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../reservasi");
  }else {
  $dtran = mysqli_query($conn, "INSERT INTO transaksi (id_reservasi, username_admin, metode_pembayaran, harga_total, yang_dibayar, sisa_bayar, status_transaksi, waktu_transaksi) VALUES ($idReserv,'$idadmReserv','$metPay',$toPrice,$paid,$rePay,'$status',now())");
  }

  if ($dtran) {
    header("location: ../../reservasi/");
  }else {
    echo "Error Data";
#    header("refresh: 2 ; ../../reservasi/");
  }

  mysqli_close($conn);
 ?>