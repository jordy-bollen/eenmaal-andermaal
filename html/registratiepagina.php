<!-- Registratie pagina
==================================================== -->
<div class="thirtheen columns"><h3>Registreren</h3>
    <form id='register' action='' method='post'
    accept-charset='UTF-8'>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div id='registratievelden'>
        <!-- Geslacht: Is alleen mogelijk Dhr. of mevr.
        ==================================================== -->
        <div class="six columns">
            <label for='aanhef' class="three columns">Aanhef*</label>
            <select name="aanhef" class="geslacht">
                <option value="Dhr.">Dhr.</option>
                <option value="Mevr.">Mevr.</option>
            </select>
            <!-- Voornaam, achternaam, gebruikersnaam, e-mailadres, geboortedatum, wachtwoord en bevestig wachtwoord
            ==================================================== -->
            <label for='voornaam' class="three columns">Voornaam* </label>
            <input type='text' name='voornaam' class="invoerveld" maxlength="255"/>

            <label for='achternaam' class="three columns">Achternaam*</label>
            <input type='text' name='achternaam' class="invoerveld" maxlength="255" />

            <label for='gebruikersnaam' class="three columns">Gebruikersnaam*</label>
            <input type='text' name='gebruikersnaam' class="invoerveld" maxlength="50" />

            <label for='email' class="three columns">E-mailadres*</label>
            <input type='text' name='email' class="invoerveld" maxlength="50" />

            <label for='geboortedatum' class="three columns">Geboortedatum*</label>
            <input type='date' name='geboortedatum' class="datum" maxlength="50" />

            <label for='wachtwoord' class="three columns">Wachtwoord*</label>
            <input type='password' name='wachtwoord' class="invoerveld" maxlength="50" />

            <label for='wachtwoord' class="three columns">Bevestig wachtwoord*</label>
            <input type='password' name='wachtwoord' class="invoerveld" maxlength="50" />

            <!-- Geheime vraag: nieuwe gebruiker moet een vraag kiezen
            ==================================================== -->    
            
            <label for='vraag' class="three columns" >Geheime vraag*</label>
            <select name="vraag" class="lengte">
                <option value="vraag1" >Naam eerste huisdier?</option>
            </select>

            <label for='Antwoord' class="three columns">Geheim antwoord*</label>
            <input type='text' name='antwoord' class="invoerveld" maxlength="50" />
        </div>
        <div class="six columns">
            <!-- Persoongegevens
            ==================================================== -->
            <label for='adres1' class="three columns">Adres één*</label>
            <input type='text' name='adres1' class="invoerveld" maxlength="50" />

            <label for='adres2' class="three columns">Adres twee</label>
            <input type='text' name='adres2' class="invoerveld" maxlength="50" />

            <label for='huisnummer' class="three columns">Huisnummer*</label>
            <input type='text' name='huisnummer' class="invoerveld" maxlength="50" />

            <label for='postcode' class="three columns">Postcode*</label>
            <input type='text' name='postcode' class="invoerveld" maxlength="50" />

            <label for='woonplaats' class="three columns">Woonplaats*</label>
            <input type='text' name='plaats' class="invoerveld" maxlength="50" />

            <label for='land' class="three columns">Land*</label>
            <select name="land" class="lengte">
                <option value="nederland">Nederland</option>
                <option value="nederland">Duitsland</option>
                <option value="nederland">Engeland</option>
            </select>

            <label for='telefoonnummer' class="three columns">Telefoonnummer*</label>
            <input type='text' name='telefoonnummer' class="invoerveld" maxlength="50" />

            <label for='mobiel' class="three columns">Mobiel*</label>
            <input type='text' name='mobiel' class="invoerveld" maxlength=""50 />

            <input type='submit' name='submit' value='Registreer' class="registratiebutton"/>
            <p><h5 class="veldenmet">Velden met een * zijn verplicht.</h5><p>
            </div>
        </div>
    </form> 
</div>