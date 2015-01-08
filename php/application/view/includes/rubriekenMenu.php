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

            <a href="<?= SITE_URL ?>veilingen/<?= $obj->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($obj->rubrieknaam)))) ?>">
                <li><?= $obj->rubrieknaam ?> <ul>


                    <?php for($i = 0; $i < count($sub); $i++):
                        if($sub[$i]->rubriek == $obj->rubrieknummer):
                            ?>
                        <a href="<?= SITE_URL ?>veilingen/<?= $sub[$i]->rubrieknummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "", str_replace(" ","",strtolower($sub[$i]->rubrieknaam)))) ?>"> <li><?= $sub[$i]->rubrieknaam ?></li></a>
                        <?php endif; endfor; ?>

                        </ul>



                        </li>    </a>
            <?php endif; ?>
            <?php endwhile; ?>
            
            
        </ul>
    </nav>
</div>