<?php
  require '../connection.php';

  $selsecteamsal = mysqli_query($conn, "SELECT * FROM gaji_securityTeam");

  if ($selsecteamsal) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID SECURITY".'</td>';
    echo '<td>'."TOTAL SALARY (IDR)".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selsecteamsal)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_gajiSecurityTeam"].'</td>';
      echo '<td>'.$baris["id_securityTeam"].'</td>';
      echo '<td>'.$baris["total_gajiSecurityTeam"].'</td>';
      echo '<td>'."<img src='./pictures/".$baris['foto_SecurityTeam']."' >".'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["waktu_bayarSecurityTeam"].'</td>';
      echo '<td>'.'<a href="./config/delete-secsalary.php?delete='.$baris["id_gajiSecurityTeam"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
