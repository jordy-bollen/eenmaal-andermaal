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
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelBod = $this->loadModel('bod');
        $this->loadView('includes/header');
        $bodengebruiker = $modelBod->getBodenGebruiker($_SESSION['gebruikersnaam']);
        $voorwerpen = $modelVoorwerp->getVoorwerpen();
        $this->data['boden'] = $bodengebruiker;
        $this->data['voorwerpen'] = $voorwerpen;
        $this->loadView('biedingen', $this->data);
        $this->loadView('includes/footer');
    }

    public function mijnadvertenties() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelBod = $this->loadModel('bod');
        $this->loadView('includes/header');
        $boden = $modelBod->getAlleBoden();
        $voorwerpen = $modelVoorwerp->getVoorwerpFromGebruiker($_SESSION['gebruikersnaam']);
        $this->data['boden'] = $boden;
        $this->data['voorwerpen'] = $voorwerpen;
        $this->loadView('mijnadvertenties', $this->data);
        $this->loadView('includes/footer');
    }

    public function wijzigenpersoonsgegevens() {

        $modelGebruiker = $this->loadModel('gebruiker');
        if(!isset($_POST['submitPersoonsgegevens'])) {
        $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        $this->loadView('includes/header');
        $this->data['gebruikers'] = $gebruikers;
        
        $this->loadView('wijzigenpersoonsgegevens', $this->data);
        $this->loadView('includes/footer');
        }
        else {
            $modelGebruiker->wijzigenPersoonsGegevens($_POST);
            $this->loadView('includes/header');
            $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
            $this->data['gebruikers'] = $gebruikers;

            $this->loadView('wijzigenpersoonsgegevens', $this->data);
            $this->loadView('includes/footer');
        }
    }
} 