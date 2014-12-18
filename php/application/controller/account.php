<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 9-12-14
 * Time: 10:31
 */

class account extends controller{

    private $user;
    private $modelGebruiker;
    function __constructor() {
        parent::__construct();
        $this->user = $_SESSION['gebruikersnaam'];
    }

    public function index() {
        $modelGebruiker = $this->loadModel('gebruiker');
        $modelRubrieken = $this->loadModel('rubriek');
        $gebruiker = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['gebruiker'] = $gebruiker;
        $this->loadView('includes/header');
        $this->loadView('account', $this->data);
        $this->loadView('includes/footer');
    }

    public function biedingen() {
        $modelGebruiker = $this->loadModel('gebruiker');
        $modelBod = $this->loadModel('bod');
        $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        $this->loadView('includes/header');
        while( $gebruiker = sqlsrv_fetch_object( $gebruikers )) {
            echo $gebruiker->gebruikersnaam;
        }
        $this->loadView('includes/footer');
    }

    public function wijzigenpersoonsgegevens() {
        $modelGebruiker = $this->loadModel('gebruiker');
        $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        $this->loadView('includes/header');
        $this->data['gebruikers'] = $gebruikers;
        
        $this->loadView('wijzigenpersoonsgegevens', $this->data);
        $this->loadView('includes/footer');
    }
} 