<?php
  require '../connection.php';

  $selectvendor = mysqli_query($conn, "SELECT * FROM vendor");

  if ($selectvendor) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."VENDOR NAME".'</td>';
    echo '<td>'."OWNER NAME".'</td>';
    echo '<td>'."OWNER ID".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."EMAIL".'</td>';
    echo '<td>'."TYPE".'</td>';
    echo '<td>'."PHOTO".'</td>';
    echo '<td>'."PRICE (IDR)".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selectvendor)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_vendor"].'</td>';
      echo '<td>'.$baris["nama_vendor"].'</td>';
      echo '<td>'.$baris["pemilik_vendor"].'</td>';
      echo '<td>'.$baris["noktp_vendor"].'</td>';
      echo '<td>'.$baris["alamat_vendor"].'</td>';
      echo '<td>'.$baris["nohp_vendor"].'</td>';
      echo '<td>'.$baris["email_vendor"].'</td>';
      echo '<td>'.$baris["type_vendor"].'</td>';
      echo '<td>'."<img src='./pictures/".$baris['foto_vendor']."' >".'</td>';
      echo '<td>'.$baris["harga_vendor"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '<td>'.'<a href="./config/edit-vendor.php?update='.$baris["id_vendor"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-vendor.php?delete='.$baris["id_vendor"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
