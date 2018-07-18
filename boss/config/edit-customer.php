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
          <h3>EDIT DATA CUSTOMER</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectcustomer = mysqli_query($conn, "SELECT * FROM customer WHERE id_customer=$upd");

            if ($selectcustomer) {

              while($baris = mysqli_fetch_assoc($selectcustomer)) {
                ?>
                <form class="" action="update-customer.php" method="post">
                  <table>
                    <tr>
                      <td>ID CUSTOMER</td>
                      <td>:</td>
                      <td><input type="number" name="id-customer" value="<?php echo $baris['id_customer']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>Customer Name</td>
                      <td>:</td>
                      <td><input type="text" name="customer-name" value="<?php echo $baris['nama_customer']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Customer ID</td>
                      <td>:</td>
                      <td><input type="number" name="customer-id" min="0" value="<?php echo $baris['noktp_customer']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Customer Address</td>
                      <td>:</td>
                      <td><input type="text" name="customer-address" value="<?php echo $baris['alamat_customer']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Customer Phone</td>
                      <td>:</td>
                      <td><input type="tel" name="customer-phone" value="<?php echo $baris['nohp_customer']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>Customer Email</td>
                      <td>:</td>
                      <td><input type="email" name="customer-email" value="<?php echo $baris['email_customer']; ?>" required /></td>
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
                        <button class="btn btn-danger" type="button" name="button"><a href="../../boss" class="text-white">BACK</a></button>
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
