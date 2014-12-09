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