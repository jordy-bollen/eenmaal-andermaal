<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 9-12-14
 * Time: 10:31
 */

class account extends controller{

    function __constructor() {
        parent::__construct();

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
} 