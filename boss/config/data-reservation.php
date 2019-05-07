<?php
  require_once '../../connection.php';
  $idcReserv   = $_POST['idcus-reservation'];
  $timeEvt     = $_POST['timeevent-reservation'];
  $idvenReserv = $_POST['idven-reservation'];
  $idvdReserv  = $_POST['idvd-reservation'];
  $conReserv   = $_POST['con-reservation'];
  $idfcReserv  = $_POST['idfieldco-reservation'];
  $idstReserv  = $_POST['idsete-reservation'];
  $idadmReserv = $_POST['uname-admin'];
  $tpReserv    = "3";

  if ($idcReserv == null && $timeEvt == null && $idvenReserv == null && $idvdReserv == null && $conReserv == null && $idfcReserv == null && $idstReserv == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $dres = mysqli_query($conn, "INSERT INTO reservasi (id_customer, waktu_acara, id_tempatAcara, id_vendor, konsep_acara, id_korlap, id_securityTeam, username_admin, harga_total, waktu_pembuatan) VALUES ($idcReserv,'$timeEvt',$idvenReserv,$idvdReserv,'$conReserv',$idfcReserv,$idstReserv,'$idadmReserv',$tpReserv,now())");
  }

  if ($dres) {
    header("location: ../../boss/");
  }else{
    echo "something missed.";
    header("refresh:1.5 ; ../../boss");
  }

  mysqli_close($conn);
 ?>
