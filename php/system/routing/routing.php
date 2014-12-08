<?php
/**
 * Deze klasse regelt het inladen van controllers op basis van de gegeven url
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */

class routing {

    private $index;
    private $controllerFile;
    private $error404;
    private $segments;
    private $url;

    /**
     * Constructor
     *
     * @param $index
     * @param $url
     */
    function __construct($index, $url) {
        $this->index = $index;
        $this->url = $url;
        $this->error404 = ROOT . DS . 'application' . DS . 'controller' .DS. '404.php';
        $this->segments = explode("/", $url);
    }

    /**
     * route
     *
     * hoofdmethode welke de routing regelt op basis van url
     */
    public function route() {
        require_once (ROOT . DS . 'system' . DS . 'mvc' .DS . 'controller.php');
        require_once (ROOT . DS . 'system' . DS . 'mvc' .DS . 'model.php');
        $this->controllerFile = ROOT . DS . 'application' . DS . 'controller' .DS. $this->segments[0].'.php';
        if ($this->segments[0] == 'index'){
            $this->loadIndex($this->index);
        }
        else {
            if (file_exists($this->controllerFile)) {
               $this->loaddefault($this->segments[0], $this->segments);
            }
            else if (file_exists($this->error404)){
                $this->load404($this->error404);
            }
            else {
                die('Controller met de naam '.$this->segments[0]. ' bestaat niet');
            }
        }
    }

    /**
     * @param $index
     */
    public function loadIndex($index) {
        require_once (ROOT . DS . 'application' . DS . 'controller' .DS. $index.'.php');
        $controller{'_'.$index} = new $index();
        if($index != 'index') $controller{'_'.$index}->index();
    }

    /**
     * @param $url
     * @param $segments
     */
    public function loadDefault($url, $segments) {
        require_once (ROOT . DS . 'application' . DS . 'controller' .DS. $url.'.php');
        $controller{'_'.$url} = new $url();
        $this->loadFunction($segments, $controller{'_'.$url});
    }

    /**
     * @param $error404
     */
    public function load404($error404) {
        require_once ($error404);
        $controller404 = new error404();
        $controller404->index();
    }

    /**
     * @param $segments
     * @param $controller
     */
    private function loadFunction($segments, $controller) {
        if (count($segments) == 1) {
            $controller->index();
        }
        else {
            $last = end($segments);
            if(method_exists($controller, $last)) {
                $controller->$last();
            }
            else {
                $controller->index();
            }
        }
    }

}