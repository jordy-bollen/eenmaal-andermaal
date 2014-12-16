<?php
/**
 * Controller voor de homepage
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */


class veilingen extends controller{


    private $data;

    private $segments;
    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelRubrieken = $this->loadModel('rubriek');
        $modelBestanden = $this->loadModel('bestand');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $alleRubrieken = $modelRubrieken->getAlleRubrieken();
        $alleVoorwerpen = $modelVoorwerp->getVoorwerpen();
        $hoogsteboden = $modelVoorwerp->getVoorwerpHoogsteBod();
        $afbeeldingen = $modelBestanden->getAfbeeldingen();

        $this->data['veilingen'] = $alleVoorwerpen;
        $this->data['hoogsteboden'] = $hoogsteboden;
        $this->data['allerubrieken'] = $alleRubrieken;
        $this->data['rubrieken'] = $rubrieken;
        $this->data['afbeeldingen'] = $afbeeldingen;
        if(count($this->segments) <= 4) {
        $this->loadView('includes/header');
        $this->loadView('veilingen', $this->data);
        $this->loadView('includes/footer');
        }
        else
         {
             unset($this->segments[0]);
             unset($this->segments[1]);
             unset($this->segments[2]);
             $this->segments = array_values($this->segments);
            $lastSegment = $this->segments[count($this->segments) - 1];
             $string  = explode("-", $lastSegment, 3);
             $id = $string[0];
             $rubriek = $modelRubrieken->getRubriek($id);
            $veilingen = $modelVoorwerp->getVoorwerpenRubriek($id);
            $this->data['veilingen'] = $veilingen;
             $this->data['rubriek'] = $rubriek;
            $this->loadView('includes/header');
             $this->loadView('veilingen', $this->data);
            $this->loadView('includes/footer');
        }
    }


}