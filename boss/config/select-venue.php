<?php
  require '../connection.php';

  $selectvenue = mysqli_query($conn, "SELECT * FROM tempat_acara ORDER BY 1 DESC");

  if ($selectvenue) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."VENUE NAME".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectvenue)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_tempatAcara"].'</td>';
      echo '<td>'.$baris["nama_tempatAcara"].'</td>';
      echo '<td>'.$baris["alamat_tempatAcara"].'</td>';
      echo '<td>'."<img src='./pictures/".$baris['foto_tempatAcara']."' >".'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '<td>'.'<a href="./config/edit-venue.php?update='.$baris["id_tempatAcara"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-venue.php?delete='.$baris["id_tempatAcara"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
