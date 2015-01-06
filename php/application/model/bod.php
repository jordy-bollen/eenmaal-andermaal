<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 4-12-14
 * Time: 11:58
 */

class bod extends model{

    public function registreerBod($bodinfo) {
        $this->database->query("
INSERT INTO Bod(voorwerp, bodbedrag, gebruiker, bodmoment) VALUES
(".str_replace("'", "''",$bodinfo['voorwerp']).", ".str_replace("'", "''",$bodinfo['bodbedrag']).", '".str_replace("'", "''",$bodinfo['gebruiker'])."', '".str_replace("'", "''",$bodinfo['tijd'])."')");
    }

    public function getAlleBoden() {
        return $this->database->query("select * from bod");
    }

    public function getBoden($productid) {
       return $this->database->query("SELECT * FROM Bod WHERE voorwerp = ".$productid." ORDER BY bodbedrag DESC");
    }

    public function getHoogsteBod($productid) {
        return $this->database->query("SELECT TOP 1 bodbedrag FROM Bod WHERE voorwerp = ".$productid." ORDER BY bodbedrag DESC");
    }

    public function getBodenGebruiker($gebruikersnaam) {
        return $this->database->query("SELECT * FROM Bod WHERE gebruiker = '".$gebruikersnaam."' ORDER BY bodbedrag DESC");
    }

} 