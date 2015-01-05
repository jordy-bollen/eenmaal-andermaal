<div class="three columns">
    <h2>Rubrieken</h2>
    <nav class="three columns rubriekenmenu">
        
        <ul id="menu">
            <?php while( $obj = sqlsrv_fetch_object( $data['rubrieken'] )): ?>
            <?php if($obj->rubriek == NULL): ?>
            <a href="<?= SITE_URL ?>veilingen/<?= $obj->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($obj->rubrieknaam)))) ?>">
                <li><?= $obj->rubrieknaam ?>
            </li>    </a>
            <?php endif; ?>
            <?php endwhile; ?>
            
            
        </ul>
    </nav>
</div>