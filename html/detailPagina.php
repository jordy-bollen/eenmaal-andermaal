<!DOCTYPE html>
<html lang="en"> 
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Detailpagina</title>
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
         <div class="topBalk">
                <div class="eleven columns logo">
                    <img src="images/logo.png">
                </div>
                <div class="five columns login">
                    <form>
                        <label for="regularInput">Gebruikersnaam</label>
                        <input type="text" id="regularInput" />
                        <label for="regularInput">Wachtwoord</label>
                        <input type="password" id="regularInput" />
                        
                        <label for="regularCheckbox">
                            <input type="checkbox" id="regularCheckbox" value="checkbox 1" />
                            <span>Onthoud mij</span>
                            
                            <button>Login</button>
                            
                        </label>
                    </form>
                </div>
                
            </div>
      
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
        
        <!-- Rubriekenbalk + advertenties middenscherm
        ==================================================== -->
        <div id="content">
              
            
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
        
           <!-- Footer 
        ==================================================== -->
         <?php include 'footer.php'; ?>
        
    </div>

</body>
</html>