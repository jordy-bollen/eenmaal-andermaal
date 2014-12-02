<!-- Contact pagina
==================================================== -->
<h3>Contact</h3>
<form name="test" method="post" action="test.php">
<table width="450px">

<tr>
 <td valign="top">
  <label for="aanhef">Aanhef*</label>
</td>
<td valign="top">
  	<select name="aanhef" class="geslacht">
        <option value="Dhr.">Dhr.</option>
    	<option value="Mevr.">Mevr.</option>
  	</select>
  </td>
</tr>

<tr>
 <td valign="top">
  <label for="Voornaam">Voornaam*</label>
 </td>
 <td valign="top">
  <input  type="text" name="Voornaam" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="Achternaam">Achternaam*</label>
 </td>
 <td valign="top">
  <input  type="text" name="Achternaam" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="emaildres">E-mailadres*</label>
 </td>
 <td valign="top">
  <input  type="text" name="emailadres" maxlength="80" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="telefoon">Telefoon</label>
 </td>
 <td valign="top">
  <input  type="text" name="telefoon" maxlength="30" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="onderwerp">Onderwerp*</label>
 </td>
 <td valign="top">
  <input type="text" name="onderwerp" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="bericht">Bericht*</label>
 </td>
 <td valign="top">
  <textarea  name="bericht" maxlength="1000" cols="30" rows="6"></textarea>
 </td>
</tr>

<tr><td></td>
 <td colspan="2" ><p>Velden met * zijn verplicht.</p>
  <input type="submit" value="Versturen">
 </td>
</tr>

</table>
</form>