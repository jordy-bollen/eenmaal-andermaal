<?php include 'includes/rubriekenMenu.php'; ?>
<div id="content">
    <!-- Wijzigen wachtwoord / Geheime vraag
 ==================================================== -->
    <div class="thirtheen columns">
        <form id='register' action='<?php SITE_URL ?>registreren' method='POST'
              accept-charset='UTF-8'>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <div id='registratievelden'>
                <h1>Wijzigen wachtwoord / Geheime vraag</h1>
                <div class="six columns">
                    <!-- Wachtwoord wijzigen
                    ==================================================== -->
                    <h2>Wijzigen wachtwoord</h2>
                    <label for='huidigwachtwoord' class="three columns">Huidig wachtwoord </label></br>
                    <input type='text' name='huidigwachtwoord' class="invoerveld" maxlength="255"/>

                    <label for='nieuwewachtwoord' class="three columns">Nieuwe wachtwoord</label></br>
                    <input type='text' name='nieuwewachtwoord' class="invoerveld" maxlength="255"/>

                    <label for='wachtwoord' class="three columns">Bevestig wachtwoord</label></br>
                    <input id="wachtwoordbev" type='password' name='wachtwoordbev' class="invoerveld" maxlength="50" />

                <input id="submitRegistratie" type='submit' name='submitRegistratie' value='Opslaan'/>
                </div>
                <div class="six columns">
                    <!-- Geheime vraag wijzigen
                    ==================================================== -->
                    <h2>Geheime vraag wijzigen</h2>
                    <label for='geheimevraag' class="three columns">Geheime vraag</label></br>
                    <input type='text' name='geheimevraag' class="invoerveld" maxlength="255"/>

                    <label for='antwoordgeheimevraag' class="three columns">Antwoord geheime vraag</label></br></br>
                    <input type='text' name='antwoordgeheimevraag' class="invoerveld" maxlength="255"/>

                    <label for='vraag' class="three columns" >Nieuwe geheime vraag</label></br></br>
                    <select name="vraag" class="lengte">
                        <?php while( $obj = sqlsrv_fetch_object( $data['vragen'] )): ?>
                        <option value="<?= $obj->vraagnummer ?>" ><?= $obj->tekstVraag ?></option>
                        <?php endwhile; ?>
                    </select>

                    <label for='Antwoordnieuwevraag' class="three columns">Antwoord nieuwe vraag</label></br></br>
                    <input type='text' name='Antwoordnieuwevraag' class="invoerveld" maxlength="255"/>

                    <input id="submitRegistratie" type='submit' name='submitRegistratie' value='Opslaan'/>

                </div>
            </div>
        </form>
    </div>
</div>