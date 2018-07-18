<?php
  require_once '../../connection.php';
  $uName  = $_POST['username'];
  $name   = $_POST['name'];
  $addr   = $_POST['address'];
  $phone  = $_POST['phone'];
  $photo  = $_FILES['photo']['name'];
  $pwd    = $_POST['password'];
  $perm   = $_POST['permissions'];

  $targetfolder = "../pictures/".basename($photo);

  $cek_username=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username_user='$uName'"));

  if ($cek_username > 0) {
    echo '<tt>'."sorry, username is already exist.".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }elseif ($uName == null && $name == null && $addr == null && $phone == null && $photo == null && $pwd == null && $perm == null) {
    echo '<tt>'."u haven't filled out the data".'</tt>';
    header("refresh:1.5 ; ../../boss");
  }else {
  $da = mysqli_query($conn, "INSERT INTO user (username_user, nama_user, alamat_user, nohp_user, foto_user, pass_user, hakakses_user, waktu_pembuatan) VALUES ('$uName','$name','$addr','$phone','$photo','$pwd','$perm',now())");
  }
  if ($da && move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder)) {
    header("location: ../../boss/");
  }
  mysqli_close($conn);
 ?>
