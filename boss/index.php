<!DOCTYPE html>
<?php
  include "../connection.php";
    session_start();
      if (empty($_SESSION['username'])){
        header("Location:../login.php");
      }else{
          if ($_SESSION['hak'] != "Bos") {
            header("Location:../login.php");
          }else {
            echo "Log in as ".$_SESSION['username'];
          }
      }
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue's Rose E.O.</title>
    <link rel='shortcut icon' type='image/x-icon' href='../img/ico-x.png' />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body><tt><center><br />
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img class="animate" src="../img/ico-x.png" alt="Narotama Logo" width="100px" height="100px" draggable="false" style="pointer-events:none">
        </div>
      </div>
      <br />
      <nav class="navbar navbar-expand-md">
        <div class="animate2">Blue's Rose Data Center</div>
        <button class="navbar-toggler bg-info navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="nav nav-tabs col-sm-12 navbar-expand-md" role="tablist">
            <li class="nav-item col-sm-1">
              <a class="" data-toggle="tab" href="">&nbsp;</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link active" data-toggle="tab" href="#Home">Home</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link" data-toggle="tab" href="#NewData">New Data</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link" data-toggle="tab" href="#Special">Special</a>
            </li>
            <li class="nav-item col-sm-3">
              <a class="nav-link" data-toggle="tab" href="#DataSearch">Data Search</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav></center>
      <div class="tab-content">
        <div id="Home" class="container tab-pane active">
          <div class="row">
            <div class="col-sm-8">
              <h3>Welcome to Blue's Rose E.O. Data Center</h3>
              <hr />
            </div>
            <div class="col-sm-4"></div>
          </div>
          <div class="row">
            <aside class="col-sm-3">
              <ul class="nav nav-link" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-admin">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-customer">Customer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-vendor">Vendor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-reservation">Reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-transaction">Transaction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-thevenue">The Venue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-employee">Employee</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-field-coordinator">Field Coordinator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-security-team">Security Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-security-salary">Salary of The Security Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#select-employee-salary">Employee Salary</a>
                </li>
              </ul>
            </aside>
            <div class="col-sm-9">
              <article class="tab-content">
                <div id="select-admin" class="container tab-pane fade">
                  <h3>Admin Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-admin.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-customer" class="container tab-pane fade">
                  <h3>Customer Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-customer.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-vendor" class="container tab-pane fade">
                  <h3>Vendor Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-vendor.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-reservation" class="container tab-pane fade">
                  <h3>Reservation Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-reservation.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-transaction" class="container tab-pane fade">
                  <h3>Transaction Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-transaction.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-thevenue" class="container tab-pane fade">
                  <h3>Venue Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-venue.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-employee" class="container tab-pane fade">
                  <h3>Employee Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-employee.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-field-coordinator" class="container tab-pane fade">
                  <h3>Field Coordinator Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-fieldcoordinator.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-security-team" class="container tab-pane fade">
                  <h3>Security Team Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-securityteam.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-security-salary" class="container tab-pane fade">
                  <h3>Security Salary Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-secsalary.php'; ?>
                    </div>
                  </div>
                </div>
                <div id="select-employee-salary" class="container tab-pane fade">
                  <h3>Employee Salary Data</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <?php include './config/select-employeesalary.php'; ?>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div id="NewData" class="container tab-pane fade">
          <div class="row">
            <div class="col-sm-7">
              <h3>Upcoming Data on Blue's Rose E.O.</h3>
              <hr />
            </div>
            <div class="col-sm-5"></div>
          </div>
          <div class="row">
            <article class="col-sm-3">
              <ul class="nav nav-link" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#admin">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#customer">Customer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#vendor">Vendor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#reservation">Reservation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#transaction">Transaction</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#thevenue">The Venue</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#employee">Employee</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#field-coordinator">Field Coordinator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#security-team">Security Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#security-salary">Salary of The Security Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#employee-salary">Employee Salary</a>
                </li>
              </ul>
            </article>
            <div class="col-sm-9">
                <aside class="tab-content">
                  <div id="admin" class="container tab-pane fade">
                    <h3>New Admin Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'admin.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="customer" class="container tab-pane fade">
                    <h3>New Customer Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../reservasi/customer.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="vendor" class="container tab-pane fade">
                    <h3>New Vendor Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../reservasi/vendor.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="reservation" class="container tab-pane fade">
                    <h3>New Reservation Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../reservasi/reservation.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="transaction" class="container tab-pane fade">
                    <h3>New Transaction Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../reservasi/transaction.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="thevenue" class="container tab-pane fade">
                    <h3>New Venue Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../reservasi/venue.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="employee" class="container tab-pane fade">
                    <h3>New Employee Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../pegawai/employee.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="field-coordinator" class="container tab-pane fade">
                    <h3>New Field-Coordinator Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../pegawai/field-coordinator.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="security-team" class="container tab-pane fade">
                    <h3>New Security Team Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../pegawai/security-team.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="security-salary" class="container tab-pane fade">
                    <h3>New Security Team Salary Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../pegawai/securityteam-salary.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="employee-salary" class="container tab-pane fade">
                    <h3>New Employee Salary Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include '../pegawai/employee-salary.php'; ?>
                      </div>
                    </div>
                  </div>
                </aside>
            </div>
          </div>
        </div>
        <div id="Special" class="container tab-pane fade">
          <div class="row">
            <div class="col-sm-7">
              <h3>TABLE RESERVATION WITH INNER JOIN</h3>
            </div>
            <div class="col-sm-5">
              <a href = "./config/reservation-toexcel.php" target = "blank" class = "btn btn-success"> <i class = "fa fa-print"></i> Export to Excel</a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <?php include './config/inner-reservation.php'; ?>
            </div>
          </div>
        </div>
        <div id="DataSearch" class="container tab-pane fade">
          <h3>Data Search</h3>
            <form method="post">
              <table>
                <tr>
                  <td class="animate2">Keyword</td>
                  <td>:</td>
                  <td>
                    <input class="hmm" type="text" name="key-search" placeholder="eilish" required />
                  </td>
                  <td>
                    <select class="btn btn-info" name="tab-select" required />
                      <option value="" disabled selected>Select in Table</option>
                      <option value="sel-custo">Customer</option>
                      <option value="sel-gk">Gaji Karyawan</option>
                      <option value="sel-gst">Gaji Security Team</option>
                      <option value="sel-korlap">Korlap</option>
                      <option value="sel-pegawai">Pegawai</option>
                      <option value="sel-reservasi">Reservasi</option>
                      <option value="sel-sect">Security Team</option>
                      <option value="sel-teac">Tempat Acara</option>
                      <option value="sel-transac">Transaksi</option>
                      <option value="sel-user">User</option>
                      <option value="sel-vendor">Vendor</option>
                    </select>
                  </td>
                  <td>
                    <input class="btn btn-success" type="submit" name="submit" value="Search">
                  </td>
                </tr>
              </table>
            </form>
          <br />
          <div class="row">
            <div class="col-sm-12">
              <?php
                if (isset($_POST['submit'])) {
                  require '../connection.php';

                  $key_search = $_POST['key-search'];
                  $tab_select = $_POST['tab-select'];

                  if ($tab_select == "sel-custo") {
                    $sel_custo = mysqli_query($conn, "SELECT * FROM customer WHERE (`id_customer` LIKE '%".$key_search."%') OR (`nama_customer` LIKE '%".$key_search."%')");
                    if ($sel_custo) {
                      // output data of each row
                      echo '<h4>'."Search Result from Customer: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."NAME".'</td>';
                      echo '<td>'."NIK".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."EMAIL".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_custo)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_customer"].'</td>';
                        echo '<td>'.$baris["nama_customer"].'</td>';
                        echo '<td>'.$baris["noktp_customer"].'</td>';
                        echo '<td>'.$baris["alamat_customer"].'</td>';
                        echo '<td>'.$baris["nohp_customer"].'</td>';
                        echo '<td>'.$baris["email_customer"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-customer.php?update='.$baris["id_customer"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-customer.php?delete='.$baris["id_customer"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                    mysqli_close($conn);
                  }
                  if ($tab_select == "sel-gk") {
                    $sel_gk = mysqli_query($conn, "SELECT * FROM gaji_karyawan WHERE (`id_gajiKaryawan` LIKE '%".$key_search."%') OR (`id_pegawai` LIKE '%".$key_search."%')");
                    if ($sel_gk) {
                      // output data of each row
                      echo '<h4>'."Search Result from Gaji Karyawan: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."ID EMPLOYEE".'</td>';
                      echo '<td>'."TOTAL SALARY (IDR)".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."USERNAME ADMIN".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_gk)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_gajiKaryawan"].'</td>';
                        echo '<td>'.$baris["id_pegawai"].'</td>';
                        echo '<td>'.$baris["total_gajiKaryawan"].'</td>';
                        echo '<td>'."<img src='../pegawai/profile-photo/".$baris['foto_karyawan']."' >".'</td>';
                        echo '<td>'.$baris["username_admin"].'</td>';
                        echo '<td>'.$baris["waktu_bayarKaryawan"].'</td>';
                        echo '<td>'.'<a href="./config/delete-emsalary.php?delete='.$baris["id_gajiKaryawan"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-gst") {
                    $sel_gst = mysqli_query($conn, "SELECT * FROM gaji_securityTeam WHERE (`id_gajiSecurityTeam` LIKE '%".$key_search."%') OR (`id_securityTeam` LIKE '%".$key_search."%')");
                    if ($sel_gst) {
                      // output data of each row
                      echo '<h4>'."Search Result from Gaji Security Team: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."ID SECURITY".'</td>';
                      echo '<td>'."TOTAL SALARY (IDR)".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."USERNAME ADMIN".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_gst)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_gajiSecurityTeam"].'</td>';
                        echo '<td>'.$baris["id_securityTeam"].'</td>';
                        echo '<td>'.$baris["total_gajiSecurityTeam"].'</td>';
                        echo '<td>'."<img src='./pictures/".$baris['foto_SecurityTeam']."' >".'</td>';
                        echo '<td>'.$baris["username_admin"].'</td>';
                        echo '<td>'.$baris["waktu_bayarSecurityTeam"].'</td>';
                        echo '<td>'.'<a href="./config/delete-secsalary.php?delete='.$baris["id_gajiSecurityTeam"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-korlap") {
                    $sel_korlap = mysqli_query($conn, "SELECT * FROM korlap WHERE (`id_korlap` LIKE '%".$key_search."%') OR (`nama_korlap` LIKE '%".$key_search."%')");
                    if ($sel_korlap) {
                      // output data of each row
                      echo '<h4>'."Search Result from Korlap: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."NAME".'</td>';
                      echo '<td>'."NIK".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."EMAIL".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_korlap)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_korlap"].'</td>';
                        echo '<td>'.$baris["nama_korlap"].'</td>';
                        echo '<td>'.$baris["noktp_korlap"].'</td>';
                        echo '<td>'.$baris["nohp_korlap"].'</td>';
                        echo '<td>'.$baris["alamat_korlap"].'</td>';
                        echo '<td>'.$baris["email_korlap"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-fieldcoordinator.php?update='.$baris["id_korlap"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-fieldcoordinator.php?delete='.$baris["id_korlap"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-pegawai") {
                    $sel_pegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE (`id_pegawai` LIKE '%".$key_search."%') OR (`nama_pegawai` LIKE '%".$key_search."%') OR (`nik_pegawai` LIKE '%".$key_search."%')");
                    if ($sel_pegawai) {
                      // output data of each row
                      echo '<h4>'."Search Result from Pegawai: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."NAME".'</td>';
                      echo '<td>'."NIK".'</td>';
                      echo '<td>'."GENDER".'</td>';
                      echo '<td>'."POSITION".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_pegawai)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_pegawai"].'</td>';
                        echo '<td>'.$baris["nama_pegawai"].'</td>';
                        echo '<td>'.$baris["nik_pegawai"].'</td>';
                        echo '<td>'.$baris["jk_pegawai"].'</td>';
                        echo '<td>'.$baris["jabatan_pegawai"].'</td>';
                        echo '<td>'.$baris["alamat_pegawai"].'</td>';
                        echo '<td>'.$baris["notelp_pegawai"].'</td>';
                        echo '<td>'."<img src='./pictures/".$baris['foto_pegawai']."' >".'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-employee.php?update='.$baris["id_pegawai"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-employee.php?delete='.$baris["id_pegawai"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-reservasi") {
                    $sel_reservasi = mysqli_query($conn, "SELECT * FROM reservasi WHERE (`id_reservasi` LIKE '%".$key_search."%') OR (`id_customer` LIKE '%".$key_search."%') OR (`waktu_acara` LIKE '%".$key_search."%')");
                    if ($sel_reservasi) {
                      // output data of each row
                      echo '<h4>'."Search Result from Reservasi: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."ID CUSTOMER".'</td>';
                      echo '<td>'."TIME of THE EVENT".'</td>';
                      echo '<td>'."ID THE VENUE".'</td>';
                      echo '<td>'."ID VENDOR".'</td>';
                      echo '<td>'."CONCEPT".'</td>';
                      echo '<td>'."ID FIELD COORDINATOR".'</td>';
                      echo '<td>'."ID SECURITY TEAM".'</td>';
                      echo '<td>'."ID ADMIN".'</td>';
                      echo '<td>'."TOTAL PRICE (IDR)".'</td>';
                      echo '<td>'."TIME RECORDED".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_reservasi)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_reservasi"].'</td>';
                        echo '<td>'.$baris["id_customer"].'</td>';
                        echo '<td>'.$baris["waktu_acara"].'</td>';
                        echo '<td>'.$baris["id_tempatAcara"].'</td>';
                        echo '<td>'.$baris["id_vendor"].'</td>';
                        echo '<td>'.$baris["konsep_acara"].'</td>';
                        echo '<td>'.$baris["id_korlap"].'</td>';
                        echo '<td>'.$baris["id_securityTeam"].'</td>';
                        echo '<td>'.$baris["username_admin"].'</td>';
                        echo '<td>'.$baris["harga_total"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-reservation.php?update='.$baris["id_reservasi"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-reservation.php?delete='.$baris["id_customer"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-sect") {
                    $sel_sect = mysqli_query($conn, "SELECT * FROM security_team WHERE (`id_securityTeam` LIKE '%".$key_search."%') OR (`nama_securityTeam` LIKE '%".$key_search."%') OR (`noktp_securityTeam` LIKE '%".$key_search."%')");
                    if ($sel_sect) {
                      // output data of each row
                      echo '<h4>'."Search Result from Security Team: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."NAME".'</td>';
                      echo '<td>'."NIK".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."MEMBER".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_sect)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_securityTeam"].'</td>';
                        echo '<td>'.$baris["nama_securityTeam"].'</td>';
                        echo '<td>'.$baris["noktp_securityTeam"].'</td>';
                        echo '<td>'.$baris["alamat_securityTeam"].'</td>';
                        echo '<td>'.$baris["nohp_securityTeam"].'</td>';
                        echo '<td>'.$baris["anggota_securityTeam"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-securityteam.php?update='.$baris["id_securityTeam"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-securityteam.php?delete='.$baris["id_securityTeam"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-teac") {
                    $sel_teac = mysqli_query($conn, "SELECT * FROM tempat_acara WHERE (`id_tempatAcara` LIKE '%".$key_search."%') OR (`nama_tempatAcara` LIKE '%".$key_search."%')");
                    if ($sel_teac) {
                      // output data of each row
                      echo '<h4>'."Search Result from Tempat Acara: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."VENUE NAME".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_teac)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_tempatAcara"].'</td>';
                        echo '<td>'.$baris["nama_tempatAcara"].'</td>';
                        echo '<td>'.$baris["alamat_tempatAcara"].'</td>';
                        echo '<td>'."<img src='./pictures/".$baris['foto_tempatAcara']."' >".'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-venue.php?update='.$baris["id_tempatAcara"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-venue.php?delete='.$baris["id_tempatAcara"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-transac") {
                    $sel_transac = mysqli_query($conn, "SELECT * FROM transaksi WHERE (`id_transaksi` LIKE '%".$key_search."%') OR (`id_reservasi` LIKE '%".$key_search."%') OR (`status_transaksi` LIKE '%".$key_search."%')");
                    if ($sel_transac) {
                      // output data of each row
                      echo '<h4>'."Search Result from Transaksi: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."ID RESERVATION".'</td>';
                      echo '<td>'."USERNAME ADMIN".'</td>';
                      echo '<td>'."METHOD of PAYMENT".'</td>';
                      echo '<td>'."TOTAL PRICE (IDR)".'</td>';
                      echo '<td>'."PAID (IDR)".'</td>';
                      echo '<td>'."THE REMAINING PAY (IDR)".'</td>';
                      echo '<td>'."STATUS".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_transac)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_transaksi"].'</td>';
                        echo '<td>'.$baris["id_reservasi"].'</td>';
                        echo '<td>'.$baris["username_admin"].'</td>';
                        echo '<td>'.$baris["metode_pembayaran"].'</td>';
                        echo '<td>'.$baris["harga_total"].'</td>';
                        echo '<td>'.$baris["yang_dibayar"].'</td>';
                        echo '<td>'.$baris["sisa_bayar"].'</td>';
                        echo '<td>'.$baris["status_transaksi"].'</td>';
                        echo '<td>'.$baris["waktu_transaksi"].'</td>';
                        echo '<td>'.'<a href="./config/delete-transaction.php?delete='.$baris["id_transaksi"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-user") {
                    $sel_user = mysqli_query($conn, "SELECT * FROM user WHERE (`id_user` LIKE '%".$key_search."%') OR (`username_user` LIKE '%".$key_search."%') OR (`hakakses_user` LIKE '%".$key_search."%')");
                    if ($sel_user) {
                      // output data of each row
                      echo '<h4>'."Search Result from User: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."USERNAME".'</td>';
                      echo '<td>'."NAME".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."PASSWORD".'</td>';
                      echo '<td>'."ACCESS".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_user)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_user"].'</td>';
                        echo '<td>'.$baris["username_user"].'</td>';
                        echo '<td>'.$baris["nama_user"].'</td>';
                        echo '<td>'.$baris["alamat_user"].'</td>';
                        echo '<td>'.$baris["nohp_user"].'</td>';
                        echo '<td>'."<img src='./pictures/".$baris['foto_user']."' >".'</td>';
                        echo '<td>'.$baris["pass_user"].'</td>';
                        echo '<td>'.$baris["hakakses_user"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-admin.php?update='.$baris["id_user"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-admin.php?delete='.$baris["id_user"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }
                  if ($tab_select == "sel-vendor") {
                    $sel_vendor = mysqli_query($conn, "SELECT * FROM vendor WHERE (`id_vendor` LIKE '%".$key_search."%') OR (`nama_vendor` LIKE '%".$key_search."%') OR (`pemilik_vendor` LIKE '%".$key_search."%')");
                    if ($sel_vendor) {
                      // output data of each row
                      echo '<h4>'."Search Result from Vendor: ".$key_search.'</h4>';
                      echo '<div class="table-responsive">';
                      echo '<table class="table table-hover">';
                      echo '<thead>';
                      echo '<tr>';
                      echo '<td>'."ID".'</td>';
                      echo '<td>'."VENDOR NAME".'</td>';
                      echo '<td>'."OWNER NAME".'</td>';
                      echo '<td>'."OWNER ID".'</td>';
                      echo '<td>'."ADDRESS".'</td>';
                      echo '<td>'."PHONE".'</td>';
                      echo '<td>'."EMAIL".'</td>';
                      echo '<td>'."TYPE".'</td>';
                      echo '<td>'."PHOTO".'</td>';
                      echo '<td>'."PRICE (IDR)".'</td>';
                      echo '<td>'."TIME".'</td>';
                      echo '<td>'."ACTION".'</td>';
                      echo '</tr>';
                      echo '<thead>';
                      while($baris = mysqli_fetch_assoc($sel_vendor)) {
                        echo '<tbody>';
                        echo '<tr>';
                        echo '<td>'.$baris["id_vendor"].'</td>';
                        echo '<td>'.$baris["nama_vendor"].'</td>';
                        echo '<td>'.$baris["pemilik_vendor"].'</td>';
                        echo '<td>'.$baris["noktp_vendor"].'</td>';
                        echo '<td>'.$baris["alamat_vendor"].'</td>';
                        echo '<td>'.$baris["nohp_vendor"].'</td>';
                        echo '<td>'.$baris["email_vendor"].'</td>';
                        echo '<td>'.$baris["type_vendor"].'</td>';
                        echo '<td>'."<img src='./pictures/".$baris['foto_vendor']."' >".'</td>';
                        echo '<td>'.$baris["harga_vendor"].'</td>';
                        echo '<td>'.$baris["waktu_pembuatan"].'</td>';
                        echo '<td>'.'<a href="./config/edit-vendor.php?update='.$baris["id_vendor"].'">'.'<i class="fa fa-pencil" aria-hidden="true">'.'</i>'.'</a>'."&nbsp;&nbsp;".'<a href="./config/delete-vendor.php?delete='.$baris["id_vendor"].'">'.'<i class="fa fa-trash text-danger" aria-hidden="true">'.'</i>'.'</a>'.'</td>';
                        echo '</tr>';
                        echo '</tbody>';
                      }
                      echo '</table>';
                      echo '</div>';
                    }
                  }

                }else {
                  echo "";
                }
               ?>
            </div>
          </div>
        </div>
      </div>
      <div class="container modal-footer">
        <i>&copy; scrup<sup>2</sup>&nbsp;2018 All Rights Reserved.</i>
      </div>
    </div>
  </body>
</html>
