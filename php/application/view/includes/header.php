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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="<?= SKINS_DIR ?>js/jquery.countdown.js"></script>

    <script src="<?= SKINS_DIR ?>js/validate.js"></script>
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
            <?php if(!isset($_SESSION['loggedIn'])): ?>

            <form action="<?php echo SITE_URL ?>login" method="POST">
                <label for="regularInput">Gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" id="regularInput"  value="<?php if (isset($_COOKIE['remember_me'])) {
                echo $_COOKIE['remember_me']; } ?>"/>
                <label for="regularInput">Wachtwoord</label>
                <input type="password" name="wachtwoord" id="regularInput" />

                <label for="regularCheckbox">
                    <input type="checkbox" id="regularCheckbox" name="onthoud" value="checkbox 1" />
                    <span>Onthoud mij</span>

                    <button name="submit" type="submit">Login</button>

                </label>
            </form>
            <?php else: ?>
                <?php if($_SESSION['loggedIn'] != false): ?>
                    <p>Gebruiker: <?= $_COOKIE['gebruikersnaam'] ?></p>
            <a href="<?= SITE_URL ?>account">Mijn account</a> | <a href="<?= SITE_URL ?>logout">uitloggen</a>
                    <?php endif; ?>
            <?php endif; ?>
        </div>

    </div>



    <!-- Menu top
    ==================================================== -->

    <div class="sixteen columns menubalk">
        <a href="<?= SITE_URL ?>">Home</a>
        <a href="<?= SITE_URL ?>veilingen">Veilingen</a>
        <?php if(isset($_SESSION['loggedIn'])): ?>
        <a href="<?= SITE_URL ?>account">Mijn account</a>
        <?php else: ?>
            <a href="<?= SITE_URL ?>registreren">Registreren</a>
        <?php endif; ?>
        <a href="<?= SITE_URL ?>algemeneVoorwaarden">Algemene voorwaarden</a>
        <a href="<?= SITE_URL ?>contact">Contact</a>
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
    
