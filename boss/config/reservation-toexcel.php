<?php
  include '../../connection.php';

  $filename = "Reservation-DATA(".date('d-m-Y').").xlsx";
  header("content-disposition: attachment; filename='$filename'");
  header("content-type: application/vdn.ms-excel");

  $que = mysqli_query($conn, "SELECT reservasi.id_reservasi, customer.nama_customer, tempat_acara.nama_tempatAcara, vendor.nama_vendor, reservasi.waktu_acara, reservasi.konsep_acara, korlap.nama_korlap, security_team.nama_securityTeam, reservasi.username_admin, reservasi.harga_total, reservasi.waktu_pembuatan FROM (((((reservasi INNER JOIN customer ON reservasi.id_customer = customer.id_customer) INNER JOIN tempat_acara ON reservasi.id_tempatAcara = tempat_acara.id_tempatAcara) INNER JOIN vendor ON reservasi.id_vendor = vendor.id_vendor) INNER JOIN korlap ON reservasi.id_korlap = korlap.id_korlap) INNER JOIN security_team ON reservasi.id_securityTeam = security_team.id_securityTeam)");

  if ($que) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID RESERVATION".'</td>';
    echo '<td>'."CUSTOMER NAME".'</td>';
    echo '<td>'."VENUE".'</td>';
    echo '<td>'."VENDOR".'</td>';
    echo '<td>'."TIME of THE EVENT".'</td>';
    echo '<td>'."CONCEPT".'</td>';
    echo '<td>'."FIELD COORDINATOR".'</td>';
    echo '<td>'."SECURITY TEAM".'</td>';
    echo '<td>'."USERNAME ADMIN".'</td>';
    echo '<td>'."TOTAL PRICE (IDR)".'</td>';
    echo '<td>'."BOOKING TIME".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($baris = mysqli_fetch_assoc($que)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$baris["id_reservasi"].'</td>';
      echo '<td>'.$baris["nama_customer"].'</td>';
      echo '<td>'.$baris["nama_tempatAcara"].'</td>';
      echo '<td>'.$baris["nama_vendor"].'</td>';
      echo '<td>'.$baris["waktu_acara"].'</td>';
      echo '<td>'.$baris["konsep_acara"].'</td>';
      echo '<td>'.$baris["nama_korlap"].'</td>';
      echo '<td>'.$baris["nama_securityTeam"].'</td>';
      echo '<td>'.$baris["username_admin"].'</td>';
      echo '<td>'.$baris["harga_total"].'</td>';
      echo '<td>'.$baris["waktu_pembuatan"].'</td>';
      echo '</tr>';
      echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
  }else {
    echo "not selected yet";
  }
 ?>
