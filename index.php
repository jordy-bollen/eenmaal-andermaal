<?php
//definieer directory seperator
define('DS', DIRECTORY_SEPARATOR);
//define root
define("ROOT", __DIR__ ."/");

//als er een url is sla deze op
if(isset($_GET['url'])) $url = $_GET['url'];
else $url = 'index';
//require bestanden
require_once (ROOT . DS . 'configuration' . DS . 'config.php');
require_once (ROOT . DS . 'configuration' . DS . 'database' . DS . 'connectie.php');
require_once (ROOT . DS . 'configuration' . DS . 'routing' . DS . 'routing.php');




