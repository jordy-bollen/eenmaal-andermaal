<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php';
$i = 0;
while( $bod = sqlsrv_fetch_object( $data['boden'] )) {
    $bodbedragen[$i] = $bod;
    $i++;
}
?>

<!-- Mijn biedingen
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Mijn Advertenties</h1>
    <div class="eleven columns">
        <table id="bodoverzicht"><thead><td>voorwerp</td><td>hoogste Bod</td></thead>
            <?php
            while( $voorwerp = sqlsrv_fetch_object( $data['voorwerpen'] )) {
                for($i = 0; $i < count($bodbedragen); $i++) {
                if($bodbedragen[$i]->voorwerp == $voorwerp->voorwerpnummer) {
                        echo '<tr>
                        <td><a href="'.SITE_URL ?>producten/<?= $voorwerp->voorwerpnummer . '-' . trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($voorwerp->titel)))).'">'.$voorwerp->titel.'</a></td>
                        <td>'.$bodbedragen[$i]->bodbedrag.'</td>
                        </tr>';
                }
                }

            } ?></table>
    </div>
</div>