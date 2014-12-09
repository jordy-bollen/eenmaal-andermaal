<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 9-12-14
 * Time: 12:51
 */

class vergeten extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelGebruiker = $this->loadModel('gebruiker');
        $this->loadView('includes/header');
        $this->loadView('forms/mailVergeten');
        $this->loadView('includes/footer');
        if(isset($_POST['submitMail'])) {
            $rows = sqlsrv_fetch_array($modelGebruiker->checkMail($_POST['email']));
            if($rows) {
                $modelVraag = $this->loadModel('vraag');
                $vragen = $modelVraag->getVragen();
                $vraaggebruiker = $modelGebruiker->getGebruikerVraag($_POST['email']);
                while( $gebruiker = sqlsrv_fetch_object( $vraaggebruiker )){
                  $vraagid =  $vraaggebruiker->vraag;
                }
                while( $vraag = sqlsrv_fetch_object( $vragen )){
                    if($vragen->vraagnummer == $vraagid) {
                    $gebruikersvraag =   $vragen->vraagnummer;
                    }
                }
            $this->data['vragen'] = $gebruikersvraag;
            $this->loadView('includes/header');
            $this->loadView('forms/vraag', $this->data);
            $this->loadView('includes/footer');
            }
            else {
                echo 'mailadres bestaat niet in de database';
            }
        }
    }
} 