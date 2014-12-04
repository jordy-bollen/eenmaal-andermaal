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
    <link rel="stylesheet" type="text/css" href="<?= SKINS_DIR ?>css/base.css">
    <link rel="stylesheet" type="text/css" href="<?= SKINS_DIR ?>css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="<?= SKINS_DIR ?>css/layout.css">
    <link rel="stylesheet" type="text/css" href="<?= SKINS_DIR ?>css/style.css">
    <!-- Favicons
    ================================================== -->
</head>
<body>

<div class="container">

    <!-- header logo / login
    ==================================================== -->
    <div class="topBalk">
        <div class="eleven columns logo">
            <img src="<?= SKINS_DIR ?>img/logo.png">
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
