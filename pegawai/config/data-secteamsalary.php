<?php
  require_once '../../connection.php';
  $idSec   = $_POST['id-security'];
  $salSec  = $_POST['salary-security'];
  $imgSec  = $_FILES['img-security']['name'];
  $unSec   = "from session";

  $targetfolder = "../profile-photo/".basename($imgSec);

  if ($idSec == null && $salSec == null && $imgSec == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../pegawai");
  }else {
  $dsecsa = mysqli_query($conn, "INSERT INTO gaji_securityTeam (id_securityTeam, total_gajiSecurityTeam, foto_SecurityTeam, username_admin, waktu_bayarSecurityTeam) VALUES ('$idSec','$salSec','$imgSec','$unSec',now())");
  }

  if ($dsecsa && move_uploaded_file($_FILES['img-security']['tmp_name'], $targetfolder)) {
    header("location: ../../pegawai/");
  }

  mysqli_close($conn);
 ?>
