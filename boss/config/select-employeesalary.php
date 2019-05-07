<?php
  require '../connection.php';

  $selempsal = mysqli_query($conn, "SELECT * FROM gaji_karyawan ORDER BY 1 DESC");

  if ($selempsal) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID EMPLOYEE".'</td>';
    echo '<td>'."TOTAL SALARY (IDR)".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selempsal)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_gajiKaryawan"].'</td>';
      echo '<td>'.$baris["id_pegawai"].'</td>';
      echo '<td>'.$baris["total_gajiKaryawan"].'</td>';
      echo '<td>'."<img src='./profile-photo/".$baris['foto_karyawan']."' >".'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["waktu_bayarKaryawan"].'</td>';
      echo '<td>'.'<a href="./config/delete-emsalary.php?delete='.$baris["id_gajiKaryawan"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
      echo '</tr>';
      echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
  }else{
    echo "not selected yet";
  }

  mysqli_close($conn);
 ?>
