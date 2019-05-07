<?php
  require_once '../../connection.php';
  $secName = $_POST['security-name'];
  $secId   = $_POST['security-id'];
  $secAddr  = $_POST['security-address'];
  $secPho = $_POST['security-phone'];
  $secMem   = $_POST['security-member'];

  if ($secName == null && $secId == null && $secAddr == null && $secPho == null && $secMem == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $de = mysqli_query($conn, "INSERT INTO security_team (nama_securityTeam, noktp_securityTeam, alamat_securityTeam, nohp_securityTeam, anggota_securityTeam, waktu_pembuatan) VALUES
  ('$secName','$secId','$secAddr','$secPho','$secMem',now())");
  }
  if ($de) {
    header("location: ../../boss/");
  }else{
    echo "something missed.";
    header("refresh:1.5 ; ../../boss");
  }
  mysqli_close($conn);
 ?>
