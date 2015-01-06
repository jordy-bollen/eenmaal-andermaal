<?php
/**
 * Controller voor de homepage
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */

class registreren extends controller{

    /*
     * Variabelen aanmaken voor de geheime vragen, de data die wordt meegestuurd naar de view(array), en de geheime code.
     */
    private $vragen;
    private $data;
    private $code;

    function __constructor() {
        parent::__construct();
    }

    public function index() {
        //models voor vragen en gebruikers inladen en vervolgens de benodigde data ophalen
        $modelVraag = $this->loadModel('vraag');
        $modelGebruiker = $this->loadModel('gebruiker');
        $this->vragen = $modelVraag->getVragen();
        $this->data['vragen'] = $this->vragen;
        /*
         * kijk welke pagina er moet worden geladen, de e-mail invoer pagina, de e-mail validatie pagina of de registratie
         * pagina
         */
        //pagina
        if(!isset($_POST['submitMail']) && !isset($_POST['submitValidatie']) && !isset($_POST['submitRegistratie'])) {
        $this->loadView('includes/header');
        $this->loadView('forms/mail');
        $this->loadView('includes/footer');
        }
        else if(isset($_POST['submitMail'])) {
            $rows = sqlsrv_fetch_array($modelGebruiker->checkMail($_POST['email']));
            if(!$rows) {
            $this->code = $this->createRandomCode();
            $this->mailUser($_POST['email'], $this->code);
            $this->data['code'] = $this->code;
            $_SESSION['checkcode'] = $this->code;
            $this->loadView('includes/header');
            $this->loadView('forms/validatie');
            $this->loadView('includes/footer');
            }
            else {
                $this->loadView('includes/header');
            echo '<div>email bestaat al in de database. <a href="'.SITE_URL.'registreren">Ga terug</a></div>';
                $this->loadView('includes/footer');
            }
        }
        else if(isset($_POST['submitValidatie'])) {
            if($_POST['code'] == $_SESSION['checkcode']) {
            $this->loadView('includes/header');
            $this->loadView('forms/registratie', $this->data);
            $this->loadView('includes/footer');
            }
            else {
                echo 'Voer een geldige code in.';
                $this->loadView('includes/header');
                $this->loadView('forms/validatie');
                $this->loadView('includes/footer');
            }
        }
           else {

               session_unset($_SESSION['checkcode']);
                $this->loadView('includes/header');
               echo'u heeft geregistreerd';
                $gebruikersdata = $this->formatData($_POST);
                $modelGebruiker->registreer($gebruikersdata);
               $modelGebruiker->voegtelefoonnummerstoe($gebruikersdata, $gebruikersdata['gebruikersnaam']);
                $this->loadView('includes/footer');
               }

            }


    /**
     * createRandomCode
     *
     * Maak een validatiecode voor de email validatie
     * @return string
     */
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

    /**
     * mailUser
     *
     * mail een user de betreffende code
     *
     * @param $email
     * @param $code
     */
    private function mailUser($email, $code) {
        $message = wordwrap($code, 70, "\r\n");
        mail($email, 'Registratiecode', $message);
    }

    /**
     * formatData
     *
     * formateer gebruikersdata voor de database
     *
     * @param $gebruikersdata
     * @return mixed
     */
    private function formatData($gebruikersdata) {
        $gebruikersdata['postcode'] = str_replace(' ','',$gebruikersdata['postcode']);
        $gebruikersdata['geboortedatum'] = date("Y/M/d", strtotime($gebruikersdata['geboortedatum']));
        return $gebruikersdata;
    }
}