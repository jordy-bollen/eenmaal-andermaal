<!DOCTYPE html>
<html lang="en"> 
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
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
                <p>PRODUCT TITEL</p>
            </div>
        </div>
        
        <!-- Rubriekenbalk + advertenties middenscherm
        ==================================================== -->
        <div id="content">
              <?php include 'rubriekenbalk.php'; ?> 
            
            <div id="veiling">
               <div class="thirteen columns">
                  
                   <!-- "Linker" gedeelte van detailpagina -->
                  <div class="six columns">
                        <div id="advertentieFotos">
                            <img src="images/advertentieFotos.jpg">
                         </div>
                        <div id ="countdownTimer">  
                            <p>RESTERENDE TIJD - 14uur 20min 15s</p>
                        </div>
                        <div id ="productOmschrijving">  
                            <p>PRODUCTOMSCHRIJVING</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis nulla turpis, sagittis pulvinar justo congue id. Duis ac dolor eu eros                                      dapibus consequat nec in purus. Donec sed erat molestie, scelerisque leo eget, laoreet lorem. Sed non est vestibulum, congue enim eu, aliquam eros.                                Pellentesque condimentum dapibus libero, a ullamcorper felis finibus eget. Quisque commodo sapien lacus, ac efficitur sem efficitur vel.                                       </p>
                        </div>
                        
                  </div>
                 
                   <!-- "Rechter" gedeelte van detailpagina -->
                   <div class="six columns"> 
                        <div id="gebruikersInfo">
                            <img src="images/verkoperInfo.png">
                        </div> 
                        <div id="biedingen">
                           <p>Biedingen</p>
                            <p1>Plaats bod</p1>
                            
                        </div>
                    </div> 
                   
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