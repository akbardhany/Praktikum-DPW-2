<?php
  require_once '../../connection.php';
  $idEmp   = $_POST['idemployee'];
  $salEmp  = $_POST['salaryemployee'];
  $imgEmp  = $_FILES['imgemployee']['name'];
  $unEmp   = $_POST['uname-admin'];
  $msg="";

  $targetfolder = "../profile-photo/".basename($imgEmp);

  if ($idEmp == null && $salEmp == null && $imgEmp == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../pegawai");
  }else {
  $demsa = mysqli_query($conn, "INSERT INTO gaji_karyawan (id_pegawai, total_gajiKaryawan, foto_karyawan, username_admin, waktu_bayarKaryawan) VALUES ('$idEmp','$salEmp','$imgEmp','$unEmp',now())");
  }

  if (move_uploaded_file($_FILES['imgemployee']['tmp_name'], $targetfolder)) {
    $msg="yay";
    echo $msg." ";
  }else {
    $msg="nay";
    echo $msg." ";
  }

  if ($demsa) {
    header("location: ../../pegawai/");
  }else {
    echo "blm record";
  }

  mysqli_close($conn);
 ?>
