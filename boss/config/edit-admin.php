<!DOCTYPE html>
<?php
  include "../connection.php";
    session_start();
      if (empty($_SESSION['username'])){
        header("Location:../../login.php");
      }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue's Rose E.O.</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='../../img/ico-x.png' />
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </head>
  <body><tt><br /><center>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img class="animate" src="../../img/ico-x.png" alt="Narotama Logo" width="100px" height="100px" draggable="false" style="pointer-events:none">
        </div>
      </div>
          <h3>EDIT DATA ADMIN</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectuser = mysqli_query($conn, "SELECT * FROM user WHERE id_user=$upd");

            if ($selectuser) {

              while($baris = mysqli_fetch_array($selectuser)) {
                ?>
                <form class="" action="update-admin.php" method="post" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <td>ID ADMIN</td>
                      <td>:</td>
                      <td><input type="number" name="admin-id" value="<?php echo $baris['id_user']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>USERNAME (ID)</td>
                      <td>:</td>
                      <td><input type="text" name="admin-username" value="<?php echo $baris['username_user']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>NAME</td>
                      <td>:</td>
                      <td><input type="text" name="admin-name" value="<?php echo $baris['nama_user']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ADMIN ADDRESS</td>
                      <td>:</td>
                      <td><input type="text" name="admin-address" value="<?php echo $baris['alamat_user']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ADMIN PHONE</td>
                      <td>:</td>
                      <td><input type="tel" name="admin-phone" value="<?php echo $baris['nohp_user']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>PHOTO</td>
                      <td>:</td>
                      <td>
                        <input type="file" name="admin-photo" accept="image/*" required />
                        <input name="y" type="hidden" id="y" value="<? $baris['foto_user'];?>" /></td>
                      </td>
                      <?php echo '<td>'."Last Photo: "."<img src='../pictures/".$baris['foto_user']."' >".'</td>'; ?>
                    </tr>
                    <tr>
                      <td>ADMIN PASSWORD</td>
                      <td>:</td>
                      <td><input type="password" name="admin-password" value="<?php echo $baris['pass_user']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Permissions</td>
                      <td>:</td>
                      <td>
                        <select class="" name="admin-permissions" required />
                          <option value="<?php echo $baris['hakakses_user']; ?>" selected><?php echo $baris['hakakses_user']; ?></option>
                          <option value="Admin Pegawai">Admin Pegawai</option>
                          <option value="Admin Reservasi">Admin Reservasi</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>LAST UPDATE</td>
                      <td>:</td>
                      <td><input type="text" value="<?php echo $baris['waktu_pembuatan']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td align="right">
                        <input class="btn btn-success" type="submit" name="submit" value="UPDATE">
                        <input class="btn btn-danger" type="submit" name="back" value="BACK">
                      </td>
                    </tr>
                  </table>
                </form>
                <br />
                <?php
              }
            }else{
              echo "not selected yet";
            }

            mysqli_close($conn);
           ?>


      <div class="modal-footer">
        <i>&copy; scrup<sup>2</sup>&nbsp;2018 All Rights Reserved.</i>
      </div>
    </div>
  </body>
</html>
