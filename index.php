<?php
/**
 * Definieer directory seperator en root van de applicatie
 */
define('DS', DIRECTORY_SEPARATOR);
//define root
define("ROOT", __DIR__ ."/");

/**
 * alle segmenten achter de base url worden opgeslagen
 */
if(isset($_GET['url'])) $url = $_GET['url'];
else $url = 'index';

/**
 * laadt benodigde bestanden in voor het runnen van de applicatie
 */
require_once (ROOT . DS . 'configuration' . DS . 'config.php');
require_once (ROOT . DS . 'configuration' . DS . 'database' . DS . 'connectie.php');
require_once (ROOT . DS . 'configuration' . DS . 'routing' . DS . 'routing.php');






