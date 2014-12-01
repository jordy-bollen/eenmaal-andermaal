            
            <div class="twelve columns"><h3>Registreren</h3>
                <form id='register' action='' method='post'
                accept-charset='UTF-8'>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div id='registratievelden'>
                <div class="five columns">
                    <label for='aanhef' class="two column">Aanhef*</label>
                    <select name="aanhef">
                        <option value="Dhr.">Dhr.</option>
                        <option value="Mevr.">Mevr.</option>
                    </select><br />

                    <label for='voornaam' class="two columns">Voornaam* </label>
                    <input type='text' name='voornaam' id='voornaam' maxlength="255"/><br />

                    <label for='achternaam' class="three columns">Achternaam*</label>
                    <input type='text' name='achternaam' id='achternaam' maxlength="255" /><br />

                    <label for='gebruikersnaam' class="three columns">Gebruikersnaam*</label>
                    <input type='text' name='gebruikersnaam' id='gebruikersnaam' maxlength="50" /><br />

                    <label for='email' class="three columns">E-mailadres*</label>
                    <input type='text' name='email' id='email' maxlength="50" /><br />

                    <label for='geboortedatum' class="three columns">Geboortedatum*</label>
                    <input type='date' name='geboortedatum' id='geboortedatum' maxlength="50" /><br />

                    <label for='wachtwoord' class="three columns">Wachtwoord*</label>
                    <input type='password' name='wachtwoord' id='wachtwoord' maxlength="50" /><br />

                    <label for='wachtwoord' class="three columns">Bevestig wachtwoord*</label>
                    <input type='password' name='wachtwoord' id='wachtwoord' maxlength="50" /><br />

                    <label for='vraag' class="three columns">Geheime vraag*</label>
                    <select name="vraag">
                        <option value="vraag1">Naam eerste huisdier?</option>
                    </select><br />

                    <label for='Antwoord' class="three columns">Geheim antwoord*</label>
                    <input type='text' name='antwoord' id='antwoord' maxlength="50" /><br />
                </div>
                <div class="six columns">
                    <label for='straat' class="three columns">Straat*</label>
                    <input type='text' name='straat' id='straat' maxlength="50" /><br />

                    <label for='huisnummer' class="three columns">Huisnummer*</label>
                    <input type='text' name='huisnummer' id='huisnummer' maxlength="50" /><br />

                    <label for='postcode' class="three columns">Postcode*</label>
                    <input type='text' name='postcode' id='postcode' maxlength="50" /><br />

                    <label for='woonplaats' class="three columns">Woonplaats*</label>
                    <input type='text' name='plaats' id='plaats' maxlength="50" /><br />

                    <label for='land' class="three columns">Land*</label>
                    <select name="land">
                        <option value="nederland">Nederland</option>
                        <option value="nederland">Duitsland</option>
                        <option value="nederland">Engeland</option>
                    </select><br />

                    <label for='telefoonnummer' class="three columns">Telefoonnummer*:</label>
                    <input type='text' name='telefoonnummer' id='telefoonnummer' maxlength="50" /><br />


                    <label for='mobiel' classs="three columns">Mobiel*</label>
                    <input type='text' name='mobiel' id='mobiel' maxlength=""50 /><br />

                    <input type='submit' name='submit' value='Account aanmaken' />
                </div>
                </div>
            </form> 
        </div>