<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 25-11-14
 * Time: 13:44
 */


class zoeken extends model{

    /**
     * @param $query
     * @return bool|resource
     */
    public function getZoekresultaten($query) {
       return $this->database->query("SELECT * FROM Voorwerp WHERE titel LIKE '%".str_replace("'", "''",$query)."%'");
      
        

    }



} 