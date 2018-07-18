<?php
  require_once '../../connection.php';
  $csName = $_POST['customer-name'];
  $csId   = $_POST['customer-id'];
  $csAddr = $_POST['customer-address'];
  $csPho  = $_POST['customer-phone'];
  $csEm   = $_POST['customer-email'];

  if ($csName == null && $csId == null && $csAddr == null && $csPho == null && $csEm == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $dcus = mysqli_query($conn, "INSERT INTO customer (nama_customer, noktp_customer, alamat_customer, nohp_customer, email_customer, waktu_pembuatan) VALUES ('$csName','$csId','$csAddr','$csPho','$csEm',now())");
  }

  if ($dcus) {
    header("location: ../../boss/");
  }else {
    echo "Error Data";
    header("refresh: 2 ; ../../boss/");
  }

  mysqli_close($conn);
 ?>
