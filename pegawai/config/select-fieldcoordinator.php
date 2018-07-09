<?php
  require_once '../../connection.php';

  $selfieldco = mysqli_query($conn, "SELECT * FROM korlap");

  if ($selfieldco) {
    // output data of each row
    echo '<table border="1">';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."NIK".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."EMAIL".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '</tr>';
    while($baris = mysqli_fetch_assoc($selfieldco)) {
      echo '<tr>';
      echo '<td>'.$baris["id_korlap"].'</td>';
      echo '<td>'.$baris["nama_korlap"].'</td>';
      echo '<td>'.$baris["noktp_korlap"].'</td>';
      echo '<td>'.$baris["nohp_korlap"].'</td>';
      echo '<td>'.$baris["alamat_korlap"].'</td>';
      echo '<td>'.$baris["email_korlap"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '</tr>';
    }
    echo '</table>';
  }else{
    echo "0 results";
  }

  mysqli_close($conn);
 ?>
