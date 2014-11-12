<?php
/**
 * Created by: B & T IT
 * Date: 12-11-14
 * Time: 14:00
 */

class index extends controller {

    public function index() {
        $this->setView('includes/header');
        $this->setView('includes/footer');
    }

}