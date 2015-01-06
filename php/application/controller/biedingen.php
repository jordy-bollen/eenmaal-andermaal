<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 17-12-14
 * Time: 13:20
 */

class biedingen extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->loadView('includes/header');
        echo 'test';
        $this->loadView('biedingen');
        $this->loadView('includes/footer');
    }
} 