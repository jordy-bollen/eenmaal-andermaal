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
			<?php include 'registratiepagina.php'; ?>
        </div>


           <!-- Footer 
           ==================================================== -->
           <?php include 'footer.php'; ?>
    </div>
</body>
</html>