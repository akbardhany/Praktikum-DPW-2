<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>Blue's Rose E.O.</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>
	<body style="background:lavenderblush"><tt>
	   <div class="container">
      <div class="row">
         <div class="col-sm-5" style="padding:10px">
           <h3>WELCOME TO<br />BLUE ROSE EVENT ORGANIZER<br />DATA CENTER</h3>
         </div>
         <div class="col-sm-2">
           <center>
             <img src="./img/ico-x.png" height="120px" draggable="false" style="padding:10px;pointer-events:none;opacity:0.5">
           </center>
         </div>
           <form class="col-sm-5" action="gate-checking.php" method="post" style="padding:20px;">
           <table align=center>
             <tr>
               <td>Username</td>
               <td>:</td>
               <td><input type="text" name="user_name" placeholder="Username" required /></td>
             </tr>
             <tr>
               <td>Password</td>
               <td>:</td>
               <td><input type="password" name="password" placeholder="Password" required /></td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td align="right"><input type="submit" name="login" value="Login" /></td>
             </tr>
           </table>
           </form>
       </div>
     </div>
  </body>
</html>
