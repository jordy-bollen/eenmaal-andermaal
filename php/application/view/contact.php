<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php'; ?>

<!-- Contact
==================================================== -->
<div id="content">
    <h2>Contact</h2>
    <div class="four column tekstlables">
        <p class="pmargin">Aanhef*</p>
        <p class="pmargin">Voornaam*</p>
        <p class="pmargin">Achternaam*</p>
        <p class="pmargin">E-mailadres*</p>
        <p class="pmargin">Telefeoon</p>
        <p class="pmargin">Onderwerp*</p>
        <p class="pmargin">Bericht*</p>
    </div>

    <div class="four column inputvelden">
        <select name="aanhef" class="input">
            <option value="Dhr.">Dhr.</option>
            <option value="Mevr.">Mevr.</option>
        </select>
        <input type="text" name="Voornaam" maxlength="50" size="30">
        <input type="text" name="Achternaam" maxlength="50" size="30">
        <input type="text" name="emailadres" maxlength="80" size="30">
        <input type="text" name="telefoon" maxlength="30" size="30">
        <input type="text" name="onderwerp" maxlength="50" size="30">
        <textarea  name="bericht" maxlength="1000" cols="40" rows="5"></textarea><p class="verplicht"><h6>Velden met * zijn verplicht.</p></h6>
        <input type="submit" value="Versturen" class="verstuur">
    </div>
