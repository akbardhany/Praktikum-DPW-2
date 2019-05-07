<form class="" action="./config/data-admin.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Username (ID)</td>
      <td>:</td>
      <td><input type="text" name="username" placeholder="scrup" required /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input type="text" name="name" min="0" placeholder="Shaza" required /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><input type="text" name="address" placeholder="Abbey Rd" required /></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td>:</td>
      <td><input type="tel" name="phone" placeholder="+62" required /></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td>:</td>
      <td>
        <input type="file" name="photo-user" accept="image/*" required />
      </td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="password" placeholder="mix all character, please." required /></td>
    </tr>
    <tr>
      <td>Permissions</td>
      <td>:</td>
      <td>
        <select class="" name="permissions" required />
          <option value="" disabled selected>Select One</option>
          <option value="Admin Pegawai">Admin Pegawai</option>
          <option value="Admin Reservasi">Admin Reservasi</option>
        </select>
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
