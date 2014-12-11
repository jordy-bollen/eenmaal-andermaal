<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php'; ?>

<!-- Feedback
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Feedback</h1>
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
            <option value="Onvoldoende">Negatief</option>
            <option value="Voldoende">Neutral</option>
            <option value="Goed">Positief</option>
        </select>
            <textarea name="bericht" maxlength="1000" rows="8" class="commentaarveldlanger"></textarea>
            <input type="submit" value="Verzenden" class="verstuur">
    </div>
