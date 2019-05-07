<?php
  require '../../connection.php';
  $y=$_POST['y'];
  $x = $_FILES['employee-photo']['tmp_name'];
  $xn = $_FILES['employee-photo']['name'];
  $acak = rand(1,99);
  $tu = $acak.$xn;
  $te = '../pictures/'.$tu;

  $id     = $_POST['employee-id'];
  $name   = $_POST['employee-name'];
  $nik   = $_POST['employee-nik'];
  $gen   = $_POST['employee-gender'];
  $pos   = $_POST['employee-position'];
  $addr   = $_POST['employee-address'];
  $phone  = $_POST['employee-phone'];

  if (isset($_POST['submit'])) {
    if (!$x=="") {
      $ft = $tu;
      $d = '../pictures/'.$y;
      @unlink ("$d");
      copy ($x,$te);
    }else {
      $ft = $y;
    }
    $sqla = mysqli_query($conn,"UPDATE pegawai SET nama_pegawai='$name', nik_pegawai='$nik', jk_pegawai='$gen', jabatan_pegawai='$pos', alamat_pegawai='$addr', notelp_pegawai='$phone', foto_pegawai='$ft', waktu_pembuatan=now() WHERE id_pegawai=$id");
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
