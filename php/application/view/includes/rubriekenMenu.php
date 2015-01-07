
<?php
$i = 0;
while( $rub = sqlsrv_fetch_object( $data['rubrieken2'] )) {
    $sub[$i] = $rub;
    $i++;
}
?>
<div class="three columns">
    <h2>Rubrieken</h2>
    <nav class="three columns rubriekenmenu">
        
        <ul id="menu">
            <?php while( $obj = sqlsrv_fetch_object( $data['rubrieken'] )):  ?>
            <?php if($obj->rubriek == NULL): ?>
        
             <li class="menuitem">
                 <a href="<?= SITE_URL ?>veilingen/<?= $obj->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($obj->rubrieknaam)))) ?>">
              
                    <?= $obj->rubrieknaam ?> 
                    
                    <ul class="sub-ul">
                        <a href="/" class="sub-a"> 
                            <li class="sub-li">test</li>
                        </a>
                    </ul>

                </li>
            </a>
            <?php endif; ?>
            <?php endwhile; ?>

        </ul>
    </nav>
</div>



