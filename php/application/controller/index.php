<?php

class index extends controller{

     private $modelRubrieken;
    private $rubrieken;
    private $data;
    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->modelRubrieken = $this->loadModel('rubriek');
        $this->rubrieken = $this->modelRubrieken->getHoofdRubrieken();
        $this->data['rubrieken'] = $this->rubrieken;
        $this->loadView('includes/header');
        $this->loadView('index', $this->data);
        $this->loadView('includes/footer');
    }
} 