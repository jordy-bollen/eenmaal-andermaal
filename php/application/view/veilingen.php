
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


<?php if(isset($data['veilingen'])): ?>
<div class="thirtheen columns content">
    <h4 class="thirteen columns">Lopende veilingen</h4>
    <?php while( $obj = sqlsrv_fetch_object($data['veilingen'])): ?>
        <div class="four columns veiling">
            <h3><a href="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>"><?= $obj->titel ?></a></h3>
            <img src="images/veiling-tv.jpg">
            <div class="veilingverlopen">
                <span><?= $obj->eindmoment->format('Y-m-d H:i:s'); ?></span>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php endif; ?>

