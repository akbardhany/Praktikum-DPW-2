<?php
  require '../connection.php';

  $selecttransaction = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY 1 DESC");

  if ($selecttransaction) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."ID RESERVATION".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."METHOD of PAYMENT".'</td>';
    echo '<td>'."TOTAL PRICE (IDR)".'</td>';
    echo '<td>'."PAID (IDR)".'</td>';
    echo '<td>'."THE REMAINING PAY (IDR)".'</td>';
    echo '<td>'."STATUS".'</td>';
    echo '<td>'."TIME".'</td>';
    echo '<td>'."ACTION".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($selecttransaction)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_transaksi"].'</td>';
      echo '<td>'.$baris["id_reservasi"].'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["metode_pembayaran"].'</td>';
      echo '<td>'.$baris["harga_total"].'</td>';
      echo '<td>'.$baris["yang_dibayar"].'</td>';
      echo '<td>'.$baris["sisa_bayar"].'</td>';
      echo '<td>'.$baris["status_transaksi"].'</td>';
      echo '<td>'.$baris["waktu_transaksi"].'</td>';
      echo '<td>'.'<a href="./config/delete-transaction.php?delete='.$baris["id_transaksi"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
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
