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
          <h3>EDIT DATA VENUE</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectvenue = mysqli_query($conn, "SELECT * FROM tempat_acara WHERE id_tempatAcara=$upd");

            if ($selectvenue) {

              while($baris = mysqli_fetch_array($selectvenue)) {
                ?>
                <form class="" action="update-venue.php" method="post" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <td>ID ADMIN</td>
                      <td>:</td>
                      <td><input type="number" name="venue-id" value="<?php echo $baris['id_tempatAcara']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>VENUE NAME</td>
                      <td>:</td>
                      <td><input type="text" name="venue-name" value="<?php echo $baris['nama_tempatAcara']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ADDRESS</td>
                      <td>:</td>
                      <td><input type="text" name="venue-address" value="<?php echo $baris['alamat_tempatAcara']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>PHOTO</td>
                      <td>:</td>
                      <td>
                        <input type="file" name="venue-photo" accept="image/*" required />
                        <input name="y" type="hidden" id="y" value="<? $baris['foto_user'];?>" /></td>
                      </td>
                      <?php echo '<td>'."Last Photo: "."<img src='../pictures/".$baris['foto_tempatAcara']."' >".'</td>'; ?>
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
