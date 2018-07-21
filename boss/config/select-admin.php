<?php
  require '../connection.php';

  $selectuser = mysqli_query($conn, "SELECT * FROM user");

  if ($selectuser) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."USERNAME".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."PASSWORD".'</td>';
    echo '<td>'."ACCESS".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectuser)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_user"].'</td>';
      echo '<td>'.$baris["username_user"].'</td>';
      echo '<td>'.$baris["nama_user"].'</td>';
      echo '<td>'.$baris["alamat_user"].'</td>';
      echo '<td>'.$baris["nohp_user"].'</td>';
      echo '<td>'."<img src='./pictures/".$baris['foto_user']."' >".'</td>';
      echo '<td>'.$baris["pass_user"].'</td>';
      echo '<td>'.$baris["hakakses_user"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '<td>'.'<a href="./config/edit-admin.php?update='.$baris["id_user"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-admin.php?delete='.$baris["id_user"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
