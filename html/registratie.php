<!DOCTYPE html>
<html lang="en"> 
<head>

	<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Registreren</title>
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
        
        <!-- Rubriekenbalk + advertenties middenscherm
        ==================================================== -->
        <div id="content">
     
			<?php include 'registratiepagina.php'; ?>
    </div>


           <!-- Footer 
           ==================================================== -->
           <?php include 'footer.php'; ?>
    </div>
</body>
</html>