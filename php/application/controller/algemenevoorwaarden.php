<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class algemenevoorwaarden extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        $this->data['rubrieken2'] = $rubrieken2;
        $this->loadView('includes/header');
        $this->loadView('voorwaarden',$this->data);
        $this->loadView('includes/footer');
    }
} 