
<!-- Menu left
=====================================================
-->
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


<!-- content/
==================================================== -->
<div class="thirtheen columns content">
<<<<<<< HEAD

    <h1>Populaire veilingen</h1>
=======
    
    <h1>Home</h1>
>>>>>>> de6e3f915b9af4fde7bacbd803fabb2b4603a8d4
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>
    <div class=" four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
        <p>Hoogte bod: <strong>€800</strong></p>
    </div>

    <h4 class="thirteen columns">Aflopende veilingen</h4>
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
    <div class=" four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
    <div class="four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
    <div class=" four columns veiling">
        <h3>Tv scherm</h3>
        <img src="images/veiling-tv.jpg">
        <div class="veilingverlopen">
            <span>Veiling verlopen</span>
        </div>
    </div>
</div>

