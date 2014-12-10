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
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>




    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>
    <div class=" four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>

    <h4 class="thirteen columns">Aflopende veilingen</h4>
    <?php $i = 0; while( $aflopend = sqlsrv_fetch_object($data['aflopend'])):
        ?>
    <div class="four columns veiling">
        <h3><?= $aflopend->titel ?></h3>
        <?php for( $j = 0; $j < count($afbeeldingen); $j++ ):
            if($afbeeldingen[$j]->voorwerp == $aflopend->voorwerpnummer): ?>
                <img src="<?= SKINS_DIR ?>img/producten/<?php echo $afbeeldingen[$j]->filenaam; ?>">
            <?php endif;
        endfor; ?>
        <div class="veilinglopen">
            <p id="countdownTime<?= $i ?>"></p>
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

