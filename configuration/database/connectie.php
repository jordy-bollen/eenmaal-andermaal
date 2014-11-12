<?php
/**
 * User: Jordy Bollen
 * Date: 12-11-14
 * Time: 13:17
 */

// Maak connectie
mysql_connect($connectie['hostnaam'],$connectie['gebruikersnaam'],$connectie['wachtwoord']) or die(mysql_error());
mysql_select_db($connectie['databasenaam']) or die(mysql_error()." [".$connectie['databasenaam']."]");
