<?php include 'includes/rubriekenMenu.php'; ?>
        
        <!-- Mijn account content
        ==================================================== -->
        <div id="content">

            <div class="one column">&nbsp;</div>

            <div class="eleven columns main">
                <?php while( $gebruiker = sqlsrv_fetch_object( $data['gebruiker'] )): ?>
                <h1>Mijn Account</h1>
              <div class="eleven columns accountMenu">
                    <p>- <?= $gebruiker->gebruikersnaam ?></p>
                <?php endwhile; ?>
                <div class="four columns">
                    <p class="mijnaccount">Mijn Biedingen</p>
                    <p class="mijnaccount">Mijn Advertenties</p>
                    <p class="mijnaccount">Mijn Verkopers Account<br>Registreren</p>
                </div>
            
                <div class="one column">
                    <a href="http://localhost/eenmaal-andermaal/html/mijnbiedingen.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/html/mijnadvertenties.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/html/mijnverkopersaccountregistreren.php"><button>Go</button></a>
                </div>
                <div class="one column">&nbsp;</div>
                <div class="four columns">
                    <p>Wijzigen Persoonsgegvens</p>
                    <p>Wijzigen Bankgegevens</p>
                    <p>Wijzigen Wachtwoord en<br>Geheime Vraag</p>
                </div>
                <div class="one column">
                    <a href="http://localhost/eenmaal-andermaal/html/wijzigenpersoonsgegevens.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/html/wijzigenbankgegevens.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/php/wijzigenwachtwoord"><button>Go</button></a>
               </div> 
          </div>
        </div>
    </div>