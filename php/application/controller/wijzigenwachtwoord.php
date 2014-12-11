<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class wijzigenwachtwoord extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
    	$modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->loadView('includes/header');
        $this->loadView('wijzigen-wachtwoord', $this->data);
        $this->loadView('includes/footer');
    }
} 