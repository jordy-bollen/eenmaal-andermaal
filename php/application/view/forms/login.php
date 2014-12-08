<form id='register' action='<?php echo SITE_URL ?>login' method='post'
      accept-charset='UTF-8'>

    <label for='voornaam' >Gebruikersnaam*: </label>
    <input type='text' name='gebruikersnaam' id='voornaam' maxlength="255" /><br />

    <label for='achternaam' >Wachtwoord*:</label>
    <input type='text' name='wachtwoord' id='wachtwoord' maxlength="255" /><br />
    <input type='submit' name='submit' value='Submit' />
</form>