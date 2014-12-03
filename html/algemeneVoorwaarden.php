<!DOCTYPE html>
<html lang="en"> 
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Algemene voorwaarden</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
    <link rel="stylesheet" href="stylesheets/style.css">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>
 
	<div class="container">
      
        <!-- Bovenste balk: logo, headerplaatje en inlogmenu 
        ==================================================== -->
        <div id="topBalk">
            <div class="four columns">
                <img src="images/logo2.png">
            </div>
            <div class="ten columns">
                <img src="images/headerImageTest.jpg">
            </div>  
            <div class="two columns">
                <p>HIER KOMT INLOG GEDEELTE -- INLOG INLOG</p>
            </div> 
	   </div>
      
        <!-- Menu balk: menu met knoppen
        ==================================================== -->
       <div id="menuBalk">
            <div class="sixteen columns">
                <p>HIER KOMEN KNOPPEN MENU</p>
            </div>
       </div>
        
         <!-- Zoekbalk 
        ==================================================== -->
        <div id="zoekBalk">
            <div class="nine columns">
                <p>Witruimte -> e.v.t breadcrumbs?</p>
            </div>
            <div class="six columns">
                <p>zoekbalk + knop</p>
            </div>
        </div>
        
         <!-- Kopteksten 
        ==================================================== -->
        <div id="rubriekenKop">
            <div class="three columns">
                <p>Rubrieken</p>
            </div>
            <div class="thirteen columns">
                <p>WIT RUIMTE</p>
            </div>
        </div>
        
        <!-- Rubriekenbalk + Algemene voorwaarden etc.
        ==================================================== -->
        <div id="content">
              <?php include 'rubriekenbalk.php'; ?> 
             <div class="thirtheen columns"><h3>Algemene Gebruiksvoorwaarden</h3>
                 
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
                         Om onze site zo schoon en overzichtelijk mogelijk te houden, heeft EenmaalAndermaal regels opgesteld voor het plaatsen van een advertentie. U kunt deze regels                          raadplegen door het drukken op onderstaande onderwerpen: EenmaalAndermaal is een advertentieplatform Algemene regels voor het plaatsen van een advertentie op                            website Het plaatsen van een Advertentie Ontbindingsrecht Biedingen zijn niet bindend
                         Regels voor het aanbieden van de prijs/betaalmethoden in een Advertentie Melden van illegale of inbreukmakende Advertenties op EenmaalAndermaal Wij geven geen                          garanties Vrijwaring dienst Advertenties en beperking aansprakelijkheid EenmaalAndermaal Wijzigingen De Advertentie kan ook elders gepubliceerd worden<br>
                        <button href="#regelsPlaatsen">Lees meer</button>
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
        <div id="footer">
            <div class="sixteen columns">
            <p>HIER KOMT ALLE FOOTER INFO - CONTACT ETC</p>
            </div>
        </div>
        
    </div>

</body>
</html>