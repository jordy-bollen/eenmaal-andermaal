<?php
/**
 * Model voor producten
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */
class model extends db_connect{

    protected $database;
    function __construct() {
        $this->database = new db_connect("IProject", "sa", "Bnm789uj");
        $this->database->connect();

    }




}