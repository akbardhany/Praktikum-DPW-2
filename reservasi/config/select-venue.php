<?php
  require '../connection.php';

  $selectransaction = mysqli_query($conn, "SELECT * FROM tempat_acara");

  if ($selectransaction) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID VENUE".'</td>';
    echo '<td>'."VENUE NAME".'</td>';
    echo '<td>'."VENUE ADDRESS".'</td>';
    echo '<td>'."PHOTO of THE VENUE".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectransaction)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_tempatAcara"].'</td>';
      echo '<td>'.$baris["nama_tempatAcara"].'</td>';
      echo '<td>'.$baris["alamat_tempatAcara"].'</td>';
      echo '<td>'."<img src='./image/".$baris['foto_tempatAcara']."' >".'</td>';
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
