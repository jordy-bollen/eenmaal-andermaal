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
        $rubrieken2 = $modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken2'] = $rubrieken2;
        if(!isset($_POST['submitContact'])) {
        $this->loadView('includes/header');
        $this->loadView('contact', $this->data);
        $this->loadView('includes/footer');
        }
        else {
           $this->mailUser($_POST);
            $this->data['melding'] = 'Uw bericht is verstuurd. Wij nemen zo snel mogelijk contact met u op.';
            $this->loadView('includes/header');
            $this->loadView('voltooid', $this->data);
            $this->loadView('includes/footer');
        }
    }

    private function mailUser($data) {
        $message = '<html><body>';
        $message .= '<p>Het volgende Bericht is verstuurd via het contact formulier</p>';
        $message .= '<p>Onderwerp: '.$data['onderwerp'].'</p>';
        $message .= '<p>Bericht:</p>';
        $message .= '<p>'.$data['bericht'].'</p>';
        $message .= '<p>Voornaam: '.$data['voornaam'].'</p>';
        $message .= '<p>Achternaam: '.$data['achternaam'].'</p>';
        $message .= '<p>Email: '.$data['email'].'</p>';
        $message .= '<p>Telefoon: '.$data['telefoon'].'</p>';
        $message .= '</body></html>';
        mail('jordy.bollen@outlook.com', 'Contactformulier', $message);
    }
} 