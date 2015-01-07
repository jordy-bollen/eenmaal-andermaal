<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php';
$i = 0;
while( $voorwerp = sqlsrv_fetch_object( $data['voorwerpen'] )) {
    $voorwerpen[$i] = $voorwerp;
    $i++;
}
?>

<!-- Mijn biedingen
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Mijn biedingen</h1>
    <div class="eleven columns">
        <table id="bodoverzicht"><thead><td>voorwerp</td><td>bedrag</td></thead>
    <?php
while( $bod = sqlsrv_fetch_object( $data['boden'] )) {
    for( $i = 0; $i < count($voorwerpen); $i++ ) {
        if($voorwerpen[$i]->voorwerpnummer == $bod->voorwerp) {
    echo '<tr><td><a href="'.SITE_URL ?>producten/<?= $voorwerpen[$i]->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($voorwerpen[$i]->titel)))).'">'.$voorwerpen[$i]->titel.'</a></td><td>' .$bod->bodbedrag . '</tr>';
        }
    }
} ?></table>    </div>
</div>