<form class="" action="./config/data-reservation.php" method="post">
  <table>
    <tr>
      <td>ID Customer</td>
      <td>:</td>
      <td>
        <select class="" name="idcus-reservation" required />
        <option disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selCus = mysqli_query($conn, "SELECT nama_customer, id_customer FROM customer");
          while($row = mysqli_fetch_assoc($selCus))
            {
            ?>
            <option value ="<?php echo $row['id_customer'];?>" >
                <?php echo $row['nama_customer']; ?>
            </option>
            <?php
            }
            mysqli_close($conn);
         ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Time of The Event</td>
      <td>:</td>
      <td><input type="date" name="timeevent-reservation" required /></td>
    </tr>
    <tr>
      <td>ID Venue</td>
      <td>:</td>
      <td>
        <select class="" name="idven-reservation" required />
        <option disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selVen = mysqli_query($conn, "SELECT nama_tempatAcara, id_tempatAcara FROM tempat_acara");
          while($row = mysqli_fetch_assoc($selVen))
            {
            ?>
            <option value ="<?php echo $row['id_tempatAcara'];?>" >
                <?php echo $row['nama_tempatAcara']; ?>
            </option>
            <?php
            }
            mysqli_close($conn);
         ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Vendor</td>
      <td>:</td>
      <td>
        <select class="" name="idvd-reservation" required />
        <option disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selVd = mysqli_query($conn, "SELECT nama_vendor, id_vendor FROM vendor");
          while($row = mysqli_fetch_assoc($selVd))
            {
            ?>
            <option value ="<?php echo $row['id_vendor'];?>" >
                <?php echo $row['nama_vendor']; ?>
            </option>
            <?php
            }
            mysqli_close($conn);
         ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Concept of The Event</td>
      <td>:</td>
      <td><input type="text" name="con-reservation" placeholder="Garden" required /></td>
    </tr>
    <tr>
      <td>ID of The Field Coordinator</td>
      <td>:</td>
      <td>
        <select class="" name="idfieldco-reservation" required />
        <option disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selSec = mysqli_query($conn, "SELECT nama_korlap, id_korlap FROM korlap");
          while($row = mysqli_fetch_assoc($selSec))
            {
            ?>
            <option value ="<?php echo $row['id_korlap'];?>" >
                <?php echo $row['nama_korlap']; ?>
            </option>
            <?php
            }
            mysqli_close($conn);
         ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Security Team</td>
      <td>:</td>
      <td>
        <select class="" name="idsete-reservation" required />
        <option disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selSec = mysqli_query($conn, "SELECT nama_securityTeam, id_securityTeam FROM security_team");
          while($row = mysqli_fetch_assoc($selSec))
            {
            ?>
            <option value ="<?php echo $row['id_securityTeam'];?>" >
                <?php echo $row['nama_securityTeam']; ?>
            </option>
            <?php
            }
            mysqli_close($conn);
         ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Admin</td>
      <td>:</td>
      <td>get from session</td>
    </tr>
    <tr>
      <td>Total Price (IDR)</td>
      <td>:</td>
      <td>get from data vendor selected</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td align="right"><input type="submit" name="submit" value="Submit"></td>
    </tr>
  </table>
</form>
<br />
