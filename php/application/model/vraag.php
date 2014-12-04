<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 25-11-14
 * Time: 13:44
 */


class vraag extends model{

    /**
     * getVragen
     *
     * Haalt alle vragen op voor het vraag/antwoord veld in het formulier
     *
     * @return bool|resource
     */
    public function getVragen() {
        return $this->database->query('SELECT * FROM Vraag');

    }



} 