<?php
  include '../connection.php';

  $selectemployee = mysqli_query($conn, "SELECT * FROM korlap ORDER BY 1 DESC");

  if ($selectemployee) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."NIK".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."EMAIL".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectemployee)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_korlap"].'</td>';
      echo '<td>'.$baris["nama_korlap"].'</td>';
      echo '<td>'.$baris["noktp_korlap"].'</td>';
      echo '<td>'.$baris["nohp_korlap"].'</td>';
      echo '<td>'.$baris["alamat_korlap"].'</td>';
      echo '<td>'.$baris["email_korlap"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '<td>'.'<a href="./config/edit-fieldcoordinator.php?update='.$baris["id_korlap"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-fieldcoordinator.php?delete='.$baris["id_korlap"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
