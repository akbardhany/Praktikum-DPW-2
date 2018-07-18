<?php
  require_once '../../connection.php';
  $emName = $_POST['employee-name'];
  $emId   = $_POST['employee-id'];
  $emGen  = $_POST['employee-gender'];
  $emPos  = $_POST['employee-position'];
  $emAddr = $_POST['employee-address'];
  $emPho  = $_POST['employee-phone'];
  $emImg  = $_FILES['employee-img']['name'];

  $targetfolder = "../pictures/".basename($emImg);

  if ($emName == null && $emId == null && $emGen == null && $emPos == null && $emAddr == null && $emPho == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $de = mysqli_query($conn, "INSERT INTO pegawai (nama_pegawai, nik_pegawai, jk_pegawai, jabatan_pegawai, alamat_pegawai, notelp_pegawai, foto_pegawai, waktu_pembuatan) VALUES ('$emName','$emId','$emGen','$emPos','$emAddr','$emPho','$emImg',now())");
  }
  if ($de && move_uploaded_file($_FILES['employee-img']['tmp_name'], $targetfolder)) {
    header("location: ../../boss/");
  }
  mysqli_close($conn);
 ?>
