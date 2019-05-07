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
          <h3>EDIT DATA VENDOR</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectvendor = mysqli_query($conn, "SELECT * FROM vendor WHERE id_vendor=$upd");

            if ($selectvendor) {

              while($baris = mysqli_fetch_array($selectvendor)) {
                ?>
                <form class="" action="update-vendor.php" method="post" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <td>ID</td>
                      <td>:</td>
                      <td><input type="number" name="vendor-id" value="<?php echo $baris['id_vendor']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>NAME</td>
                      <td>:</td>
                      <td><input type="text" name="vendor-name" value="<?php echo $baris['nama_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>OWNER NAME</td>
                      <td>:</td>
                      <td><input type="text" name="vendor-owner" value="<?php echo $baris['pemilik_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>OWNER ID</td>
                      <td>:</td>
                      <td><input type="number" min="0" name="vendor-ownerid" value="<?php echo $baris['noktp_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ADDRESS</td>
                      <td>:</td>
                      <td><input type="text" name="vendor-address" value="<?php echo $baris['alamat_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>PHONE</td>
                      <td>:</td>
                      <td><input type="tel" name="vendor-phone" value="<?php echo $baris['nohp_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>EMAIL</td>
                      <td>:</td>
                      <td><input type="email" name="vendor-email" value="<?php echo $baris['email_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>TYPE</td>
                      <td>:</td>
                      <td>
                        <select class="" name="vendor-type" required />
                          <option value="<?php echo $baris['type_vendor']; ?>" selected><?php echo $baris['type_vendor']; ?></option>
                          <option value="FOOD">FOOD</option>
                          <option value="MAKE UP">MAKE UP</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>PHOTO</td>
                      <td>:</td>
                      <td>
                        <input type="file" name="vendor-photo" accept="image/*" required />
                        <input name="y" type="hidden" id="y" value="<? $baris['foto_vendor'];?>" /></td>
                      </td>
                      <?php echo '<td>'."Last Photo: "."<img src='../pictures/".$baris['foto_vendor']."' >".'</td>'; ?>
                    </tr>
                    <tr>
                      <td>PRICE TAG (IDR)</td>
                      <td>:</td>
                      <td><input type="number" name="vendor-price" value="<?php echo $baris['harga_vendor']; ?>" required /></td>
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
