<?php
  require_once '../../connection.php';
  $vename = $_POST['venue-name'];
  $veaddr = $_POST['venue-address'];
  $veImg  = $_FILES['venue-img']['name'];

  $targetfolder = "../image/".basename($veImg);

  if ($vename == null && $veaddr == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../reservasi");
  }else {
  $dv = mysqli_query($conn, "INSERT INTO tempat_acara (nama_tempatAcara, alamat_tempatAcara, foto_tempatAcara, waktu_pembuatan) VALUES ('$vename','$veaddr','$veImg',now())");
  }
  if ($dv && move_uploaded_file($_FILES['venue-img']['tmp_name'], $targetfolder)) {
    header("location: ../../reservasi/");
  }
  mysqli_close($conn);
 ?>
