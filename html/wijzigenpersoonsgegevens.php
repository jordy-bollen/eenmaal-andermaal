<!DOCTYPE html>
<html lang="en"> 
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Contact</title>
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
        <?php include 'header.php'; ?>
      
        <!-- Menu balk: menu met knoppen
        ==================================================== -->
         <div class="sixteen columns menubalk">
                <a href="/eenmaal-andermaal/html/index2.php">Home</a>
                <a href="/pagina">Veilingen</a>
                <a href="/eenmaal-andermaal/html/registratie.php">Registreren</a>
                <a href="/eenmaal-andermaal/html/algemeneVoorwaarden.php">Algemene voorwaarden</a>
                <a href="/eenmaal-andermaal/html/contactpagina.php">Contact</a>
            </div>
        
         <!-- Zoekbalk 
        ==================================================== -->
        <div class="nine columns ">
                <p>Witruimte -> e.v.t breadcrumbs?</p>
            </div>
            <div class="seven columns zoeken">
                <form>
                    <input type="text" class="zoekveld"></input>
                    <button class="zoekknop">ZOEK</button>
                </form>
            </div>
        
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
        
        <!-- Wijzigen persoonsgegevens
        ==================================================== -->
        <div id="content">
            <div class="twelve columns">
                <h1>Wijzigen Persoonsgegevens</h1>
                <div class="one column">&nbsp;</div>
                <div class="six columns">
                    <label for='voornaam'>Voornaam</label>
                    <input type='text' name='voornaam' maxlength="255"/>

                    <label for='achternaam'>Achternaam</label>
                    <input type='text' name='achternaam' maxlength="255"/>

                    <label for='email'>E-mailadres</label>
                    <input type='text' name='email' maxlength="255"/>

                    <label for='telefoonnummer1'>Telefoonnummer 1</label>
                    <input type='text' name='telefoonnummer1' maxlegnth="255"/>

                    <label for='telefoonnummer2'>Telefoonnummer 2</label>
                    <input type='text' name='telefoonnummer2' maxlegnth="255"/>
              
            </div>
                    <label for='adres1'>Adres 1</label>
                    <input type='text' name='adres1' maxlength="50"/>

                    <label for='adres2'>Adres 2</label>
                    <input type='text' name='adres1' maxlength="50"/>

                    <label for='postcode'>Postcode</label>
                    <input type='text' name='postcode' class="invoerveld" maxlength="50"/>

                    <label for='woonplaats'>Woonplaats</label>
                    <input type='text' name='plaats' maxlength="50"/>

                    <label for='land'>Land</label>
                    <input type='text' name='plaats' maxlength="50"/>
                    <div "">
                    <input type='submit' name='submit' value='Opslaan' class="opslaanbutton"/>    
                </div>
            </div>
           <!-- Footer 
        ==================================================== -->
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>