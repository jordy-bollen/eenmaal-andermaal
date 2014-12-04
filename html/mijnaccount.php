<!DOCTYPE html>
<html lang="en"> 

    <!-- Basic Page Needs
  ================================================== -->
    <?php include 'headTag.php'; ?>
    
<body>
 
	<div class="container">
      
        <!-- Bovenste balk: logo, headerplaatje en inlogmenu 
        ==================================================== -->
        <?php include 'header.php'; ?>
      
        <!-- Menu balk: menu met knoppen
        ==================================================== -->
       <?php include 'menubalk.php'; ?>
        
         <!-- Zoekbalk 
        ==================================================== -->
         <?php include 'zoekbalk.php'; ?>
        
         <!-- Kopteksten 
        ==================================================== -->
         <h2>Rubrieken</h2>
            <div class="three columns rubriekenmenu">
                <ul>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                </ul>
            </div>
        
        <!-- Contact
        ==================================================== -->
        <div id="content">
        <h1>Mijn Account</h1>           
            <div class="one column">&nbsp;</div>
            <div class="eleven columns main">
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
                <div class="five columns">
                    <p>Wijzigen Persoonsgegvens</p>
                    <p>Wijzigen Bankgegevens</p>
                    <p>Wijzigen Wachtwoord en<br>Geheime Vraag</p>
                </div>
                <div class="one column">
                    <a href="http://localhost/eenmaal-andermaal/html/wijzigenpersoonsgegevens.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/html/wijzigenbankgegevens.php"><button>Go</button></a>
                    <a href="http://localhost/eenmaal-andermaal/html/wijzigenwachtwoordengeheimevraag"><button>Go</button></a>
               </div> 
            </div>
           <!-- Footer 
        ==================================================== -->
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>