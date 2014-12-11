<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php'; ?>

<!-- Feedback geven
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Feedback geven</h1>
    <div class="eleven columns">
            <p class="feedbackgeven">Feedback geven aan [Gebruiker]</p>
            <p class="feedbackgeven">Voorwerp: [Voorwerp nummer]</p>  
        </div>
    <div class="four column tekstlables">
        <p class="pmargin">Beoordeling:</p>
        <p class="pmargin">Commentaar:</p>
    </div>

    <div class="six column inputvelden">
        <select name="beoordeling" class="beoordelinginput">
            <option value="negatief">Negatief</option>
            <option value="neutraal">Neutraal</option>
            <option value="positief">Positief</option>
        </select>
            <textarea name="bericht" maxlength="1000" rows="8" class="commentaarveldlanger"></textarea>
            <input type="submit" value="Verzenden" class="verstuur">
    </div>
