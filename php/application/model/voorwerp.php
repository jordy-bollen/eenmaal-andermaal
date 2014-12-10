<?php
/**
 * Author: B & T IT
 * Date: 25-11-14
 * Time: 14:19
 */

class voorwerp extends model{

    /**
     * getVoorwerpen
     *
     * Haalt alle voorwerpen op uit de database
     *
     * @return mixed
     */
    public function getVoorwerpen() {
    return $this->database->query('SELECT * FROM Voorwerp');

}

    /**
     * getVoorwerpenRubriek
     *
     * Haalt alle voorwerpen op uit de database op basis van de meegegeven rubriek
     *
     * @param $id
     * @return mixed
     */
    public function getVoorwerpenRubriek($id) {
        $rubriekNaam = $this->database->query("SELECT rubrieknaam FROM Rubriek WHERE rubrieknummer = ".$id."");
        while( $obj = sqlsrv_fetch_object( $rubriekNaam )) {
        $rubriekQuery = $obj->rubrieknaam;
    }
        $rubriek = $rubriekQuery;
        return $this->database->query("SELECT p.*
FROM Voorwerp p
   JOIN VoorwerpInRubriek cp on p.voorwerpnummer = cp.voorwerp
WHERE cp.rubriekOpLaagsteNiveau IN (
   SELECT c.rubrieknummer
   FROM rubriek c
   WHERE c.rubrieknaam = '".str_replace("'", "''",$rubriek)."'
   UNION ALL
   SELECT c2.rubrieknummer
   FROM rubriek c
      LEFT JOIN rubriek c2 ON c.rubrieknummer = c2.rubriek
   WHERE c.rubrieknaam = '".str_replace("'", "''",$rubriek)."'
   UNION ALL
   SELECT c3.rubrieknummer
   FROM rubriek c
      LEFT JOIN rubriek c2 ON c.rubrieknummer = c2.rubriek
      LEFT JOIN rubriek c3 ON c2.rubrieknummer = c3.rubriek
   WHERE c.rubrieknaam = '".str_replace("'", "''",$rubriek)."'
   UNION ALL
   SELECT c4.rubrieknummer
   FROM rubriek c
      LEFT JOIN rubriek c2 ON c.rubrieknummer = c2.rubriek
      LEFT JOIN rubriek c3 ON c2.rubrieknummer = c3.rubriek
      LEFT JOIN rubriek c4 ON c3.rubrieknummer = c4.rubriek
   WHERE c.rubrieknaam = '".str_replace("'", "''",$rubriek)."'
   UNION ALL
   SELECT c5.rubrieknummer
   FROM rubriek c
      LEFT JOIN rubriek c2 ON c.rubrieknummer = c2.rubriek
      LEFT JOIN rubriek c3 ON c2.rubrieknummer = c3.rubriek
      LEFT JOIN rubriek c4 ON c3.rubrieknummer = c4.rubriek
      LEFT JOIN rubriek c5 ON c4.rubrieknummer = c5.rubriek
   WHERE c.rubrieknaam = '".str_replace("'", "''",$rubriek)."'
);");
    }



    /**
     * getVoorwerp
     *
     * Haalt specifiek voorwerp op op basis van parameter
     *
     * @param $titel
     * @return mixed
     */
    public function getVoorwerp($id) {
        return $this->database->query("SELECT * FROM Voorwerp WHERE voorwerpnummer = '".$id."'");
    }

    public function getAflopendeVoorwerpen() {
        return $this->database->query("select * from Voorwerp ORDER BY eindmoment ASC");
    }


} 