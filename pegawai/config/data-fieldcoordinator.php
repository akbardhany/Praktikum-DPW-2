<?php
  require_once '../../connection.php';
  $fcName = $_POST['fieldcoor-name'];
  $fcId   = $_POST['fieldcoor-id'];
  $fcPho  = $_POST['fieldcoor-phone'];
  $fcAddr = $_POST['fieldcoor-address'];
  $fcEm   = $_POST['fieldcoor-email'];

  if ($fcName == null && $fcId == null && $fcPho == null && $emAddr == null && $fcEm == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../pegawai");
  }else {
  $de = mysqli_query($conn, "INSERT INTO korlap (nama_korlap, noktp_korlap, nohp_korlap, alamat_korlap, email_korlap, waktu_pembuatan) VALUES ('$fcName','$fcId','$fcPho','$fcAddr','$fcEm',now())");
  }
  if ($de) {
    header("location: ../../pegawai/");
  }
  mysqli_close($conn);
 ?>
