<div id="content">
    <!-- Registratie pagina
 ==================================================== -->
    <div class="thirtheen columns">
        <form id='register' action='<?php SITE_URL ?>registreren' method='POST'
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
                    <input type='text' name='email' class="invoerveld" value="<?php echo $_POST['email'] ?>" maxlength="50" />

                    <label for='geboortedatum' class="three columns">Geboortedatum*</label>
                    <input type='text' name='geboortedatum' class="datum "id="datepicker"  maxlength="50" />

                    <label for='wachtwoord' class="three columns">Wachtwoord*</label>
                    <input id="wachtwoord" type='password' name='wachtwoord' class="invoerveld" maxlength="50" />

                    <label for='wachtwoord' class="three columns">Bevestig wachtwoord*</label>
                    <input id="wachtwoordbev" type='password' name='wachtwoordbev' class="invoerveld" maxlength="50" />

                    <!-- Geheime vraag: nieuwe gebruiker moet een vraag kiezen
                    ==================================================== -->

                    <label for='vraag' class="three columns" >Geheime vraag*</label>
                    <select name="vraag" class="lengte">
                        <?php while( $obj = sqlsrv_fetch_object( $data['vragen'] )): ?>
                        <option value="<?= $obj->vraagnummer ?>" ><?= $obj->tekstVraag ?></option>
                        <?php endwhile; ?>
                    </select>

                    <label for='Antwoord' class="three columns">Geheim antwoord*</label>
                    <input type='password' name='antwoord' class="invoerveld" maxlength="50" />
                </div>
                <div class="six columns">
                    <!-- Persoongegevens
                    ==================================================== -->
                    <label for='adres1' class="three columns">Adres één*</label>
                    <input type='text' name='adres1' class="invoerveld" maxlength="50" />

                    <label for='adres2' class="three columns">Adres twee</label>
                    <input type='text' name='adres2' class="invoerveld" maxlength="50" />

                    <label for='postcode' class="three columns">Postcode*</label>
                    <input type='text' name='postcode' class="invoerveld" maxlength="50" />

                    <label for='woonplaats' class="three columns">Woonplaats*</label>
                    <input type='text' name='plaats' class="invoerveld" maxlength="50" />

                    <label for='land' class="three columns">Land*</label>
                    <select name="land" class="lengte">
                        <option value="nederland">Nederland</option>
                        <option value="Duitsland">Duitsland</option>
                        <option value="Engeland">Engeland</option>
                    </select>



                    <div class="input_fields_wrap">
                        <label for='telefoonnummer' class="three columns">Telefoonnummer*</label>
                        <button class="add_field_button">Add More Fields</button>
                        <div><input type="text" name="telefoonnummer[]"></div>
                    </div>


                    <input id="submitRegistratie" type='submit' name='submitRegistratie' value='Registreer' class="registratiebutton"/>
                    <p><h6 class="veldenmet">Velden met een * zijn verplicht.</h6><p>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div><input type="text" name="telefoonnummer[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>