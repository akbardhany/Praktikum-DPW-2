<?php
  require_once '../../connection.php';

  $selsecteamsal = mysqli_query($conn, "SELECT * FROM gaji_securityTeam");

  if ($selsecteamsal) {
    // output data of each row
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID SECURITY".'</td>';
    echo '<td>'."TOTAL SALARY (IDR)".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    while($baris = mysqli_fetch_assoc($selsecteamsal)) {
      echo '<tr>';
      echo '<td>'.$baris["id_gajiSecurityTeam"].'</td>';
      echo '<td>'.$baris["id_securityTeam"].'</td>';
      echo '<td>'.$baris["total_gajiSecurityTeam"].'</td>';
      echo '<td>'."<img src='../profile-photo/".$baris['foto_SecurityTeam']."' >".'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["waktu_bayarSecurityTeam"].'</td>';
      echo '</tr>';
    }
    echo '</table>';
  }else{
    echo "0 results";
  }

  mysqli_close($conn);
 ?>
