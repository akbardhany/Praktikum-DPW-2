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
          <h3>EDIT DATA EMPLOYEE</h3>
          <?php
            require '../../connection.php';
            $upd = $_GET['update'];
            $selectemployee = mysqli_query($conn, "SELECT * FROM pegawai WHERE id_pegawai=$upd");

            if ($selectemployee) {

              while($baris = mysqli_fetch_array($selectemployee)) {
                ?>
                <form class="" action="update-employee.php" method="post" enctype="multipart/form-data">
                  <table>
                    <tr>
                      <td>ID</td>
                      <td>:</td>
                      <td><input type="number" name="employee-id" value="<?php echo $baris['id_pegawai']; ?>" readonly /></td>
                    </tr>
                    <tr>
                      <td>NAME</td>
                      <td>:</td>
                      <td><input type="text" name="employee-name" value="<?php echo $baris['nama_pegawai']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>NIK</td>
                      <td>:</td>
                      <td><input type="number" min="0" name="employee-nik" value="<?php echo $baris['nik_pegawai']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>GENDER</td>
                      <td>:</td>
                      <td>
                      <select class="" name="employee-gender" required />
                        <option value="<?php echo $baris['jk_pegawai']; ?>" selected><?php echo $baris['jk_pegawai']; ?></option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </td>
                    </tr>
                    <tr>
                      <td>POSITION</td>
                      <td>:</td>
                      <td>
                        <select class="" name="employee-position" required />
                          <option value="<?php echo $baris['jabatan_pegawai']; ?>" selected><?php echo $baris['jabatan_pegawai']; ?></option>
                          <option value="Administration Officer">Administration Officer</option>
                          <option value="Electricity Coordinator">Electricity Coordinator</option>
                          <option value="Field Coordinator">Field Coordinator</option>
                          <option value="Finance">Finance</option>
                          <option value="FoH">FoH</option>
                          <option value="General Support">General Support</option>
                          <option value="Lighting System Coordinator">Lighting Sys. Coordinator</option>
                          <option value="Permit Coordinator">Permit Coordinator</option>
                          <option value="Public Facility Coordinator">Public Faci. Coordinator</option>
                          <option value="Sound System Coordinator">Sound Sys. Coordinator</option>
                          <option value="Stage Coordinator">Stage Coordinator</option>
                          <option value="Talent Coordinator">Talent Coordinator</option>
                          <option value="Vendor Coordinator">Vendor Coordinator</option>
                          <option value="Venue Coordinator">Venue Coordinator</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>ADDRESS</td>
                      <td>:</td>
                      <td><input type="text" name="employee-address" value="<?php echo $baris['alamat_pegawai']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>PHONE</td>
                      <td>:</td>
                      <td><input type="tel" name="employee-phone" value="<?php echo $baris['notelp_pegawai']; ?>" required /></td>
                    </tr>
                    <tr>
                      <td>PHOTO</td>
                      <td>:</td>
                      <td>
                        <input type="file" name="employee-photo" accept="image/*" required />
                        <input name="y" type="hidden" id="y" value="<? $baris['foto_pegawai'];?>" /></td>
                      </td>
                      <?php echo '<td>'."Last Photo: "."<img src='../pictures/".$baris['foto_pegawai']."' >".'</td>'; ?>
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
