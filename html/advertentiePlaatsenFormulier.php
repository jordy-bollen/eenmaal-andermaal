            
            <div class="thirtheen columns"><h3>Advertentie plaatsen</h3>
                <form id='plaatsAdvertentie' action='' method='post'
                accept-charset='UTF-8'>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div id='invulVelden'>
                <div class="six columns">

                    <label for='titel' class="three columns">Advertentie titel* </label>
                    <input type='text' name='voornaam' class="invoerveld" maxlength="255"/> 

                    <label for='rubriek' class="two column">Rubriek*</label><br>
                    <select name="rubriek" class="invoerveld">
                        <option value="Rubriek1">Rubriek1</option>
                        <option value="Rubriek2">Rubriek2</option>
                    </select>
                    
                    <label for='subrubriek' class="two column">Sub-Rubriek*</label><br>
                    <select name="subrubriek" class="invoerveld">
                        <option value="subRubriek1">subRubriek1</option>
                        <option value="subRubriek2">subRubriek2</option>
                    </select>
                    
                    <label for='beschrijving' class="three columns">Beschrijving advertentie*</label>
                    <textarea form="plaatsAdvertentie" class="resizeTextBox" name="beschrijving"></textarea>

                    <label for='startprijs' class="three columns">Startprijs*</label>
                    <input type='text' name='startprijs' class="invoerveld" maxlength="50" />

                    <label for='looptijd' class="two column">Looptijd*</label><br>
                    <select name="looptijd" class="invoerveld">
                        <option value="1 Dag">1 Dag</option>
                        <option value="3 Dagen">3 Dagen</option> 
                        <option value="5 Dagen">5 Dagen</option>
                        <option value="7 Dagen">7 Dagen</option>
                        <option value="10 Dagen">10 Dagen</option>
                    </select>
                    
                    <label for='betalingswijze' class="two column">Betalingswijze*</label><br>
                    <select name="betalingswijze" class="invoerveld">
                        <option value="Contant">Contant</option>
                        <option value="Bankoverschrijving">Bankoverschrijving</option> 
                        <option value="Creditcard">Creditcard</option>
                    </select>

                </div>
                <div class="six columns">
                    <label for='afbeeldingen' class="three columns">Afbeeldingen kiezen*</label><br>
                 
                    <img id="uploadPreview" style="width: 100px; height: 100px;" />
                    <input id="uploadImage" type="file" name="afbeelding1" onchange="PreviewImage();" />
                    
                    <img id="uploadPreview" style="width: 100px; height: 100px;" />
                    <input id="uploadImage" type="file" name="afbeelding2" onchange="PreviewImage();" />
                   
                    <img id="uploadPreview" style="width: 100px; height: 100px;" />
                    <input id="uploadImage" type="file" name="afbeelding3" onchange="PreviewImage();" />
                    
                    <img id="uploadPreview" style="width: 100px; height: 100px;" />
                    <input id="uploadImage" type="file" name="afbeelding4" onchange="PreviewImage();" />
                    
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
                    <input type='submit' name='submit' value='Advertentie plaatsen' />
                </div>
                </div>
            </form> 
        </div>