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
          <h3>TRANSACTION DATA</h3>
          <div class="animate2">Blue's Rose Event Organizer</div>
          <hr width="20%">
          <?php
            require '../../connection.php';
            $upd = $_GET['read'];
            $select = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi=$upd");

            if ($select) {

              while($baris = mysqli_fetch_array($select)) {
                ?>
                  <table>
                    <tr>
                      <td align="right">ID TRANSACTION</td>
                      <td>:</td>
                      <td><?php echo $baris['id_transaksi']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">ID RESERVASI</td>
                      <td>:</td>
                      <td><?php echo $baris['id_reservasi']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">USERNAME ADMIN</td>
                      <td>:</td>
                      <td><?php echo $baris['username_admin']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">METHOD of PAYMENT</td>
                      <td>:</td>
                      <td><?php echo $baris['metode_pembayaran']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">TOTAL PRICE (IDR)</td>
                      <td>:</td>
                      <td><?php echo $baris['harga_total']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">PAID (IDR)</td>
                      <td>:</td>
                      <td><?php echo $baris['yang_dibayar']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">REMAINING PAY (IDR)</td>
                      <td>:</td>
                      <td><?php echo $baris['sisa_bayar']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">STATUS</td>
                      <td>:</td>
                      <td><?php echo $baris['status_transaksi']; ?></td>
                    </tr>
                    <tr>
                      <td align="right">TRANSACTION TIME</td>
                      <td>:</td>
                      <td><?php echo $baris['waktu_transaksi']; ?></td>
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
