 <!-- Kopteksten
        ==================================================== -->
         <h2>Rubrieken</h2>
            <div class="three columns rubriekenmenu">
                <ul>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                </ul>
            </div>
        
        <!-- Wijzigen persoonsgegevens
        ==================================================== -->
        <div id="content">
            <div class="twelve columns">
                <h1>Wijzigen Persoonsgegevens</h1>
                <div class="one column">&nbsp;</div>
                <div class="six columns">
                    <?php while( $gebruiker = sqlsrv_fetch_object( $data['gebruikers'] )): ?>
                    <label for='voornaam'>Voornaam</label>
                    <input type='text' name='voornaam' value="<?= $gebruiker->voornaam ?>" maxlength="255"/>

                    <label for='achternaam'>Achternaam</label>
                    <input type='text' name='achternaam' value="<?= $gebruiker->achternaam ?>" maxlength="255"/>

                    <label for='email'>E-mailadres</label>
                    <input type='text' name='email' value="<?= $gebruiker->mailadres ?>" maxlength="255"/>

                    <label for='telefoonnummer1'>Telefoonnummer 1</label>
                    <input type='text' name='telefoonnummer1' maxlegnth="255"/>

                    <label for='telefoonnummer2'>Telefoonnummer 2</label>
                    <input type='text' name='telefoonnummer2' maxlegnth="255"/>
              
            </div>
                    <label for='adres1'>Adres 1</label>
                    <input type='text' name='adres1' maxlength="50"/>

                    <label for='adres2'>Adres 2</label>
                    <input type='text' name='adres1' maxlength="50"/>

                    <label for='postcode'>Postcode</label>
                    <input type='text' name='postcode' class="invoerveld" maxlength="50"/>

                    <label for='woonplaats'>Woonplaats</label>
                    <input type='text' name='plaats' maxlength="50"/>

                    <label for='land'>Land</label>
                    <input type='text' name='plaats' maxlength="50"/>
                    <div "">
                    <input type='submit' name='submit' value='Opslaan' class="opslaanbutton"/>
                <?php endwhile; ?>
                </div>
            </div>