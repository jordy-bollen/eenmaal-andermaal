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