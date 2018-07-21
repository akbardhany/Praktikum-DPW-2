<?php
  require '../connection.php';

  $selectcustomer = mysqli_query($conn, "SELECT * FROM customer");

  if ($selectcustomer) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."NIK".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."EMAIL".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectcustomer)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_customer"].'</td>';
      echo '<td>'.$baris["nama_customer"].'</td>';
      echo '<td>'.$baris["noktp_customer"].'</td>';
      echo '<td>'.$baris["alamat_customer"].'</td>';
      echo '<td>'.$baris["nohp_customer"].'</td>';
      echo '<td>'.$baris["email_customer"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '<td>'.'<a href="./config/edit-customer.php?update='.$baris["id_customer"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-customer.php?delete='.$baris["id_customer"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
