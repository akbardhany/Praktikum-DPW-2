<?php
  require_once '../../connection.php';
  $idEmp   = $_POST['idemployee'];
  $salEmp  = $_POST['salaryemployee'];
  $imgEmp  = $_FILES['imgemployee']['name'];
  $unEmp   = "from session";

  $targetfolder = "../pictures/".basename($imgEmp);

  if ($idEmp == null && $salEmp == null && $imgEmp == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $demsa = mysqli_query($conn, "INSERT INTO gaji_karyawan (id_pegawai, total_gajiKaryawan, foto_karyawan, username_admin, waktu_bayarKaryawan) VALUES ('$idEmp','$salEmp','$imgEmp','$unEmp',now())");
  }

  if ($demsa && move_uploaded_file($_FILES['imgemployee']['tmp_name'], $targetfolder)) {
    header("location: ../../boss/");
  }else {
    echo "blm record";
  }

  mysqli_close($conn);
 ?>
