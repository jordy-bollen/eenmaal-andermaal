<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class wijzigenbank extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
    	$modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        if(!isset($_POST['submitBank'])) {
        $this->loadView('includes/header');
        $this->loadView('wijzigenbankgegevens', $this->data);
        $this->loadView('includes/footer');
        }
        else {
            $modelGebruiker = $this->loadModel('gebruiker');
            $gebruiker = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
            while( $gebruikerwachtwoord = sqlsrv_fetch_object( $gebruiker )){
                $wachtwoord = $gebruikerwachtwoord->wachtwoord;
            }
            if($wachtwoord == $_POST['wachtwoord']) {
                $modelGebruiker = $this->loadModel('gebruiker');
                $modelGebruiker->wijzigVerkoper($_POST);
                echo 'test';
            }
            else {
                echo 'wachtwoord verkeerd';
            }
        }
    }
} 