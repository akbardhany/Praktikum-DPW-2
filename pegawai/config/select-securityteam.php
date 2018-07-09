<?php
  require_once '../../connection.php';

  $selsecteam = mysqli_query($conn, "SELECT * FROM security_team");

  if ($selsecteam) {
    // output data of each row
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."NIK".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."MEMBER".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    while($baris = mysqli_fetch_assoc($selsecteam)) {
      echo '<tr>';
      echo '<td>'.$baris["id_securityTeam"].'</td>';
      echo '<td>'.$baris["nama_securityTeam"].'</td>';
      echo '<td>'.$baris["noktp_securityTeam"].'</td>';
      echo '<td>'.$baris["alamat_securityTeam"].'</td>';
      echo '<td>'.$baris["nohp_securityTeam"].'</td>';
      echo '<td>'.$baris["anggota_securityTeam"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '</tr>';
    }
    echo '</table>';
  }else{
    echo "0 results";
  }

  mysqli_close($conn);
 ?>
