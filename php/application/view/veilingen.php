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



    
<<<<<<< HEAD
    <?php $i = 0; if(isset($data['veilingen'])): while( $obj = sqlsrv_fetch_object($data['veilingen'])): ?>
=======
    <?php $i = 0; while( $obj = sqlsrv_fetch_object($data['veilingen'])): ?>
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6

    <div class="four columns veiling">
            <h3><a href="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>"><?= $obj->titel ?></a></h3>
            <?php $stop = false; for( $j = 0; $j < count($afbeeldingen); $j++ ):

                 if($afbeeldingen[$j]->voorwerp == $obj->voorwerpnummer && $stop == false): ?>

            <img src="<?= PICS_DIR ?><?php echo $afbeeldingen[$j]->filenaam; ?>">
                <?php $stop = true; endif;
            endfor; ?>
        <div class="veilinglopen">
            <p><strong>Veiling loopt nog:</strong></p><p id="countdownTime<?= $i ?>" class="countdownkleur"></p>
        </div>
                    <div class="button-bod">
            
        <a href="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>" class="ganaarveilingbutton"> <strong> BIED MEE </strong> </a>

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

    
    
    
    
    

    <?php $i++; endwhile; ?>
    <div style="clear:both"></div>
    <div id="pagenav">
        <p class="pagina">pagina:</p> <ul>
<<<<<<< HEAD
    <?php for($i = 1; $i <= $data['aantalpaginas'] && $i < 17; $i++):
=======
    <?php for($i = 1; $i <= $data['aantalpaginas']; $i++):
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6
        if($i == 1):
        ?>
            <li><a href="<?php echo SITE_URL . 'veilingen'; ?>"><?= $i ?></a></li>
            <?php else: ?>
        <li><a href="<?php echo SITE_URL . 'veilingen/' .$i; ?>"><?= $i ?></a></li>
            <?php endif; ?>
    <?php endfor; ?>
    </ul>
    </div>
</div>
<?php endif; else:?>

<?php endif; ?>

