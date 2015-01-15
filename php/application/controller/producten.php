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
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
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
            $hoogstebodgebruiker = $bod->gebruiker;
        }
        $this->data['voorwerp'] = $voorwerp;
        $this->data['boden'] = $boden;
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->data['afbeeldingen'] = $afbeeldingen;
        if(!isset($_POST['submitBod'])) {
            $this->loadView('includes/header');
             $this->loadView('product', $this->data);
            $this->loadView('includes/footer');
        }
        else {
            if(isset($hoogstebod)) {
            if($hoogstebod  < $_POST['bodbedrag'] && $_POST['bodbedrag'] > 0 && $hoogstebodgebruiker != $_SESSION['gebruikersnaam']) {

                if($hoogstebod > 1 && $hoogstebod < 50){
                    if($hoogstebod + 0.50  < $_POST['bodbedrag']) {
                            if ($_SESSION['gebruikersnaam'] != $_POST['verkoper']) {
                            $bodinformatie = $_POST;
                            $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                            $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                            $modelBod->registreerBod($bodinformatie);
                            echo 'Bod geplaatst';
                            header("location:" .SITE_URL. 'producten/' .$lastSegment );
                            }
                    }
                    else {
                        $this->loadView('includes/header');
                        $this->data['melding'] = 'Minimale verhoging is 0,50 cent <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                        $this->loadView('foutmelding', $this->data);
                        $this->loadView('includes/footer');
                    }
                }
                else if($hoogstebod >= 50 && $hoogstebod < 500) {
                    if($hoogstebod + 1  < $_POST['bodbedrag']) {
                            if ($_COOKIE['gebruikersnaam'] != $_POST['verkoper']) {
                            $bodinformatie = $_POST;
                            $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                            $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                            $modelBod->registreerBod($bodinformatie);
                            echo 'Bod geplaatst';
                            header("location:" .SITE_URL. 'producten/' .$lastSegment );
                            }
                    }
                    else {
                        $this->loadView('includes/header');
                        $this->data['melding'] = 'Minimale verhoging is 1 euro <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                        $this->loadView('foutmelding', $this->data);
                        $this->loadView('includes/footer');

                    }
                }
                else if($hoogstebod >= 500 && $hoogstebod < 1000) {
                    if($hoogstebod + 5  < $_POST['bodbedrag']) {
                            if ($_COOKIE['gebruikersnaam'] != $_POST['verkoper']) {
                            $bodinformatie = $_POST;
                            $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                            $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                            $modelBod->registreerBod($bodinformatie);
                            echo 'Bod geplaatst';
                            header("location:" .SITE_URL. 'producten/' .$lastSegment );
                            }
                    }
                    else {
                        $this->loadView('includes/header');
                        $this->data['melding'] = 'Minimale verhoging is 5 euro <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                        $this->loadView('foutmelding', $this->data);
                        $this->loadView('includes/footer');

                    }
                }
                else if($hoogstebod >= 1000 && $hoogstebod < 5000) {
                    if($hoogstebod + 10  < $_POST['bodbedrag']) {
                        if ($_COOKIE['gebruikersnaam'] != $_POST['verkoper']) {
                            $bodinformatie = $_POST;
                            $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                            $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                            $modelBod->registreerBod($bodinformatie);
                            echo 'Bod geplaatst';
                            header("location:" .SITE_URL. 'producten/' .$lastSegment );
                        }
                    }
                    else {
                        $this->loadView('includes/header');
                        $this->data['melding'] = 'Minimale verhoging is 10 euro <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                        $this->loadView('foutmelding', $this->data);
                        $this->loadView('includes/footer');
                    }
                }
                else if($hoogstebod >= 5000) {
                    if($hoogstebod + 50  < $_POST['bodbedrag']) {
                        if ($_COOKIE['gebruikersnaam'] != $_POST['verkoper']) {
                            $bodinformatie = $_POST;
                            $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                            $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                            $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                            $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                            $modelBod->registreerBod($bodinformatie);
                            echo 'Bod geplaatst';
                            header("location:" .SITE_URL. 'producten/' .$lastSegment );
                        }
                    }
                    else {
                        $this->loadView('includes/header');
                        $this->data['melding'] = 'Minimale verhoging is 50 euro <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                        $this->loadView('foutmelding', $this->data);
                        $this->loadView('includes/footer');
                    }

            }
                else {
                    echo 'bod lager dan startbod';
                }

            }
            else {
                $this->loadView('includes/header');
                $this->data['melding'] = 'Uw bod is niet geldig, of u probeert uzelf te overbieden. <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                $this->loadView('foutmelding', $this->data);
                $this->loadView('includes/footer');
            }
        }
            else {
                $huidigevoorwerpen = $modelVoorwerp->getVoorwerpid($id);
                while( $hv = sqlsrv_fetch_object( $huidigevoorwerpen )) {
                    $huidigevoorwerp = $hv;
                }
                if($huidigevoorwerp->startprijs < $_POST['bodbedrag']) {
                if ($_SESSION['gebruikersnaam'] != $_POST['verkoper'] ) {
                    $bodinformatie = $_POST;
                    $bodinformatie['bodbedrag'] = str_replace(",",".",$bodinformatie['bodbedrag']);
                    $bodinformatie['bodbedrag'] = round( $bodinformatie['bodbedrag'], 2, PHP_ROUND_HALF_DOWN);
                    $bodinformatie['tijd'] = date("Y-m-d H:i:s");
                    $bodinformatie['gebruiker'] = $_SESSION['gebruikersnaam'];
                    $modelBod->registreerBod($bodinformatie);
                    echo 'Bod geplaatst';
                    header("location:" .SITE_URL. 'producten/' .$lastSegment );
                }
                }
                else {
                    $this->loadView('includes/header');
                    $this->data['melding'] = 'Uw bod is lager dan de startprijs. <a href="'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'">Ga terug</a>';
                    $this->loadView('foutmelding', $this->data);
                    $this->loadView('includes/footer');
                }
            }

        }
        }


}