<?php
  require_once '../../connection.php';
  $vdName = $_POST['vendor-name'];
  $vdOwner = $_POST['vendor-owner'];
  $vdOwnid = $_POST['vendor-ownid'];
  $vdAddr = $_POST['vendor-address'];
  $vdPho  = $_POST['vendor-phone'];
  $vdEm   = $_POST['vendor-email'];
  $vdType = $_POST['vendor-type'];
  $vdImg  = $_FILES['vendor-img']['name'];
  $vdPrice = $_POST['vendor-pricetag'];

  $targetfolder = "../image/".basename($vdImg);

  if ($vdName == null && $vdOwner == null && $vdOwnid == null && $vdAddr == null && $vdPho == null && $vdEm == null && $vdType == null && $vdPrice == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../reservasi");
  }else {
  $dvd = mysqli_query($conn, "INSERT INTO vendor (nama_vendor, pemilik_vendor, noktp_vendor, alamat_vendor, nohp_vendor, email_vendor, type_vendor, foto_vendor, harga_vendor, waktu_pembuatan) VALUES ('$vdName','$vdOwner','$vdOwnid','$vdAddr','$vdPho','$vdEm','$vdType','$vdImg','$vdPrice',now())");
  }

  if ($dvd && move_uploaded_file($_FILES['vendor-img']['tmp_name'], $targetfolder)) {
    header("location: ../../reservasi/");
  }else {
    echo "Error Data";
    header("refresh: 2 ; ../../reservasi/");
  }

  mysqli_close($conn);
 ?>
