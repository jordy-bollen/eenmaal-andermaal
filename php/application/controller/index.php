<?php

class index extends controller{

     private $modelRubrieken;
    private $rubrieken;
    private $data;
    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->modelRubrieken = $this->loadModel('rubriek');
        $modelVoorwerpen = $this->loadModel('voorwerp');
        $modelBestanden = $this->loadModel('bestand');
        $aflopend = $modelVoorwerpen->getAflopendeVoorwerpen();
        $this->rubrieken = $this->modelRubrieken->getHoofdRubrieken();
        $afbeeldingen = $modelBestanden->getAfbeeldingen();
        $hoogsteboden = $modelVoorwerpen->getVoorwerpHoogsteBod();
        $this->data['rubrieken'] = $this->rubrieken;
        $this->data['aflopend'] = $aflopend;
        $this->data['afbeeldingen'] = $afbeeldingen;
        $this->data['hoogsteboden'] = $hoogsteboden;
        $this->loadView('includes/header');
        $this->loadView('index', $this->data);
        $this->loadView('includes/footer');
    }
} 