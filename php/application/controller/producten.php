<?php
/**
 * Controller voor de homepage
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */


class producten extends controller{


    private $data;

    private $segments;
    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->segments = explode('/', $_SERVER['REQUEST_URI_PATH']);
        $modelVoorwerp = $this->loadModel('voorwerp');
        $modelBod = $this->loadModel('bod');
        $modelRubrieken = $this->loadModel('rubriek');
        $modelBestanden = $this->loadModel('bestand');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();

        unset($this->segments[0]);
             unset($this->segments[1]);
             unset($this->segments[2]);
             $this->segments = array_values($this->segments);
            $lastSegment = $this->segments[count($this->segments) - 1];
             $string  = explode("-", $lastSegment, 2);
             $id = $string[0];
        $boden = $modelBod->getBoden($id);
        $afbeeldingen = $modelBestanden->getAfbeelding($id);
        $voorwerp = $modelVoorwerp->getVoorwerp($id);
        $hoogsteboden = $modelBod->getHoogsteBod($id);

        while( $bod = sqlsrv_fetch_object( $hoogsteboden )) {
        $hoogstebod = $bod->bodbedrag;
        }
        $this->data['voorwerp'] = $voorwerp;
        $this->data['boden'] = $boden;
        $this->data['rubrieken'] = $rubrieken;
        $this->data['afbeeldingen'] = $afbeeldingen;
        if(!isset($_POST['submitBod'])) {
            $this->loadView('includes/header');
             $this->loadView('product', $this->data);
            $this->loadView('includes/footer');
        }
        else {

            if($hoogstebod < $_POST['bodbedrag'] && $_POST['bodbedrag'] > 0) {
            $bodinformatie = $_POST;
            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
            $modelBod->registreerBod($bodinformatie);
            echo 'Bod geplaatst';
                header("location:" .SITE_URL. 'producten/' .$lastSegment );
            }
            else {
                echo 'Bod niet geplaatst error..';
            }
            $this->loadView('includes/header');
            $this->loadView('product', $this->data);
            $this->loadView('includes/footer');
        }
        }


}