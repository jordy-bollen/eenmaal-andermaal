<?php
$i = 0;
while( $img = sqlsrv_fetch_object( $data['afbeeldingen'] )) {
    $afbeeldingen[$i] = $img;
    $i++;
}
?>
<div class="three columns">
     <h2>Rubrieken</h2>
    <div class="three columns rubriekenmenu">
    <ul>
        <?php while( $obj = sqlsrv_fetch_object( $data['rubrieken'] )): ?>
            <?php if($obj->rubriek == NULL): ?>
                <li><a href="<?= SITE_URL ?>veilingen/<?= $obj->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($obj->rubrieknaam)))) ?>"><?= $obj->rubrieknaam ?></a></li>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>
    </div>
</div>
<?php while( $obj = sqlsrv_fetch_object( $data['voorwerp'] )): ?>
    <div id="content">


            <div id="veiling">
               <div class="thirteen columns">
                <h1><?= $obj->titel ?></h1>
                   <!-- "Linker" gedeelte van detailpagina -->
                  <div class="six columns">
                        <div id="advertentieFotos">
                            <div id="foto1">
                            <img src="<?= SKINS_DIR ?>img/producten/<?= $afbeeldingen[0]->filenaam ?>" width="200" height="200">
                            </div>
                            <div id="fotoklein">
                            <div id="foto2"><img src="<?= SKINS_DIR ?>img/producten/<?= $afbeeldingen[0]->filenaam ?>" width="200" height="200"></div>
                            <div id="foto3"><img src="<?= SKINS_DIR ?>img/producten/<?= $afbeeldingen[0]->filenaam ?>" width="200" height="200"></div>
                            </div>
                         </div>
                        <div id ="countdownTimer">
                            Resterende tijd - <p id="countdownTime"></p>
                        </div>
                        <div id="productOmschrijving">
                            <h2>PRODUCTOMSCHRIJVING</h2>
                            <p><?= $obj->beschrijving ?></p>
                        </div>

                  </div>

                   <!-- "Rechter" gedeelte van detailpagina -->
                   <div id="detailrechts" class="six columns">
                        <div id="gebruikersInfo">
                            <h2>Gebruikersinfo</h2>
                            <p>Verkoper: <?= $obj->verkoper ?></p>
                            <p>Locatie: <?= $obj->plaatsnaam ?></p>
                            <p>Betaalmethode: <?= $obj->betalingswijze ?></p>
                        </div>
                        <div id="biedingen">
                           <h2>Biedingen</h2>
                            <?php if(isset($_SESSION['loggedIn'])): ?>
                           <p>Plaats bod</p>
                           <form id="bod" action="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer ?>-<?= trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>" method="post">
                            <input type="text" name="bodbedrag" id="bod" width="10px">
                               <input type="hidden" name="voorwerp" value="<?= $obj->voorwerpnummer ?>">
                               <input type="hidden" name="verkoper" value="<?= $obj->verkoper ?>">
                            <input type="submit" name="submitBod" value="Bied nu">
                               <?php else: ?>
                               <p>log eerst in om te bieden</p>
                               <?php endif; ?>

                            <table border="1"><thead><tr><td>Gebruiker:</td><td>Bod:</td></tr></thead>
                               <?php while( $bod = sqlsrv_fetch_object( $data['boden'] )): ?>
                            <tr><td><?= $bod->gebruiker ?></td><td><?= $bod->bodbedrag ?></td></tr>
                               <?php endwhile; ?>
                                </table>
                           </form>
                        </div>
                    </div>

               </div>
            </div>
        </div>
<?php
$eindmoment = $obj->eindmoment;
endwhile; ?>
<script type="text/javascript">
    $("#countdownTime")
        .countdown("<?php echo date_format($eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
            $(this).text(
                event.strftime('%D dagen %H:%M:%S')
            );
        });
</script>