<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 9-12-14
 * Time: 10:31
 */

class account extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->loadView('includes/header');
        $this->loadView('account');
        $this->loadView('includes/footer');
    }
} 