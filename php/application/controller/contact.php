<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class contact extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->loadView('includes/header');
        $this->loadView('contact');
        $this->loadView('includes/footer');
    }
} 