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
        if ($dezegebruiker->verkoper == 0) {
        if(!isset($_POST['registreer']) && !isset($_POST['verificatieMethode'])) {
        $this->loadView('includes/header');
        $this->loadView('verkoper');
        $this->loadView('includes/footer');
            }
        else if(isset($_POST['submitVerkoper']) && isset($_POST['verificatieMethode'])){
            if($_POST['verificatieMethode'] == 'Post') {
                $this->loadView('includes/header');
                echo '<div>U heeft een mail ontvangen met verdere instructies</div>';
                $this->loadView('includes/footer');
                $this->mailUser('Om als verkoper te registreren mail de administrator', $dezegebruiker->mailadres);
            }
            else {
                $gebruikerModel = $this->loadModel('gebruiker');
                if(!isset($_POST['bankrekening'])) {
                    $_POST['bankrekening'] = NULL;
                }
                $gebruikerModel->registreerVerkoper($_POST);
                $this->loadView('includes/header');
                echo '<div>verkoper geregistreerd</div>';
                $this->loadView('includes/footer');
            }
        }
        }
        else {
            $this->loadView('includes/header');
            $this->data['melding'] = 'U bent al als verkoper geregistreerd';
            $this->loadView('foutmelding', $this->data);
            $this->loadView('includes/footer');
        }
    }
    private function mailUser($bericht, $email) {
        $message = wordwrap($bericht, 70, "\r\n");
        mail($email, 'Verkoperaccount', $message);
    }
} 