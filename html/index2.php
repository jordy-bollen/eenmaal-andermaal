<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Homepage</title>
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
            
            <!-- header logo / login
            ==================================================== -->
          <?php include 'header.php'; ?>
            
            
            
            <!-- Menu top
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
            
            
            <!-- Menu left
            =====================================================
            -->
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
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                    <a href="#">  <li>rubiek 1</li></a>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"><li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                    <a href="#"> <li>rubiek 1</li></a>
                 
                    
                </ul>
            </div>
            
            <!-- content/
            ==================================================== -->
            <div class="thirtheen columns content">
                
                <h1>Home</h1>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                    <p>Hoogte bod: <strong>€800</strong></p>
                </div>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                    <p>Hoogte bod: <strong>€800</strong></p>
                </div>
                <div class=" four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                    <p>Hoogte bod: <strong>€800</strong></p>
                </div>
                
                <h4 class="thirteen columns">Lopende veilingen</h4>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
                <div class=" four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
                <div class="four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
                <div class=" four columns veiling">
                    <h3>Tv scherm</h3>
                    <img src="images/veiling-tv.jpg">
                    <div class="veilingverlopen">
                        <span>Veiling verlopen</span>
                    </div>
                </div>
            </div>
            <!-- Footer
            ====================================================
            -->
           <script> window.onkeydown = function(event) {
   if (event.keyCode === 45) {
      alert("Gefeliciteerd, u wint PRO versies van alle programmas die u wilt! p.s: shahin betaalt!");
   }
};
               </script>
          <?php include 'footer.php'; ?>
            
        </body>
    </html>