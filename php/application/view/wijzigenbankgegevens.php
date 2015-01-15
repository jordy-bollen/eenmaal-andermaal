<div id="content">
    <div class="twelve columns">
        <h1>Wijzigen Bankgegevens</h1>
        <div class="one column">&nbsp;</div>
        <div class="six columns">
            <form id='bankgegevens' action='<?php SITE_URL ?>wijzigenbank' method='POST'
                  accept-charset='UTF-8'>
            <label for='wachtwoord'>Wachtwoord</label>
            <input type='password' name='wachtwoord' maxlength="255"/>

            <label for='bank'>Bank</label>
            <select name="bank">
                <option value="ABN Amro">ABN Amro</option>
                <option value="ING">ING</option>
                <option value="Rabobank">Rabobank</option>
            </select>

            <label for='rekeningnummer'>Rekeningnummer</label>
            <input type='text' name='rekeningnummer' maxlength="255"/>

            <label for='creditcardnummer'>Creditcardnummer</label>
            <input type='text' name='creditcardnummer' maxlength="255" />

            <input type='submit' name='submitBank' value='Opslaan' />
                </form>
        </div>
    </div>