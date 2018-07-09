<?php
  require_once '../../connection.php';

  $selectemployee = mysqli_query($conn, "SELECT * FROM pegawai");

  if ($selectemployee) {
    // output data of each row
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."NIK".'</td>';
    echo '<td>'."GENDER".'</td>';
    echo '<td>'."POSITION".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    while($baris = mysqli_fetch_assoc($selectemployee)) {
      echo '<tr>';
      echo '<td>'.$baris["id_pegawai"].'</td>';
      echo '<td>'.$baris["nama_pegawai"].'</td>';
      echo '<td>'.$baris["nik_pegawai"].'</td>';
      echo '<td>'.$baris["jk_pegawai"].'</td>';
      echo '<td>'.$baris["jabatan_pegawai"].'</td>';
      echo '<td>'.$baris["alamat_pegawai"].'</td>';
      echo '<td>'.$baris["notelp_pegawai"].'</td>';
      echo '<td>'."<img src='../profile-photo/".$baris['foto_pegawai']."' >".'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '</tr>';
    }
    echo '</table>';
  }else{
    echo "0 results";
  }

  mysqli_close($conn);
 ?>
