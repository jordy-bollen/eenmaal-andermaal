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
                    
        if(strlen($_POST['query']) >= $min_length)
        {
      $this->data['zoekresultaten'] = $modelZoeken->getZoekresultaten($_POST['query']); 
        
        if(count($this->data['zoekresultaten']) > 0)
        {
             $this->loadView('zoekresultaten', $this->data);   
        }
        
        else
        {
            echo "Helaas, geen producten gevonden!";
        }  
        
        
        
       
    }
         $this->loadView('includes/footer');
  } 
}