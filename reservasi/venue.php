<form class="" action="./config/data-venue.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Venue Name</td>
      <td>:</td>
      <td><input type="text" name="venue-name" placeholder="Venue Name" required /></td>
    </tr>
    <tr>
      <td>Venue Address</td>
      <td>:</td>
      <td><input type="text" name="venue-address" placeholder="Venue Address" required /></td>
    </tr>
    <tr>
      <td>Photo of The Venue</td>
      <td>:</td>
      <td>
        <input type="file" name="venue-img" accept="image/*" required />
      </td>
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
