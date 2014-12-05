<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class algemenevoorwaarden extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->loadView('includes/header');
        $this->loadView('voorwaarden');
        $this->loadView('includes/footer');
    }
} 