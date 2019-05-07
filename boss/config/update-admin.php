<?php
  require '../../connection.php';
  $y=$_POST['y'];
  $x = $_FILES['admin-photo']['tmp_name'];
  $xn = $_FILES['admin-photo']['name'];
  $acak = rand(1,99);
  $tu = $acak.$xn;
  $te = '../pictures/'.$tu;

  $id     = $_POST['admin-id'];
  $uName  = $_POST['admin-username'];
  $name   = $_POST['admin-name'];
  $addr   = $_POST['admin-address'];
  $phone  = $_POST['admin-phone'];
  $pwd    = $_POST['admin-password'];
  $perm   = $_POST['admin-permissions'];

  if (isset($_POST['submit'])) {
    if (!$x=="") {
      $ft = $tu;
      $d = '../pictures/'.$y;
      @unlink ("$d");
      copy ($x,$te);
    }else {
      $ft = $y;
    }
    $sqla = mysqli_query($conn,"UPDATE user SET username_user='$uName', nama_user='$name', alamat_user='$addr', nohp_user='$phone', foto_user='$ft', pass_user='$pwd', hakakses_user='$perm',waktu_pembuatan=now() WHERE id_user=$id");
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
