<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 4-12-14
 * Time: 12:17
 */

class logout  extends controller{

    function __constructor() {
        parent::__construct();
    }

    public function index() {
        session_unset($_SESSION['loggedIn']);
        header("location:" .SITE_URL );
    }
} 