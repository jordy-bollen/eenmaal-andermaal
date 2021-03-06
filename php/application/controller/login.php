<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2-12-14
 * Time: 12:53
 */

class login extends controller{

    function __constructor() {
        parent::__construct();
    }

    public function index() {
    if(isset($_POST['submit'])) {
        $this->verifyLogin($_POST['gebruikersnaam'], $_POST['wachtwoord']);
    }
    }

    public function verifyLogin($gebruikersnaam, $wachtwoord) {
    $modelGebruiker = $this->loadModel('gebruiker');
        $query = $modelGebruiker->login($gebruikersnaam, $wachtwoord);
        $rows = sqlsrv_fetch_array($query);
    if($rows) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['gebruikersnaam'] = $gebruikersnaam;
        header("location:" .SITE_URL );
        if(isset($_POST['onthoud'])) {
            $year = time() + 31536000;
            setcookie('remember_me', $_POST['gebruikersnaam'], $year);
        }
    }
        else {
            $this->loadView('includes/header');

            echo 'mislukt';
            $this->loadView('includes/footer');
        }
    }
} 