<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class feedback extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken2'] = $rubrieken2;
        if(isset($_GET['verkoper']) && isset($_GET['gebruiker'])) {
            $this->data['verkoper'] = $_GET['verkoper'];
            $this->data['gebruiker'] = $_GET['gebruiker'];
        $this->loadView('includes/header');
        $this->loadView('feedback', $this->data);
        $this->loadView('includes/footer');
        }
    }
} 