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
          <h3>RESERVATION DATA</h3>
          <div class="animate2">Blue's Rose Event Organizer</div>
          <hr width="20%">
          <?php
            require '../../connection.php';
            $upd = $_GET['read'];
            $select = mysqli_query($conn, "SELECT * FROM reservasi WHERE id_reservasi=$upd");

            if ($select) {

              while($baris = mysqli_fetch_array($select)) {
                ?>
                  <table>
                    <tr>
                      <td align="right">ID RESERVATION</td>
                      <td>:</td>
                      <td><?php echo $baris['id_reservasi']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID CUSTOMER</td>
                      <td>:</td>
                      <td><?php echo $baris['id_customer']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">TIME Of The Event</td>
                      <td>:</td>
                      <td><?php echo $baris['waktu_acara']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID VENUE</td>
                      <td>:</td>
                      <td><?php echo $baris['id_tempatAcara']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID VENDOR</td>
                      <td>:</td>
                      <td><?php echo $baris['id_vendor']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">CONCEPT</td>
                      <td>:</td>
                      <td><?php echo $baris['konsep_acara']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID FIELD COORDINATOR</td>
                      <td>:</td>
                      <td><?php echo $baris['id_korlap']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID SECURITY TEAM</td>
                      <td>:</td>
                      <td><?php echo $baris['id_securityTeam']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">USERNAME ADMIN</td>
                      <td>:</td>
                      <td><?php echo $baris['username_admin']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">TOTAL PRICE (IDR)</td>
                      <td>:</td>
                      <td><?php echo $baris['harga_total']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">TIME RESERVATION</td>
                      <td>:</td>
                      <td><?php echo $baris['waktu_pembuatan']; ?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td align="right">
                        <a href="javascript:window.print()" class="btn btn-success" target="_blank">Print</a>
                      </td>
                    </tr>
                  </table>
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
