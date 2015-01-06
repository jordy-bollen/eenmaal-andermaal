<?php

class index extends controller{

     private $modelRubrieken;
    private $rubrieken;
    private $data;
    function __constructor() {
        parent::__construct();

    }

    public function index() {
        //laad models
        $this->modelRubrieken = $this->loadModel('rubriek');
        $modelVoorwerpen = $this->loadModel('voorwerp');
        $modelBestanden = $this->loadModel('bestand');
        //haal data op
        $aflopend = $modelVoorwerpen->getAflopendeVoorwerpen();
        $this->rubrieken = $this->modelRubrieken->getHoofdRubrieken();
        $this->rubrieken2 = $this->modelRubrieken->getHoofdRubrieken();
        $afbeeldingen = $modelBestanden->getAfbeeldingen();
        $hoogsteboden = $modelVoorwerpen->getVoorwerpHoogsteBod();
        $alleVoorwerpen = $modelVoorwerpen->getVoorwerpen();
        $populair = $modelVoorwerpen->getPopulaireVoorwerpen();
        //maak data klaar voor view
        $this->data['voorwerpen'] = $alleVoorwerpen;
        $this->data['rubrieken'] = $this->rubrieken;
        $this->data['rubrieken2'] = $this->rubrieken2;
        $this->data['aflopend'] = $aflopend;
        $this->data['afbeeldingen'] = $afbeeldingen;
        $this->data['hoogsteboden'] = $hoogsteboden;
        $this->data['populair'] = $populair;
        //laadt view
        $this->loadView('includes/header');
        $this->loadView('index', $this->data);
        $this->loadView('includes/footer');
    }
} 