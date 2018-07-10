<form class="" action="./config/data-secteamsalary.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>ID of Sec. Officer</td>
      <td>:</td>
      <td>
        <select class="" name="id-security" required />
        <option value="0" disabled selected>Select One</option>
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
      <td>Salary (IDR)</td>
      <td>:</td>
      <td><input type="number" name="salary-security" min="0" placeholder="100000" required /></td>
    </tr>
    <tr>
      <td>Photo of Security Officer</td>
      <td>:</td>
      <td><input type="file" name="img-security" accept="image/*" required /></td>
    </tr>
    <tr>
      <td>ID Admin</td>
      <td>:</td>
      <td>get from session</td>
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
