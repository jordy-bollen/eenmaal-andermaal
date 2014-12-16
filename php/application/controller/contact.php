<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 5-12-14
 * Time: 15:18
 */

class contact extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $rubrieken;
        if(!isset($_POST['submitContact'])) {
        $this->loadView('includes/header');
        $this->loadView('contact', $this->data);
        $this->loadView('includes/footer');
        }
        else {
           $this->mailUser($_POST);
        }
    }

    private function mailUser($data) {
        $message = wordwrap('Er is een bericht binnengekomen via het contactformulier. dit bericht luidt als volgt:

        ', 70, "\r\n");
        mail($email, 'Registratiecode', $message);
    }
} 