<!DOCTYPE html>
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
          <h3>EDIT DATA FIELD COORDINATOR</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectfc = mysqli_query($conn, "SELECT * FROM korlap WHERE id_korlap=$upd");

            if ($selectfc) {

              while($baris = mysqli_fetch_assoc($selectfc)) {
                ?>
                <form class="" action="update-fieldcoordinator.php" method="post">
                  <table>
                    <tr>
                      <td>ID</td>
                      <td>:</td>
                      <td><input type="number" min="0" name="fc-id" value="<?php echo $baris['id_korlap']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td><input type="text" name="fc-name" value="<?php echo $baris['nama_korlap']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>NIK</td>
                      <td>:</td>
                      <td><input type="number" min="0" name="fc-nik" min="0" value="<?php echo $baris['noktp_korlap']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Phone</td>
                      <td>:</td>
                      <td><input type="tel" name="fc-phone" value="<?php echo $baris['nohp_korlap']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Address</td>
                      <td>:</td>
                      <td><input type="text" name="fc-address" value="<?php echo $baris['alamat_korlap']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td> Email</td>
                      <td>:</td>
                      <td><input type="email" name="fc-email" value="<?php echo $baris['email_korlap']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Last Update</td>
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
