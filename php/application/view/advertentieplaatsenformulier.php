
<div class="thirtheen columns"><h4>Advertentie plaatsen</h4>
    <form id='plaatsAdvertentie' action='<?php SITE_URL ?>veilingtoevoegen' method='post'
          accept-charset='UTF-8' enctype="multipart/form-data">
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <div id='invulVelden'>
            <div class="six columns">

                <label for='titel' class="three columns">Advertentie titel* </label>
                <input type='text' name='titel' class="invoerveld" maxlength="255"/>

                <input type='hidden' name='rubriek' class="invoerveld" value="<?= $data['rubriek'] ?>" maxlength="255"/>

                <label for='beschrijving' class="three columns">Beschrijving advertentie*</label>
                <textarea form="plaatsAdvertentie" class="resizeTextBox" name="beschrijving"></textarea>

                <label for='startprijs' class="three columns">Startprijs*</label>
                <input type='text' name='startprijs' class="invoerveld" maxlength="50" />

                <label for='plaats' class="three columns">Plaats*</label>
                <input type='text' name='plaatsnaam' class="invoerveld" maxlength="50" />

                <label for='looptijd' class="two column">Looptijd*</label><br>
                <select name="looptijd" class="invoerveld">
                    <option value="1">1 Dag</option>
                    <option value="3">3 Dagen</option>
                    <option value="5">5 Dagen</option>
                    <option value="7" selected="selected">7 Dagen</option>
                    <option value="10">10 Dagen</option>
                </select>

                <label for='betalingswijze' class="two column">Betalingswijze*</label><br>
                <select name="betalingswijze" class="invoerveld">
                    <option value="Contant">Contant</option>
                    <option value="Bankoverschrijving">Bankoverschrijving</option>
                    <option value="Creditcard">Creditcard</option>
                </select>

                <label for='betalingsinstructie' class="two column">Betalingsinstructies*</label><br>
                <input type='text' name='betalingsinstructie' class="invoerveld" maxlength="50" />

                <label for='verzendinstructies' class="two column">Verzendinstructies*</label><br>
                <select name="verzendinstructies" class="invoerveld">
                    <option value="Ophalen">Ophalen</option>
                    <option value="Ophalen of Verzenden">Ophalen of Verzenden</option>
                    <option value="Verzenden">Verzenden</option>
                </select>

                <label for='verzendkosten' class="two column">Verzendkosten*</label><br>
                <input type='text' name='verzendkosten' class="invoerveld" maxlength="50" />

            </div>
            <div class="six columns">
                <label for='afbeeldingen' class="three columns">Afbeeldingen kiezen*</label><br>

                <img id="uploadPreview" style="width: 100px; height: 100px;" />
                <input id="uploadImage" type="file" name="afbeelding0" onchange="PreviewImage();" />

                <img id="uploadPreview" style="width: 100px; height: 100px;" />
                <input id="uploadImage" type="file" name="afbeelding1" onchange="PreviewImage();" />

                <img id="uploadPreview" style="width: 100px; height: 100px;" />
                <input id="uploadImage" type="file" name="afbeelding2" onchange="PreviewImage();" />

                <img id="uploadPreview" style="width: 100px; height: 100px;" />
                <input id="uploadImage" type="file" name="afbeelding3" onchange="PreviewImage();" />

                <script type="text/javascript">

                    function PreviewImage()
                    {
                        var oFReader = new FileReader();
                        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                        oFReader.onload = function (oFREvent)
                        {
                            document.getElementById("uploadPreview").src = oFREvent.target.result;
                        };
                    };

                </script>


                <br><br>
                <input type='submit' name='submitVeiling' value='Advertentie plaatsen' />
            </div>
        </div>
    </form>
</div>