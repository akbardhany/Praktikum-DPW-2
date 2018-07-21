<?php
  require '../../connection.php';
  $y=$_POST['y'];
  $x = $_FILES['vendor-photo']['tmp_name'];
  $xn = $_FILES['vendor-photo']['name'];
  $acak = rand(1,99);
  $tu = $acak.$xn;
  $te = '../pictures/'.$tu;

  $id     = $_POST['vendor-id'];
  $name   = $_POST['vendor-name'];
  $own    = $_POST['vendor-owner'];
  $ownid  = $_POST['vendor-ownerid'];
  $addr   = $_POST['vendor-address'];
  $phone  = $_POST['vendor-phone'];
  $em     = $_POST['vendor-email'];
  $type   = $_POST['vendor-type'];
  $price  = $_POST['vendor-price'];

  if (isset($_POST['submit'])) {
    if (!$x=="") {
      $ft = $tu;
      $d = '../pictures/'.$y;
      @unlink ("$d");
      copy ($x,$te);
    }else {
      $ft = $y;
    }
    $sqla = mysqli_query($conn,"UPDATE vendor SET nama_vendor='$name', pemilik_vendor='$own', noktp_vendor='$ownid', alamat_vendor='$addr', nohp_vendor='$phone', email_vendor='$em', type_vendor='$type', foto_vendor='$ft', harga_vendor='$price', waktu_pembuatan=now() WHERE id_vendor=$id");
    mysqli_close($conn);
  }else {
      header("Location:../../boss");
  }

  if ($sqla) {
    header("Location:../../boss");
  }else {
    echo "bad logic";
  }
 ?>
