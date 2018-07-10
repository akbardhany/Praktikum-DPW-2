<form class="" action="./config/data-employeesalary.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>ID of Employee</td>
      <td>:</td>
      <td>
        <select class="" name="idemployee" required />
        <option value="0" disabled selected>Select One</option>
        <?php
          require '../connection.php';
          $selPeg = mysqli_query($conn, "SELECT nama_pegawai, id_pegawai FROM pegawai");
          while($row = mysqli_fetch_assoc($selPeg))
            {
            ?>
            <option value ="<?php echo $row['id_pegawai'];?>" >
                <?php echo $row['nama_pegawai']; ?>
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
      <td><input type="number" name="salaryemployee" min="0" placeholder="100000" required /></td>
    </tr>
    <tr>
      <td>Photo of Employee</td>
      <td>:</td>
      <td><input type="file" name="imgemployee" accept="image/*" required /></td>
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
