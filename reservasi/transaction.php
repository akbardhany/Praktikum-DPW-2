<form class="" action="data-transaction.php" method="post">
  <table>
    <tr>
      <td>ID Reservation</td>
      <td>:</td>
      <td>
        <select class="" name="id-reservation" required />
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
      <td>Method of Payment</td>
      <td>:</td>
      <td>
        <select class="" name="method-payment" required />
        <option disabled selected>Select One</option>
        <option value="debit-card">Debit Card</option>
        <option value="credit-card">Credit Card</option>
        <option value="cash">Cash</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Total Price</td>
      <td>:</td>
      <td>get from data reservation selected.</td>
    </tr>
    <tr>
      <td>Paid (IDR)</td>
      <td>:</td>
      <td><input type="number" name="paid" min="0" placeholder="100000" required /></td>
    </tr>
    <tr>
      <td>The Remaining Pay (IDR)</td>
      <td>:</td>
      <td><input type="number" name="remaining-pay" min="0" placeholder="u must fill out" /></td>
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
