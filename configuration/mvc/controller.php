<?php
/**
 * User: Jordy Bollen
 * Date: 12-11-14
 * Time: 14:28
 */

class controller {

        public function controller() {
        }

    /**
     * @param $viewnaam
     * @desription Laadt een view in binnen de controller
     */
    protected function setView($viewnaam) {
        require_once (ROOT . DS . 'application' . DS . 'view' . DS . $viewnaam .'.php');
        }
}