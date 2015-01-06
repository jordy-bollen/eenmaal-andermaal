<!-- Kopteksten
       ==================================================== -->
<?php include 'includes/rubriekenMenu.php'; ?>

<!-- Mijn biedingen
==================================================== -->
<div id="content">
    <h1 class="thirteen columns">Mijn Advertenties</h1>
    <div class="eleven columns">
        <table id="bodoverzicht"><thead><td>voorwerp</td><td>hoogste Bod</td></thead>
            <?php
            while( $voorwerp = sqlsrv_fetch_object( $data['voorwerpen'] )) {

                        echo '<tr><td>'.$voorwerp->titel.'</td></tr>';

            } ?></table>
    </div>
</div>