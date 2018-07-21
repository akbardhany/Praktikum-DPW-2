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
          <h3>EDIT DATA RESERVATION</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectreservation = mysqli_query($conn, "SELECT * FROM reservasi WHERE id_reservasi=$upd");

            if ($selectreservation) {

              while($baris = mysqli_fetch_assoc($selectreservation)) {
                ?>
                <form class="" action="update-reservation.php" method="post">
                  <table>
                    <tr>
                      <td>ID RESERVATION</td>
                      <td>:</td>
                      <td><input type="number" name="id-reservasi" value="<?php echo $baris['id_reservasi']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>ID CUSTOMER</td>
                      <td>:</td>
                      <td><input type="number" name="id-customer" value="<?php echo $baris['id_customer']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>TIME of THE EVENT</td>
                      <td>:</td>
                      <td><input type="text" name="time-event" value="<?php echo $baris['waktu_acara']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ID THE VENUE</td>
                      <td>:</td>
                      <td><input type="number" min="1" name="id-venue" value="<?php echo $baris['id_tempatAcara']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ID VENDOR</td>
                      <td>:</td>
                      <td><input type="number" min="1" name="id-vendor" value="<?php echo $baris['id_vendor']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>CONCEPT</td>
                      <td>:</td>
                      <td><input type="text" name="concept" value="<?php echo $baris['konsep_acara']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>ID FIELD COORDINATOR</td>
                      <td>:</td>
                      <td><input type="number" name="id-korlap" value="<?php echo $baris['id_korlap']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>ID SECURITY TEAM</td>
                      <td>:</td>
                      <td><input type="number" name="id-secteam" value="<?php echo $baris['id_securityTeam']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>ID ADMIN</td>
                      <td>:</td>
                      <td><input type="text" name="id-admin" value="<?php echo $baris['username_admin']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>TOTAL PRICE (IDR)</td>
                      <td>:</td>
                      <td><input type="number" name="total-price" value="<?php echo $baris['harga_total']; ?>" readonly /></td>
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
