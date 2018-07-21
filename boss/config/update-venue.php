<?php
  require '../../connection.php';
  $y=$_POST['y'];
  $x = $_FILES['venue-photo']['tmp_name'];
  $xn = $_FILES['venue-photo']['name'];
  $acak = rand(1,99);
  $tu = $acak.$xn;
  $te = '../pictures/'.$tu;

  $id     = $_POST['venue-id'];
  $name  = $_POST['venue-name'];
  $addr   = $_POST['venue-address'];

  if (isset($_POST['submit'])) {
    if (!$x=="") {
      $ft = $tu;
      $d = '../pictures/'.$y;
      @unlink ("$d");
      copy ($x,$te);
    }else {
      $ft = $y;
    }
    $sqla = mysqli_query($conn,"UPDATE tempat_acara SET nama_tempatAcara='$name', alamat_tempatAcara='$addr', foto_tempatAcara='$ft', waktu_pembuatan=now() WHERE id_tempatAcara=$id");
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
