<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 9-12-14
 * Time: 10:31
 */

class account extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->loadView('includes/header');
        $this->loadView('account', $this->data);
        $this->loadView('includes/footer');
    }
} 