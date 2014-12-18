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
        if($_SESSION['loggedIn'] == true) {
        $modelRubrieken = $this->loadModel('rubriek');
        $hoofdrubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['hoofdrubrieken'] = $hoofdrubrieken;
        if(!isset($_POST['submitRubriek']) && !isset($_POST['submitVeiling'])) {
        $this->loadView('includes/header');
        $this->loadView('advertentieplaatsen', $this->data);
        $this->loadView('includes/footer');
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
            if(isset($_FILES['afbeelding1']['name']))
            {
            $modelVoorwerpen = $this->loadModel('voorwerp');
            $modelVoorwerpen->voegVoorwerpToe($_POST);
            $modelVoorwerpen->voegVoorwerpRubriekToe($_POST['rubriek']);
                $new_file_name = strtolower($_FILES['afbeelding1']['name']);
                $modelVoorwerpen->voegAfbeeldingenToe($_POST, $new_file_name);
                define ('SITE_ROOT', realpath(dirname(__FILE__)));
                move_uploaded_file($_FILES['afbeelding1']['tmp_name'], ROOT.'application\skins\img\producten\\'.$new_file_name);
            }
        }
    }
        else {
            echo 'log eerst in voordat je een product kan plaatsen';
        }
    }

} 