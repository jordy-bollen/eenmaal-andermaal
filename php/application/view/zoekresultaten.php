<?php
$i = 0;
while( $img = sqlsrv_fetch_object( $data['afbeeldingen'] )) {
    $afbeeldingen[$i] = $img;
    $i++;
}
$i = 0;
while( $hoogsteboden = sqlsrv_fetch_object($data['hoogsteboden'])) {
    $hoogstebod[$i] = $hoogsteboden;
    $i++;
}
?> 

<div class="thirtheen columns content">
<?php while($resultaat = sqlsrv_fetch_object($data['zoekresultaten'])):
    if($resultaat->veilingGesloten == 'niet'):?>
    
   <div class="four columns veiling">
            <h3><a href="<?= SITE_URL ?>producten/<?= $resultaat->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($resultaat->titel)))) ?>"><?= $resultaat->titel ?></a></h3>
            <?php $stop = false; for( $j = 0; $j < count($afbeeldingen); $j++ ):

                 if($afbeeldingen[$j]->voorwerp == $resultaat->voorwerpnummer && $stop == false): ?>

            <img src="<?= SKINS_DIR ?>img/producten/<?php echo $afbeeldingen[$j]->filenaam; ?>">
                <?php $stop = true; endif;
            endfor; ?>
        <div class="veilinglopen">
            <p><strong>Veiling loopt nog:</strong></p><p id="countdownTime<?= $i ?>" class="countdownkleur"></p>
        </div>
        
<!--         <div class="button-bod">
            
   <p class="hoogstebod">Hoogte bod:</br> <strong>€800</strong></p>
        </div> -->

            <script type="text/javascript">
                $("#countdownTime<?= $i ?>")
                    .countdown("<?php echo date_format($resultaat->eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
                        $(this).text(
                            event.strftime('%D dagen %H:%M:%S')
                        );
                    });
            </script>
            
            <div class="two columns hoogsteBod">
            <?php for( $j = 0; $j < count($hoogstebod); $j++ ):
                if($hoogstebod[$j]->voorwerpnummer == $resultaat->voorwerpnummer): ?>
            <p>Hoogste bod: <strong><?= $hoogstebod[$j]->hoogste ?></strong></p>
            <?php endif; endfor; ?>
            </div>
            
             <div class="two columns button-bod">
                <form action="producten/<?= $resultaat->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($resultaat->titel)))) ?>'>">
                    <input type="submit" value="BIED MEE" class="ganaarveilingzoek" >
                </form>
            </div>     
       

            
        </div>
        
    <?php $i++;endif; endwhile; ?>

    
</div>