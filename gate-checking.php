<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>Gate Checking</title>
  </head>
  <body style="background:lavenderblush"><tt>
    <?php
    session_start();
      $uname = $_POST['user_name'];
      $password = $_POST['password'];
      $perm = $_POST['permissions'];

      require_once 'connection.php';
      $query=mysqli_query($conn,"select * from user where username_user='$uname' and pass_user='$password'");

      $xxx=mysqli_num_rows($query);
      if($xxx == TRUE){
        while($row = mysqli_fetch_assoc($query)) {
          if ($perm == $row['hakakses_user']) {
            if ($perm == "Bos") {
              $_SESSION['username']=$uname;
              echo "Loading, please wait ...";
              header("refresh:1.5 ; ./boss");
            }elseif ($perm == "Admin Pegawai") {
              $_SESSION['username']=$uname;
              echo "Loading, please wait ...";
              header("refresh:1.5 ; ./pegawai");
            }else {
              $_SESSION['username']=$uname;
              echo "Loading, please wait ...";
              header("refresh:1.5 ; ./reservasi");
            }
          }else {
            echo "Rejected. U don't have access.";
            header("refresh:1.5 ; login.php");
          }
        }
      }else{
        echo "Username and Password isn't match.";
        header("refresh:1.5 ; login.php");
      }

      mysqli_close($conn);

     ?>
  </body>
</html>
