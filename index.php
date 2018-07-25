<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blue's Rose E.O.</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
  <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
  <script src="./js/jquery.min.js"></script>
  <script src="./js/popper.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
  <body><tt>
    <div class="container">
      <div class="row">
        <div class="col-sm-5"><br />
          <h3><kbd>WELCOME TO BLUE'S ROSE EVENT ORGANIZER</kbd></h3>&nbsp;
        </div>
        <div class="col-sm-5">

        </div>
        <div class="col-sm-2">
          <br /><br /><a href="./login.php" class="text-danger"style="text-decoration: none !important" target="_blank">Do u have a access?</a>
        </div>
      </div>
      <div class="row">
        <?php
          include './connection.php';
          $que = mysqli_query($conn, "SELECT * FROM vendor ORDER BY 1 DESC");
          if ($que) {
            while ($baris = mysqli_fetch_assoc($que)) {
        ?>
        <div class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./reservasi/config/image/<?php echo $baris['foto_vendor']?>" alt="<?php echo $baris['nama_vendor']?>" width="100%" height="100%" draggable="false" style="pointer-events:none">
              <div class="carousel-caption">
                <h6><kbd><?php echo $baris['nama_vendor']?></kbd></h6>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
          }else {
            echo "not selected yet";
          }
         ?>
      </div>
    </div>
  </body>
</html>
