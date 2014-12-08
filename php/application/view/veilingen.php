<div class="three columns rubriekenmenu">

<ul>

    <?php while( $obj = sqlsrv_fetch_object( $data['rubrieken'] )): ?>
      <?php if($obj->rubriek == NULL): ?>
      <li><a href="<?= SITE_URL ?>veilingen/<?= $obj->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($obj->rubrieknaam)))) ?>"><?= $obj->rubrieknaam ?></a></li>
         <?php endif; ?>
  <?php endwhile; ?>
</ul>
</div>


<?php if(isset($data['veilingen'])): ?>
<div class="thirtheen columns content">
    <h4 class="thirteen columns">Rubriek producten</h4>
    <?php while( $obj = sqlsrv_fetch_object($data['veilingen'])): ?>
        <?php if($obj->veilingGesloten == 'niet'): ?>
        <div class="four columns veiling">
            <h3><a href="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>"><?= $obj->titel ?></a></h3>
            <img src="images/veiling-tv.jpg">
            <div class="veilingverlopen">
                <p id="countdownTime"></p>
            </div>
            <script type="text/javascript">
                $("#countdownTime")
                    .countdown("<?php echo date_format($obj->eindmoment,'Y-m-d H:m:s'); ?>", function(event) {
                        $(this).text(
                            event.strftime('%D days %H:%M:%S')
                        );
                    });
            </script>
        </div>
            <?php endif; ?>

    <?php endwhile; ?>
</div>
<?php endif; ?>

