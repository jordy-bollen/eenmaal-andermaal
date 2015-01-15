<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 16-12-14
 * Time: 9:27
 */

class veilingtoevoegen extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        if(isset($_SESSION['loggedIn'])) {
        $modelRubrieken = $this->loadModel('rubriek');
        $hoofdrubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['hoofdrubrieken'] = $hoofdrubrieken;
        if(!isset($_POST['submitRubriek']) && !isset($_POST['submitVeiling'])) {
            $modelGebruiker = $this->loadModel('gebruiker');
            $gebruiker = $modelGebruiker->getGebruiker($_SESSION['gebruikersnaam']);
            while( $gebruikerverkoper = sqlsrv_fetch_object( $gebruiker )) {
                $verkoper = $gebruikerverkoper;
            }
            if($verkoper->verkoper == 1) {
        $this->loadView('includes/header');
        $this->loadView('advertentieplaatsen', $this->data);
        $this->loadView('includes/footer');
            }
            else {
                $this->loadView('includes/header');
                $this->data['melding'] = 'U moet als verkoper zijn geregistreerd';
                $this->loadView('foutmelding', $this->data);
                $this->loadView('includes/footer');
            }
        }
        else if(isset($_POST['submitRubriek'])){
            $this->loadView('includes/header');
            if (isset($_POST['subchild4'])) {
                $this->data['rubriek'] = $_POST['subchild4'];
                $this->loadView('advertentieplaatsenformulier', $this->data);
            }
            else if(isset($_POST['subchild3'])) {
                $this->data['rubriek'] = $_POST['subchild3'];
                $this->loadView('advertentieplaatsenformulier', $this->data);
            }
            else if(isset($_POST['subchild2'])) {
                $this->data['rubriek'] = $_POST['subchild2'];
                $this->loadView('advertentieplaatsenformulier', $this->data);
            }
            else if(isset($_POST['subchild1'])) {
                $this->data['rubriek'] = $_POST['subchild1'];
                $this->loadView('advertentieplaatsenformulier', $this->data);
            }
            else if(isset($_POST['main'])){
                $this->data['rubriek'] = $_POST['main'];
                $this->loadView('advertentieplaatsenformulier', $this->data);
            }
            $this->loadView('includes/footer');
        }
        else if($_POST['submitVeiling']) {
            if(strlen($_POST['titel']) < 2 || !preg_match('_^[0-9a-z]+$_i', $_POST['titel'])) {
                $this->loadView('includes/header');
                $this->data['melding'] = 'Titel moet langer zijn dan 2 karakters en mag alleen letters en cijfers bevatten';
                $this->loadView('foutmelding', $this->data);
                $this->loadView('includes/footer');
            }
            else if($_POST['startprijs'] < 1) {
                $this->loadView('includes/header');
                $this->data['melding'] = 'Startprijs moet groter zijn dan 1';
                $this->loadView('foutmelding', $this->data);
                $this->loadView('includes/footer');
            }
            else {
            define ('SITE_ROOT', realpath(dirname(__FILE__)));


            $modelVoorwerpen = $this->loadModel('voorwerp');
            $_POST['verzendkosten'] = str_replace(",",".",$_POST['verzendkosten']);
            $_POST['startprijs'] = str_replace(",",".",$_POST['startprijs']);
            $modelVoorwerpen->voegVoorwerpToe($_POST);
            $modelVoorwerpen->voegVoorwerpRubriekToe($_POST['rubriek']);

                for($i = 0; $i < 4; $i++) {
                    if(isset($_FILES['afbeelding'.$i]['name']) && !empty($_FILES['afbeelding'.$i]['name']))
                    {
                $new_file_name = strtolower($_FILES['afbeelding'.$i]['name']);
                $modelVoorwerpen->voegAfbeeldingenToe($_POST, $new_file_name);

                move_uploaded_file($_FILES['afbeelding'.$i]['tmp_name'], ROOT.'application\skins\img\producten\\'.$new_file_name);
                    }
            }
        }
        }
    }
        else {
            $this->loadView('includes/header');
            $this->data['melding'] = 'U moet ingelogd zijn';
            $this->loadView('foutmelding', $this->data);
            $this->loadView('includes/footer');
        }
    }

} 