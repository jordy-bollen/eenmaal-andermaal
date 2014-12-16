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
        $modelRubrieken = $this->loadModel('rubriek');
        $hoofdrubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['hoofdrubrieken'] = $hoofdrubrieken;
        if(!isset($_POST['submitAdvertentie'])) {
        $this->loadView('includes/header');
        $this->loadView('advertentieplaatsen', $this->data);
        $this->loadView('includes/footer');
        }
        else {

        }
    }

} 