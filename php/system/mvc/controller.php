<?php
/**
 * In dit bestand worden methodes opgesteld die gebruikt kunnen worden binnen een controller
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */
session_start();
class controller{

    protected $libraryloader;

    function __construct() {
    }


    /**
     * @param $viewnaam
     * @param array $data
     */
    protected function loadView($viewnaam, array $data = NULL) {
        require_once (ROOT . DS . 'application' . DS . 'view' . DS . $viewnaam .'.php');

    }

    /**
     * loadModel
     *
     * op basis van modelnaam het benodigde model inladen
     *
     * @param $model
     * @return $model
     */
    protected function loadModel($model) {
        require_once (ROOT . DS . 'application' . DS . 'model' . DS . $model .'.php');
        $modelReturn = new $model();
        return $modelReturn;
    }

}