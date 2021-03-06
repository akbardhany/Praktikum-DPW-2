<!DOCTYPE html>
<?php
  include "../connection.php";
    session_start();
      if (empty($_SESSION['username'])){
        header("Location:../login.php");
      }else{
          if ($_SESSION['hak'] != "Admin Reservasi") {
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
    <link rel='shortcut icon' type='image/x-icon' href='../img/ico-x.png' />
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
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav></center>
      <div class="tab-content">
        <div id="Home" class="container tab-pane active"><br>
          <h3>Welcome to Blue's Rose E.O. Data Center</h3>
          <center>
              <ul class="nav nav-tabs col-sm-12" role="tablist">
                <li class="nav-item col-sm-2">
                  <a class="nav-link" data-toggle="tab" href="#select-customer">Customer</a>
                </li>
                <li class="nav-item col-sm-3">
                  <a class="nav-link" data-toggle="tab" href="#select-vendor">Vendor</a>
                </li>
                <li class="nav-item col-sm-2">
                  <a class="nav-link" data-toggle="tab" href="#select-reservation">Reservation</a>
                </li>
                <li class="nav-item col-sm-3">
                  <a class="nav-link" data-toggle="tab" href="#select-transaction">Transaction</a>
                </li>
                <li class="nav-item col-sm-2">
                  <a class="nav-link" data-toggle="tab" href="#select-thevenue">The Venue</a>
                </li>
              </ul>
          </center><br />
          <div class="row">
            <div class="col-sm-12 tab-content">
              <div id="select-customer" class="container tab-pane fade">
                <h3>Customer Data</h3>
                <?php include './config/select-customer.php'; ?>
              </div>
              <div id="select-vendor" class="container tab-pane fade">
                <h3>Vendor Data</h3>
                <?php include './config/select-vendor.php'; ?>
              </div>
              <div id="select-reservation" class="container tab-pane fade">
                <h3>Reservation Data</h3>
                <?php include './config/select-reservation.php'; ?>
              </div>
              <div id="select-transaction" class="container tab-pane fade">
                <h3>Transaction Data</h3>
                <?php include './config/select-transaction.php'; ?>
              </div>
              <div id="select-thevenue" class="container tab-pane fade">
                <h3>The Venue Data</h3>
                <?php include './config/select-venue.php'; ?>
              </div>
            </div>
          </div>
        </div><br />
        <div id="NewData" class="container tab-pane fade"><br>
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
              </ul>
            </article>
            <div class="col-sm-9">
                <aside class="tab-content">
                  <div id="customer" class="container tab-pane fade">
                    <h3>New Customer Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'customer.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="vendor" class="container tab-pane fade">
                    <h3>New Vendor Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'vendor.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="reservation" class="container tab-pane fade">
                    <h3>New Reservation Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'reservation.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="transaction" class="container tab-pane fade">
                    <h3>New Transaction Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'transaction.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="thevenue" class="container tab-pane fade">
                    <h3>New Venue Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include 'venue.php'; ?>
                      </div>
                    </div>
                  </div>
                </aside>
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
