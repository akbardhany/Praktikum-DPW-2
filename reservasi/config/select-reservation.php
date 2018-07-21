<?php
  require '../connection.php';

  $selectreservation = mysqli_query($conn, "SELECT * FROM reservasi");

  if ($selectreservation) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID RESERVATION".'</td>';
    echo '<td>'."ID CUSTOMER".'</td>';
    echo '<td>'."TIME of THE-EVENT".'</td>';
    echo '<td>'."ID VENUE".'</td>';
    echo '<td>'."ID VENDOR".'</td>';
    echo '<td>'."CONCEPT of THE EVENT".'</td>';
    echo '<td>'."ID FIELD COORDINATOR".'</td>';
    echo '<td>'."ID SECURITY TEAM".'</td>';
    echo '<td>'."ID ADMIN".'</td>';
    echo '<td>'."TOTAL PRICE".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectreservation)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_reservasi"].'</td>';
      echo '<td>'.$baris["id_customer"].'</td>';
      echo '<td>'.$baris["waktu_acara"].'</td>';
      echo '<td>'.$baris["id_tempatAcara"].'</td>';
      echo '<td>'.$baris["id_vendor"].'</td>';
      echo '<td>'.$baris["konsep_acara"].'</td>';
      echo '<td>'.$baris["id_korlap"].'</td>';
      echo '<td>'.$baris["id_securityTeam"].'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["harga_total"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
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
