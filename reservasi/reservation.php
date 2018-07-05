<form class="" action="data-reservation.php" method="post">
  <table>
    <tr>
      <td>ID Customer</td>
      <td>:</td>
      <td>
        <select class="" name="idcus-reservation" required />
          <option value="" disabled selected>Select from db</option>
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
        <option value="" disabled selected>Select from db</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Vendor</td>
      <td>:</td>
      <td>
        <select class="" name="idvend-reservation" required />
          <option value="" disabled selected>Select from db</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Concept of The Event</td>
      <td>:</td>
      <td><input type="text" name="idcon" placeholder="Garden" required /></td>
    </tr>
    <tr>
      <td>ID of The Field Coordinator</td>
      <td>:</td>
      <td>
        <select class="" name="idfielco-reservation" required />
          <option value="" disabled selected>Select from db</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Security Team</td>
      <td>:</td>
      <td>
        <select class="" name="idsete-reservation" required />
          <option value="" disabled selected>Select from db</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>ID Admin</td>
      <td>:</td>
      <td>get from session</td>
    </tr>
    <tr>
      <td>Total Price</td>
      <td>:</td>
      <td></td>
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
