<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 17-12-14
 * Time: 13:20
 */

class verkoper extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelGebruiker = $this->loadModel('gebruiker');
        $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        while( $gebruiker = sqlsrv_fetch_object( $gebruikers )) {
            $dezegebruiker = $gebruiker;
        }
        echo $dezegebruiker->verkoper;
        if ($dezegebruiker->verkoper == 0) {
        if(!isset($_POST['registreer']) && !isset($_POST['verificatieMethode'])) {
        $this->loadView('includes/header');
        $this->loadView('verkoper');
        $this->loadView('includes/footer');
            }
        else if(isset($_POST['submitVerkoper']) && isset($_POST['verificatieMethode'])){
            if($_POST['verificatieMethode'] == 'post') {
                $this->mailUser('Om als verkoper te registreren mail de administrator', $_POST['mail']);
            }
            else {
                $gebruikerModel = $this->loadModel('gebruiker');
                $gebruikerModel->registreerVerkoper($_POST);
                $this->loadView('includes/header');
                echo '<div>verkoper geregistreerd</div>';
                $this->loadView('includes/footer');
            }
        }
        }
        else {
            $this->loadView('includes/header');
            echo 'u bent al verkoper';
            $this->loadView('includes/footer');
        }
    }
    private function mailUser($bericht, $email) {
        $message = wordwrap($bericht, 70, "\r\n");
        mail($email, 'Verkoperaccount', $message);
    }
} 