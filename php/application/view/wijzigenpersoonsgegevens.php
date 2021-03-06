 <!-- Kopteksten
        ==================================================== -->

 <?php include 'includes/rubriekenMenu.php'; ?>
        
        <!-- Wijzigen persoonsgegevens
        ==================================================== -->
        <div id="content">
            <div class="twelve columns wijzigenPersoonForm">
                
                <div class="one column">&nbsp;</div>
                <div class="six columns formleft">
                    <form name="" method="POST" action="<?php echo SITE_URL ?>account/wijzigenpersoonsgegevens">
                    <?php while( $gebruiker = sqlsrv_fetch_object( $data['gebruikers'] )): ?>
                    <label for='voornaam'>Voornaam</label>
                    <input type='text' name='voornaam' value="<?= $gebruiker->voornaam ?>" maxlength="255"/>

                    <label for='achternaam'>Achternaam</label>
                    <input type='text' name='achternaam' value="<?= $gebruiker->achternaam ?>" maxlength="255"/>

                    <label for='email'>E-mailadres</label>
                    <input type='text' name='email' value="<?= $gebruiker->mailadres ?>" maxlength="255"/>



              
            </div>
                <div class="six columns formright">
                    <label for='adres1'>Adres 1</label>
                    <input type='text' name='adres1' value="<?= $gebruiker->adresregel1 ?>" maxlength="50"/>

                    <label for='adres2'>Adres 2</label>
                    <input type='text' name='adres2' value="<?= $gebruiker->adresregel2 ?>" maxlength="50"/>

                    <label for='postcode'>Postcode</label>
                    <input type='text' name='postcode' class="invoerveld" value="<?= $gebruiker->postcode ?>" maxlength="50"/>

                    <label for='woonplaats'>Woonplaats</label>
                    <input type='text' name='plaats' value="<?= $gebruiker->plaatsnaam ?>" maxlength="50"/>

                    <label for='land'>Land</label>
                    <input type='text' name='land' value="<?= $gebruiker->land ?>" maxlength="50"/>

                <?php endwhile; ?>
                <input type='submit' name='submitPersoonsgegevens' value='Opslaan' class="opslaanbutton"/>
                </div>
                </form>
            </div>