<form action="./config/data-employee.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
      <td>Employee Name</td>
      <td>:</td>
      <td><input type="text" name="employee-name" placeholder="Employee Name" required /></td>
    </tr>
    <tr>
      <td>Employee ID</td>
      <td>:</td>
      <td><input type="number" name="employee-id" min="0" placeholder="Employee ID" required /></td>
    </tr>
    <tr>
      <td>Gender of Employee</td>
      <td>:</td>
      <td>
        <input type="radio" name="employee-gender" value="L" required />Male
        <input type="radio" name="employee-gender" value="P" required />Female
      </td>
    </tr>
    <tr>
      <td>Employee Position</td>
      <td>:</td>
      <td>
        <select class="" name="employee-position" required />
          <option value="" disabled selected>Select One</option>
          <option value="Administration Officer">Administration Officer</option>
          <option value="Electricity Coordinator">Electricity Coordinator</option>
          <option value="Field Coordinator">Field Coordinator</option>
          <option value="Finance">Finance</option>
          <option value="FoH">FoH</option>
          <option value="General Support">General Support</option>
          <option value="Lighting System Coordinator">Lighting Sys. Coordinator</option>
          <option value="Permit Coordinator">Permit Coordinator</option>
          <option value="Public Facility Coordinator">Public Faci. Coordinator</option>
          <option value="Sound System Coordinator">Sound Sys. Coordinator</option>
          <option value="Stage Coordinator">Stage Coordinator</option>
          <option value="Talent Coordinator">Talent Coordinator</option>
          <option value="Vendor Coordinator">Vendor Coordinator</option>
          <option value="Venue Coordinator">Venue Coordinator</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Employee Address</td>
      <td>:</td>
      <td><input type="text" name="employee-address" placeholder="Employee Address" required /></td>
    </tr>
    <tr>
      <td>Employee Phone</td>
      <td>:</td>
      <td><input type="tel" name="employee-phone" placeholder="+62" required /></td>
    </tr>
    <tr>
      <td>Photo of Employee</td>
      <td>:</td>
      <td>
        <input type="file" name="employee-img" accept="image/*" required />
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
