<?php
/**
 * De basis van het framework.
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */

/**
 * Definieer directory seperator en root van de applicatie
 */
define('DS', DIRECTORY_SEPARATOR);
//define root
define("ROOT", __DIR__ ."/");
//define site url
define("SITE_URL", "http://localhost/jframe/");
//styles
define("SKINS_DIR", SITE_URL . "application/skins/");

define("VAL_DIR", SITE_URL . "application/validation/");
define("MAIL_DIR", ROOT . "mail/Mail/");
/**
 * alle segmenten achter de base url worden opgeslagen
 */
if(isset($_GET['url'])) $url = $_GET['url'];
else $url = 'index';

/**
 * laadt benodigde bestanden in voor het runnen van de applicatie
 */
require_once (ROOT . DS . 'system' . DS . 'page_setup.php');





