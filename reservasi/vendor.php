<form class="" action="data-vendor.php" method="post">
  <table>
    <tr>
      <td>Vendor Name</td>
      <td>:</td>
      <td><input type="text" name="vendor-name" placeholder="Vendor Name" required /></td>
    </tr>
    <tr>
      <td>Vendor Owner</td>
      <td>:</td>
      <td><input type="text" name="vendor-owner" placeholder="Vendor Owner" required /></td>
    </tr>
    <tr>
      <td>Vendor Owner ID</td>
      <td>:</td>
      <td><input type="number" name="vendor-name" placeholder="16 digit" required /></td>
    </tr>
    <tr>
      <td>Vendor Address</td>
      <td>:</td>
      <td><input type="text" name="vendor-address" placeholder="Vendor Address" required /></td>
    </tr>
    <tr>
      <td>Vendor Phone</td>
      <td>:</td>
      <td><input type="tel" name="vendor-phone" placeholder="+62" required /></td>
    </tr>
    <tr>
      <td>Vendor Email</td>
      <td>:</td>
      <td><input type="email" name="vendor-email" placeholder="email@Vendor.com" required /></td>
    </tr>
    <tr>
      <td>Vendor Type</td>
      <td>:</td>
      <td>
        <select class="" name="vendor-type" required />
          <option value="" disabled selected>Select One</option>
          <option value="food">Food</option>
          <option value="makeup">Make Up</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Vendor Price Tag (IDR)</td>
      <td>:</td>
      <td><input type="number" name="vendor-pricetag" min="0" placeholder="100000" required /></td>
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
