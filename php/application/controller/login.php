<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2-12-14
 * Time: 12:53
 */
session_start();
class login extends controller{

    function __constructor() {
        parent::__construct();
    }

    public function index() {
    if(isset($_POST['submit'])) {
        $this->verifyLogin($_POST['gebruikersnaam'], $_POST['wachtwoord']);
    }
        else {
            $this->loadView('includes/header');
            $this->loadView('forms/login');
            $this->loadView('includes/footer');
        }
    }

    public function verifyLogin($gebruikersnaam, $wachtwoord) {
    $modelGebruiker = $this->loadModel('gebruiker');
        echo $gebruikersnaam;
        echo $wachtwoord;
        $query = $modelGebruiker->login($gebruikersnaam, $wachtwoord);
        $rows = sqlsrv_fetch_array($query);
    if($rows) {
        $_SESSION['loggedIn'] = true;
        echo 'gelukt';
    }
        else {
            echo 'mislukt';
        }
    }
} 