<?php
  require_once '../../connection.php';

  $selempsal = mysqli_query($conn, "SELECT * FROM gaji_karyawan");

  if ($selempsal) {
    // output data of each row
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID EMPLOYEE".'</td>';
    echo '<td>'."TOTAL SALARY (IDR)".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    while($baris = mysqli_fetch_assoc($selempsal)) {
      echo '<tr>';
      echo '<td>'.$baris["id_gajiKaryawan"].'</td>';
      echo '<td>'.$baris["id_pegawai"].'</td>';
      echo '<td>'.$baris["total_gajiKaryawan"].'</td>';
      echo '<td>'."<img src='../profile-photo/".$baris['foto_karyawan']."' >".'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["waktu_bayarKaryawan"].'</td>';
      echo '</tr>';
    }
    echo '</table>';
  }else{
    echo "0 results";
  }

  mysqli_close($conn);
 ?>
