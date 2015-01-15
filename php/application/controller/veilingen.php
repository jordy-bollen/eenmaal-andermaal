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
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $alleRubrieken = $modelRubrieken->getAlleRubrieken();
        $aantalproducten = 9;
        $alleVoorwerpen = $modelVoorwerp->getVoorwerpen($aantalproducten);
        $hoogsteboden = $modelVoorwerp->getVoorwerpHoogsteBod();
        $afbeeldingen = $modelBestanden->getAfbeeldingen();

        $aantalvoorwerpen = $modelVoorwerp->countVoorwerpen();
        while( $v = sqlsrv_fetch_object( $aantalvoorwerpen )) {
          $aantalvoorwerp =  $v->aantal;
        }
        $aantalpaginas = ceil($aantalvoorwerp / $aantalproducten);
<<<<<<< HEAD
=======
        echo $aantalpaginas;
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6
        $this->data['aantalpaginas'] = $aantalpaginas;
        $this->data['hoogsteboden'] = $hoogsteboden;
        $this->data['allerubrieken'] = $alleRubrieken;
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['afbeeldingen'] = $afbeeldingen;
        if(count($this->segments) <= 4) {
        $this->data['veilingen'] = $alleVoorwerpen;
        $this->loadView('includes/header');
        $this->loadView('veilingen', $this->data);
        $this->loadView('includes/footer');
        }
        else
         {

             $lastSegment = $this->segments[count($this->segments) - 1];
             if(!strpos($lastSegment,'-') && count($this->segments) < 6 ) {
                 $paginanummer = $lastSegment;
<<<<<<< HEAD
=======

                 echo $paginanummer;
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6
                 $voorwerpenpagina = $modelVoorwerp->getVoorwerpenPagina($aantalproducten, $paginanummer);
                 $this->data['veilingen'] = $voorwerpenpagina;
                 $this->loadView('includes/header');
                 $this->loadView('veilingen', $this->data);
                 $this->loadView('includes/footer');
             }
<<<<<<< HEAD
             else if(count($this->segments) == 6) {
                 unset($this->segments[0]);
                 unset($this->segments[1]);
                 unset($this->segments[2]);
                 $this->segments = array_values($this->segments);
                 $lastSegment = $this->segments[count($this->segments) - 1];
                 $string  = explode("-", $lastSegment, 3);
                 $id = $string[0];
                 $veilingen = $modelVoorwerp->getVoorwerpenRubriek($id, 50);
                 $this->data['veilingensub'] = $veilingen;
                 $this->loadView('includes/header');
                 $this->loadView('veilingen', $this->data);
                 $this->loadView('includes/footer');
             }
=======
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6
             else {
             unset($this->segments[0]);
             unset($this->segments[1]);
             unset($this->segments[2]);
             $this->segments = array_values($this->segments);
            $lastSegment = $this->segments[count($this->segments) - 1];
             $string  = explode("-", $lastSegment, 3);
             $id = $string[0];
                 $this->data['veilingen'] = $alleVoorwerpen;
             $rubriek = $modelRubrieken->getRubriek($id);

            $veilingen = $modelVoorwerp->getVoorwerpenRubriek($id, 50);
            $this->data['veilingen'] = $veilingen;
             $this->data['rubriek'] = $rubriek;

            $this->loadView('includes/header');
             $this->loadView('veilingen', $this->data);
            $this->loadView('includes/footer');
             }
        }
    }


}