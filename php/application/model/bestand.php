<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 6-12-14
 * Time: 13:51
 */

class bestand extends model{

    public function getAfbeelding($id) {
        return $this->database->query("SELECT * FROM Bestand WHERE voorwerp = ".$id."");
    }

    public function getAfbeeldingen() {
        return $this->database->query("SELECT * FROM Bestand");
    }

} 