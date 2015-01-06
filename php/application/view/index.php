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
<!-- Menu left
=====================================================
-->
<?php include 'includes/rubriekenMenu.php'; ?>


<!-- content/
==================================================== -->
<div class="thirtheen columns content">


    <h1>Populaire veilingen</h1>

    <?php
    $time = 10; while( $voorwerp = sqlsrv_fetch_object($data['populair'])):
    ?>
    <div class="four columns veiling">
        <h3><a href="<?= SITE_URL ?>producten/<?= $voorwerp->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($voorwerp->titel)))) ?>"><?= $voorwerp->titel ?></a></h3>
        <?php for( $j = 0; $j < count($afbeeldingen); $j++ ):
            if($afbeeldingen[$j]->voorwerp == $voorwerp->voorwerpnummer): ?>
                <img src="<?= SKINS_DIR ?>img/producten/<?php echo $afbeeldingen[$j]->filenaam; ?>">
            <?php endif;
        endfor; ?>
        <div class="veilinglopen">
            <p><strong>Veiling loopt nog:</strong></p><p id="countdownTime<?= $i ?>"></p>
            <p id="countdownTime<?= $time ?>" class="countdownkleur"></p>
        </div>
        <div class="button-bod">
            
        <a href="<?= SITE_URL ?>producten/<?= $voorwerp->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($voorwerp->titel)))) ?>" class="ganaarveilingbutton"> <strong> BIED MEE </strong> </a>
            <p>Hoogte bod: <strong>€800</strong></p>
        </div>
        <script type="text/javascript">
            $("#countdownTime<?= $time ?>")
                .countdown("<?php echo date_format($voorwerp->eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
                    $(this).text(
                        event.strftime('%D dagen %H:%M:%S')
                    );
                });
        </script>
    </div>
    <?php $time++; endwhile; ?>

    <h4 class="thirteen columns">Aflopende veilingen</h4>
    <?php $i = 0; while( $aflopend = sqlsrv_fetch_object($data['aflopend'])):

        ?>
    <div class="four columns veiling">
        <h3><a href="<?= SITE_URL ?>producten/<?= $aflopend->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($aflopend->titel)))) ?>"><?= $aflopend->titel ?></a></h3>
        <?php $stop = false; for( $j = 0; $j < count($afbeeldingen); $j++ ):

            if($afbeeldingen[$j]->voorwerp == $aflopend->voorwerpnummer && $stop == false): ?>
                <img src="<?= SKINS_DIR ?>img/producten/<?php echo $afbeeldingen[$j]->filenaam; ?>">
            <?php $stop = true; endif;
        endfor; ?>
        <div class="veilinglopen">
            <p><strong>Veiling loopt nog:</strong></p><p id="countdownTime<?= $i ?>" class="countdownkleur"></p>
        </div>
        <div class="button-bod">
            
        <a href="<?= SITE_URL ?>producten/<?= $voorwerp->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($voorwerp->titel)))) ?>" class="ganaarveilingbutton"><strong> BIED MEE</strong> </a>
            
        </div>
        <script type="text/javascript">
            $("#countdownTime<?= $i ?>")
                .countdown("<?php echo date_format($aflopend->eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
                    $(this).text(
                        event.strftime('%D dagen %H:%M:%S')
                    );
                });
        </script>
        <?php for( $j = 0; $j < count($hoogstebod); $j++ ):
            if($hoogstebod[$j]->voorwerpnummer == $aflopend->voorwerpnummer): ?>
                <p>Hoogste bod: <strong><?= $hoogstebod[$j]->hoogste ?></strong></p>
            <?php elseif($hoogstebod[$j]->hoogste == NULL): ?>test<?php  endif; endfor; ?>
    </div>
    <?php $i++; endwhile; ?>

</div>

