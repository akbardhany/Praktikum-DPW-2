<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue's Rose E.O.</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
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
              <a class="nav-link" data-toggle="tab" href="">Logout</a>
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
                  <a class="nav-link" data-toggle="tab" href="#select-employee">Employee</a>
                </li>
                <li class="nav-item col-sm-3">
                  <a class="nav-link" data-toggle="tab" href="#select-fieldcoordinator">Field Coordinator</a>
                </li>
                <li class="nav-item col-sm-2">
                  <a class="nav-link" data-toggle="tab" href="#select-securityteam">Security Team</a>
                </li>
                <li class="nav-item col-sm-3">
                  <a class="nav-link" data-toggle="tab" href="#select-securitysalary">Security Team Salary</a>
                </li>
                <li class="nav-item col-sm-2">
                  <a class="nav-link" data-toggle="tab" href="#select-employeesalary">Employee Salary</a>
                </li>
              </ul>
          </center><br />
          <div class="row">
            <div class="col-sm-12 tab-content">
              <div id="select-employee" class="container tab-pane fade">
                <h3>Employee Data</h3>
                <?php #include './config/select-employee.php'; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="select-fieldcoordinator" class="container tab-pane fade">
                <h3>Field Coordinator Data</h3>
                <?php #include './config/select-fieldcoordinator.php'; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="select-securityteam" class="container tab-pane fade">
                <h3>Security Team Data</h3>
                <?php #include './config/select-securityteam.php'; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="select-securitysalary" class="container tab-pane fade">
                <h3>Security Team Salary Data</h3>
                <?php #include './config/select-secteamsalary.php'; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div id="select-employeesalary" class="container tab-pane fade">
                <h3>Employee Salary Data</h3>
                <?php #include './config/select-employeesalary.php'; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                  <div id="employee" class="container tab-pane fade">
                    <h3>New Employee Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php require_once 'employee.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="field-coordinator" class="container tab-pane fade">
                    <h3>New Field-Coordinator Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php require_once 'field-coordinator.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="security-team" class="container tab-pane fade">
                    <h3>New Security Team Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php require_once 'security-team.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="security-salary" class="container tab-pane fade">
                    <h3>New Security Team Salary Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php require_once 'securityteam-salary.php'; ?>
                      </div>
                    </div>
                  </div>
                  <div id="employee-salary" class="container tab-pane fade">
                    <h3>New Employee Salary Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php require_once 'employee-salary.php'; ?>
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
