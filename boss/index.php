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
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel='shortcut icon' type='image/x-icon' href='../img/ico-x.png' />
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
            <li class="nav-item col-sm-2">
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
      </div>
      <div class="container modal-footer">
        <i>&copy; scrup<sup>2</sup>&nbsp;2018 All Rights Reserved.</i>
      </div>
    </div>
  </body>
</html>
