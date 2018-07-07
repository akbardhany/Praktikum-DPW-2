<form class="" action="./config/data-secteamsalary.php" method="post">
  <table>
    <tr>
      <td>ID of Sec. Officer</td>
      <td>:</td>
      <td>
        <select class="" name="id-security" required />
        <option value="" disabled selected>Select from db</option>
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
      <td>soon (getUserMedia is so hard xoxo)</td>
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
