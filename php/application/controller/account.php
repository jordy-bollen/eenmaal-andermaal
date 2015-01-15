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
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['gebruiker'] = $gebruiker;
        $this->loadView('includes/header');
        $this->loadView('account', $this->data);
        $this->loadView('includes/footer');
    }

    public function biedingen() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['rubrieken'] = $rubrieken;
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelBod = $this->loadModel('bod');
        $this->loadView('includes/header');
        $bodengebruiker = $modelBod->getBodenGebruiker($_SESSION['gebruikersnaam']);
        $voorwerpen = $modelVoorwerp->getVoorwerpen(90000);
        $this->data['boden'] = $bodengebruiker;
        $this->data['voorwerpen'] = $voorwerpen;
        $this->loadView('biedingen', $this->data);
        $this->loadView('includes/footer');
    }

    public function mijnadvertenties() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['rubrieken'] = $rubrieken;
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelBod = $this->loadModel('bod');
        $this->loadView('includes/header');
        $boden = $modelBod->getHoogsteBoden();
        $voorwerpen = $modelVoorwerp->getVoorwerpFromGebruiker($_SESSION['gebruikersnaam']);
        $this->data['boden'] = $boden;
        $this->data['voorwerpen'] = $voorwerpen;
        $this->loadView('mijnadvertenties', $this->data);
        $this->loadView('includes/footer');
    }

    public function wijzigenpersoonsgegevens() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['rubrieken'] = $rubrieken;
        $modelGebruiker = $this->loadModel('gebruiker');
        if(!isset($_POST['submitPersoonsgegevens'])) {
        $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
        $telefoonnummers = $modelGebruiker->getGebruikerTelefoon();
        $this->loadView('includes/header');
        $this->data['gebruikers'] = $gebruikers;
            $this->data['telefoon'] = $telefoonnummers;
        $this->loadView('wijzigenpersoonsgegevens', $this->data);
        $this->loadView('includes/footer');
        }
        else {
            $_POST['postcode'] = $this->formatData($_POST['postcode']);
            $modelGebruiker->wijzigenPersoonsGegevens($_POST);
            $this->loadView('includes/header');
            $gebruikers = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
            $this->data['gebruikers'] = $gebruikers;

            $this->loadView('wijzigenpersoonsgegevens', $this->data);
            $this->loadView('includes/footer');
        }
    }

    private function formatData($postcode) {
        $postcodegoed = str_replace(' ','',$postcode);
        return $postcodegoed;
    }
} 