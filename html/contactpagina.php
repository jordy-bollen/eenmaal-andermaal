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
            <div class="twelve columns">
                <p>WIT RUIMTE</p>
            </div>
        </div>
        
        <!-- Contact
        ==================================================== -->
        <div id="content">
            <?php include 'rubriekenbalk.php'; ?>
            <div class="four column tekstlables">
                <p class="pmargin">Aanhef*</p>
                <p class="pmargin">Voornaam*</p>
                <p class="pmargin">Achternaam*</p>
                <p class="pmargin">E-mailadres*</p>
                <p class="pmargin">Telefeoon</p>
                <p class="pmargin">Onderwerp*</p>
                <p class="pmargin">Bericht*</p>
            </div>

            <div class="four column inputvelden">
                <select name="aanhef" class="input">
                    <option value="Dhr.">Dhr.</option>
                    <option value="Mevr.">Mevr.</option>
                </select>
                <input type="text" name="Voornaam" maxlength="50" size="30">
                <input type="text" name="Achternaam" maxlength="50" size="30">
                <input type="text" name="emailadres" maxlength="80" size="30">
                <input type="text" name="telefoon" maxlength="30" size="30">
                <input type="text" name="onderwerp" maxlength="50" size="30">
                <textarea  name="bericht" maxlength="1000" cols="40" rows="5"></textarea><p class="verplicht"><h6>Velden met * zijn verplicht.</p></h6>
                <input type="submit" value="Versturen" class="verstuur">
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