<?php while( $obj = sqlsrv_fetch_object( $data['voorwerp'] )): ?>
    <div id="content">


            <div id="veiling">
               <div class="thirteen columns">
                <h1><?= $obj->titel ?></h1>
                   <!-- "Linker" gedeelte van detailpagina -->
                  <div class="six columns">
                        <div id="advertentieFotos">
                            <img src="images/advertentieFotos.jpg">
                         </div>
                        <div id ="countdownTimer">
                            <p>RESTERENDE TIJD -
                                <?php
                                $date1 = date("Y-m-d H:i:s");
                                $date1 = new DateTime($date1);
                                $date2 = $obj->eindmoment;
                                $interval = $date2->diff($date1);
                                echo $interval->d." dagen, ".$interval->h. " uren, ".$interval->i." minuten, ".$interval->s." seconden";
                                ?>
                            </p>
                        </div>
                        <div id ="productOmschrijving">
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
                           <p>Plaats bod</p>
                           <form action="" method="post">
                            <input type="text" name="bod" id="bod" width="10px">
                            <input type="submit" value="Bied nu">
                               <hr>
                            <p>Gebruiker:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bod:</p>
                               <hr>
                            <p>Sjonnie55&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$500</p>
                            <p>Sjonnie55&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$500</p>
                            <p>Sjonnie55&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$500</p>
                           </form>
                        </div>
                    </div>

               </div>
            </div>
        </div>
<?php endwhile; ?>