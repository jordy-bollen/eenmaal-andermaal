<?php
/**
 * Created by: B & T IT
 * Date: 12-11-14
 * Time: 14:55
 */

/**
 * Routing: op basis van de url de controller bepalen die wordt ingeladen
**/
if($url == 'index') {
    require_once (ROOT . DS . 'configuration' . DS . 'mvc' .DS . 'controller.php');
    require_once (ROOT . DS . 'application' . DS . 'controller' .DS. $autoladen['startController'].'.php');
    $controller{'_'.$autoladen['startController']} = new $autoladen['startController']();
    if($controller{'_'.$autoladen['startController']} != 'index') $controller{'_'.$autoladen['startController']}->index();
}
else {
    $controllerFile = ROOT . DS . 'application' . DS . 'controller' .DS. $url.'.php';
    if (file_exists($controllerFile)) {
        require_once (ROOT . DS . 'configuration' . DS . 'mvc' .DS . 'controller.php');
        require_once (ROOT . DS . 'application' . DS . 'controller' .DS. $url.'.php');
        $controller{'_'.$url} = new $url();
        $controller{'_'.$url}->index();
    }
    else {
        die('Er bestaat geen controller met de naam ' . $url . '.php');
    }
}