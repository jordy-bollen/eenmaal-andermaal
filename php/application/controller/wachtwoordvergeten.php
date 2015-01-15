<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 9-12-14
 * Time: 12:51
 */

class wachtwoordvergeten extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelGebruiker = $this->loadModel('gebruiker');
        if(!isset($_POST['submitMail']) && !isset($_POST['submitVraag'])) {
        $this->loadView('includes/header');
        $this->loadView('forms/mailgebruikerVergeten');
        $this->loadView('includes/footer');
        }
        if(isset($_POST['submitMail']) && isset($_POST['gebruiker'])) {
            $rows = sqlsrv_fetch_array($modelGebruiker->checkMail($_POST['email']));
            $gebruikers = $modelGebruiker->getGebruiker($_POST['gebruiker']);
            while( $gebruiker = sqlsrv_fetch_object( $gebruikers )){
                $gebruikermail = $gebruiker;
            }
            if($rows && $gebruikermail->mailadres == $_POST['email']) {
                $modelVraag = $this->loadModel('vraag');
                $vragen = $modelVraag->getVragen();
                $vraaggebruiker = $modelGebruiker->getGebruikerVraag($_POST['email']);
                while( $gebruiker = sqlsrv_fetch_object( $vraaggebruiker )){
                  $vraagid =  $gebruiker->vraag;
                }
                while( $vraag = sqlsrv_fetch_object( $vragen )){
                    if($vraag->vraagnummer == $vraagid) {
                    $gebruikersvraag = $vraag;
                    }
                }
            $this->data['vragen'] = $gebruikersvraag;
            $this->loadView('includes/header');
            $this->loadView('forms/vraag', $this->data);
            $this->loadView('includes/footer');
            }
            else {
                echo 'Foutief mailadres ingevoerd. <a href="'.SITE_URL.'vergeten">Ga terug</a>';
            }
        }
        if(isset($_POST['submitVraag'])) {
            $gebruiker = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
            while( $gebruikervraag = sqlsrv_fetch_object( $gebruiker )){
                $antwoord = $gebruikervraag->antwoordtekst;
            }
            if($_POST['antwoord'] && $_POST['antwoord'] == $antwoord) {
            $code = $this->createRandomCode();
            $this->mailUser($_POST['email'], $code);
            $modelGebruiker->wachtwoordWijzigen($_SESSION['gebruikersnaam'], $code);
            }
            else {
                echo 'Foutief antwoord ingevoerd. <a href="'.SITE_URL.'vergeten">Ga terug</a>';
            }
        }
    }

    private function mailUser($email, $code) {
        $message = wordwrap($code, 70, "\r\n");
        mail($email, 'Registratiecode', $message);
    }

    private function createRandomCode() {

        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;

        while ($i <= 5) {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $pass = $pass . $tmp;
            $i++;
        }

        return $pass;

    }
} 