<?php
  require_once '../../connection.php';
  $vename = $_POST['venue-name'];
  $veaddr = $_POST['venue-address'];

  if ($vename == null && $veaddr == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../reservasi");
  }else {
  $dv = mysqli_query($conn, "INSERT INTO tempat_acara (nama_tempatAcara, alamat_tempatAcara, waktu_pembuatan) VALUES ('$vename','$veaddr',now())");
  }
  if ($dv) {
    header("location: ../../reservasi/");
  }
  mysqli_close($conn);
 ?>
