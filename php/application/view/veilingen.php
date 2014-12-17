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
<?php include 'includes/rubriekenMenu.php'; ?>


<?php if(isset($data['veilingen'])): ?>
<div class="thirtheen columns content">

   <?php if(isset($data['rubriek'])):  while( $rub = sqlsrv_fetch_object( $data['rubriek'] )): ?>
    <h4 class="thirteen columns"><?= $rub->rubrieknaam ?></h4>
    <?php endwhile; else:?>
       <h4 class="thirteen columns">Alle producten</h4>
    <?php endif; ?>
   
    
   
    
    <?php $i = 0; while( $obj = sqlsrv_fetch_object($data['veilingen'])): ?>
        <?php if($obj->veilingGesloten == 'niet'): ?>
    <div class="four columns veiling">
            <h3><a href="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>"><?= $obj->titel ?></a></h3>
            <?php for( $j = 0; $j < count($afbeeldingen); $j++ ):

                 if($afbeeldingen[$j]->voorwerp == $obj->voorwerpnummer): ?>

            <img src="<?= SKINS_DIR ?>img/producten/<?php echo $afbeeldingen[$j]->filenaam; ?>">
                <?php endif;
            endfor; ?>
            <div class="veilinglopen">
                <p id="countdownTime<?= $i ?>"></p>
            </div>
            <script type="text/javascript">
                $("#countdownTime<?= $i ?>")
                    .countdown("<?php echo date_format($obj->eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
                        $(this).text(
                            event.strftime('%D dagen %H:%M:%S')
                        );
                    });
            </script>
            <?php for( $j = 0; $j < count($hoogstebod); $j++ ):
                if($hoogstebod[$j]->voorwerpnummer == $obj->voorwerpnummer): ?>
            <p>Hoogste bod: <strong><?= $hoogstebod[$j]->hoogste ?></strong></p>
            <?php endif; endfor; ?>
        </div>
            <?php endif; ?>
    
    
    
    
    

    <?php $i++; endwhile; ?>
</div>
<?php endif; ?>

