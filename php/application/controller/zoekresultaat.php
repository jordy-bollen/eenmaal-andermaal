<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 9-12-14
 * Time: 12:51
 */

class zoekresultaat extends controller{

    function __constructor() {
        parent::__construct();

    }

    public function index() {
        $this->loadView('includes/header');
        $min_length = 1;
        $modelZoeken = $this->loadModel('zoeken');
         $modelVoorwerp = $this->loadModel('voorwerp');
        $modelRubrieken = $this->loadModel('rubriek');
        $modelBestanden = $this->loadModel('bestand');
        $rubrieken = $modelRubrieken->getHoofdRubrieken();
        $alleRubrieken = $modelRubrieken->getAlleRubrieken();
        $alleVoorwerpen = $modelVoorwerp->getVoorwerpen(1000);
        $hoogsteboden = $modelVoorwerp->getVoorwerpHoogsteBod();
        $afbeeldingen = $modelBestanden->getAfbeeldingen();

        $this->data['veilingen'] = $alleVoorwerpen;
        $this->data['hoogsteboden'] = $hoogsteboden;
        $this->data['allerubrieken'] = $alleRubrieken;
        $this->data['rubrieken'] = $rubrieken;
        $this->data['afbeeldingen'] = $afbeeldingen;
    
                    
        if(strlen($_POST['query']) >= $min_length)
        {
      $this->data['zoekresultaten'] = $modelZoeken->getZoekresultaten($_POST['query']); 
        
        if(count($this->data['zoekresultaten']) > 0)
        {
             $this->loadView('zoekresultaten', $this->data);   
        }
        
        else
        {
            $this->loadView('niksgevonden');
        }  
        
        
        
       
    }
         
        $this->loadView('includes/footer');
  } 
}