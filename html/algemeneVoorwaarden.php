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
        
        <!-- Rubriekenbalk + Algemene voorwaarden etc.
        ==================================================== -->
        <div id="content">
             
             <div class="thirtheen columns"><h3>Algemene Gebruiksvoorwaarden</h3>
                 <div id="voorwaardenKlein">
                 <div class="six columns">
                    <div id="voorwaarden1">
                        <strong>I. Algemene Gebruiksvoorwaarden</strong><br>
                         Het is voor iedereen mogelijk om eenvoudig en snel gebruik te maken van EenmaalAndermaal. Wij hebben daarvoor duidelijke spelregels opgesteld. Dit betekent dat                          de EenmaalAndermaal Gebruiksvoorwaarden op u van toepassing zijn door het bezoeken van onze website. We raden u dan ook aan om deze Gebruiksvoorwaarden                                  regelmatig door te lezen.<br>
                        <button href="#algemeen">Lees meer</button>
                    </div><br>
                    <div id="voorwaarden3">
                        <strong>III. Aanvullende regels voor bepaalde categorieën</strong><br>
                         Voor sommige categorieën op EenmaalAndermaal gelden naast de Gebruiksvoorwaarden, aanvullende regels. Deze aanvullende regels worden apart gemeld op het moment                          dat u een dienst afneemt waarop deze aanvullende gebruiksvoorwaarden van toepassing zijn. Op de volgende categorieën zijn aanvullende regels van                                    toepassing: Diensten en Vakmensen Auto's Betaalde Advertenties EenmaalAndermaal Klussen<br>
                        <button href="#regelsCatogorieen">Lees meer</button>
                    </div>  
                 </div>
                 
                 <div class="seven columns">
                    <div id="voorwaarden2">
                        <strong>II. Regels voor het plaatsen van advertenties</strong><br>
                         Om onze site zo schoon en overzichtelijk mogelijk te houden, heeft EenmaalAndermaal regels opgesteld voor het plaatsen van een advertentie. U kunt deze regels                          raadplegen door te drukken op onderstaande onderwerpen:  Algemene regels voor het plaatsen van een advertentie op                            website Het plaatsen van een Advertentie 
                         Regels voor het aanbieden van de prijs/betaalmethoden in een Advertentie Melden van illegale of inbreukmakende Advertenties op EenmaalAndermaal.<br>
                        <button href="#regelsPlaatsen">Lees meer</button>
                    </div>
                 </div>
                     </div>
                 <br>
                 <br>
                 <hr>
                 <br>
                 
                 <!-- TXT.php files zijn grote lappen tekst, vandaar dat ze extern opgeslagen zijn -->
                 <div class="twelve columns">
                    <?php include 'AlgemeneVoorwaardenTXT.php'; ?>
                     <br>
                     <hr>
                     <br>
                    <?php include 'RegelsPlaatsenTXT.php'; ?>
                     <br>
                     <hr>
                     <br>
                    <?php include 'RegelsCategorieenTXT.php'; ?>
                 </div>
             </div>
        
        </div>
        
           <!-- Footer 
        ==================================================== -->
           <?php include 'footer.php'; ?>
        
    </div>

</body>
</html>