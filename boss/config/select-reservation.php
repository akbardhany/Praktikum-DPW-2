<?php
  require '../connection.php';

  $selectreservation = mysqli_query($conn, "SELECT * FROM reservasi ORDER BY 1 DESC");

  if ($selectreservation) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID CUSTOMER".'</td>';
    echo '<td>'."TIME of THE EVENT".'</td>';
    echo '<td>'."ID THE VENUE".'</td>';
    echo '<td>'."ID VENDOR".'</td>';
    echo '<td>'."CONCEPT".'</td>';
    echo '<td>'."ID FIELD COORDINATOR".'</td>';
    echo '<td>'."ID SECURITY TEAM".'</td>';
    echo '<td>'."ID ADMIN".'</td>';
    echo '<td>'."TOTAL PRICE (IDR)".'</td>';
    echo '<td>'."TIME RECORDED".'</td>';
    echo '<td>'."ACTION".'</td>';
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
      echo '<td>'.'<a href="./config/edit-reservation.php?update='.$baris["id_reservasi"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-reservation.php?delete='.$baris["id_customer"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
