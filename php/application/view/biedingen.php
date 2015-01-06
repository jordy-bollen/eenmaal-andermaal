<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php'; ?>

<!-- Mijn biedingen
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Mijn biedingen</h1>
    <div class="eleven columns">
        <table id="bodoverzicht"><thead><td>voorwerp</td><td>bedrag</td></thead>
    <?php
while( $bod = sqlsrv_fetch_object( $data['boden'] )) {
    while( $voorwerp = sqlsrv_fetch_object( $data['voorwerpen'] )) {
        if($voorwerp->voorwerpnummer == $bod->voorwerp) {
    echo '<tr><td>'.$voorwerp->titel.'</td><td>' .$bod->bodbedrag . '</tr>';
        }
    }
} ?></table>    </div>
</div>