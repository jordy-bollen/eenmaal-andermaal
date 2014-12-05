<?php while( $obj = sqlsrv_fetch_object( $data['voorwerp'] )): ?>
    <div id="content">


            <div id="veiling">
               <div class="thirteen columns">
                <h1><?= $obj->titel ?></h1>
                   <!-- "Linker" gedeelte van detailpagina -->
                  <div class="six columns">
                        <div id="advertentieFotos">
                            <img src="<?= SKINS_DIR ?>img/producten/doelwit.jpg" width="200" height="200">
                         </div>
                        <div id ="countdownTimer">
                            <p>RESTERENDE TIJD -
                                <?php
                                $datetest = new DateTime();
                                $date2 = $obj->eindmoment;
                                $interval = $datetest->diff($date2);
                                echo $interval->d." dagen, ".$interval->h. " uren, ".$interval->i." minuten, ".$interval->s." seconden";
                                ?>
                            </p>
                        </div>
                        <div id="productOmschrijving">
                            <p>PRODUCTOMSCHRIJVING</p>
                            <p><?= $obj->beschrijving ?></p>
                        </div>

                  </div>

                   <!-- "Rechter" gedeelte van detailpagina -->
                   <div class="six columns">
                        <div id="gebruikersInfo">
                            <img src="images/verkoperInfo.png">
                        </div>
                        <div id="biedingen">
                           <p>Biedingen</p>
                            <?php if(isset($_SESSION['loggedIn'])): ?>
                           <p>Plaats bod</p>
                           <form id="bod" action="<?= SITE_URL ?>producten/<?= $obj->voorwerpnummer ?>-<?= trim( preg_replace( "/[^0-9a-z]+/i", "",str_replace(" ","-",strtolower($obj->titel)))) ?>" method="post">
                            <input type="text" name="bodbedrag" id="bod" width="10px">
                               <input type="hidden" name="voorwerp" value="<?= $obj->voorwerpnummer ?>">
                            <input type="submit" name="submitBod" value="Bied nu">
                               <?php else: ?>
                               <p>log eerst in om te bieden</p>
                               <?php endif; ?>
                               <hr>
                            <p>Gebruiker:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bod:</p>
                               <hr>
                               <?php while( $bod = sqlsrv_fetch_object( $data['boden'] )): ?>
                            <p><?= $bod->gebruiker ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $bod->bodbedrag ?></p>
                               <?php endwhile; ?>
                           </form>
                        </div>
                    </div>

               </div>
            </div>
        </div>
<?php endwhile; ?>