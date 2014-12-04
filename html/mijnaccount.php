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
        
        <!-- Contact
        ==================================================== -->
        <div id="content">
            <div class="twelve columns main">
                <div class="six columns">
                    <p class="test">Mijn Biedingen: <a href="http://localhost"><button>Go</button></p></a>
                    <p class="test">Mijn Advertenties: <a href="http://localhost"><button>Go</button></p></a>
                    <p class="test">Mijn Verkopers Account Registreren: <a href="http://localhost"><button>Go</button></p></a>
                </div>
            <div class="six columns">
                    <p class="test1">Wijzigen Persoonsgegvens: <a href="http://localhost"><button>Go</button></p></a>
                    <p class="test1">Wijzigen Bankgegevens: <a href="http://localhost"><button>Go</button></p></a>
                    <p class="test1">Wijzigen Wachtwoord en Geheime Vraag: <a href="http://localhost"><button>Go</button></p></a>
            </div>
                
            </div>

           <!-- Footer 
        ==================================================== -->
        <?php include 'footer.php'; ?>
        
    </div>


</body>
</html>