<?php
/**
 * In dit bestand wordt de pagina opgesteld. de pagina wordt ingeladen evenals de benodigde configuratie variabelen.
 * Bij voorkeur niks aan wijzigen!
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */

require_once (ROOT . DS . 'system' . DS . 'config' . DS . 'require.php');


/**
 * laadt goede pagina in
 */
$routing = new routing($autoload['indexController'], $url);
$routing->route();
