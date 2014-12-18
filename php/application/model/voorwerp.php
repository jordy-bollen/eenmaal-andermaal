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

    public function getVoorwerpHoogsteBod() {
        return $this->database->query("SELECT v.voorwerpnummer, MAX(b.bodbedrag) AS hoogste FROM Voorwerp v INNER JOIN bod b ON b.voorwerp = v.voorwerpnummer GROUP BY ALL v.voorwerpnummer");
    }

    public function getPopulaireVoorwerpen() {
        return $this->database->query("SELECT top(3) v.voorwerpnummer, v.titel, v.eindmoment, count(b.bodbedrag) AS aantalboden FROM Voorwerp v INNER JOIN bod b ON b.voorwerp = v.voorwerpnummer GROUP BY v.voorwerpnummer, v.titel, v.eindmoment, v.veilingGesloten HAVING v.veilingGesloten = 'niet' ORDER BY count(b.bodbedrag) DESC");
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
     * Methode om voorwerp op te halen op basis van id
     *
     * @param $id
     * @return bool|resource
     */
    public function getVoorwerp($id) {
        return $this->database->query("SELECT * FROM Voorwerp WHERE voorwerpnummer = '".$id."'");
    }

    public function getAflopendeVoorwerpen() {
        return $this->database->query("select TOP(3) * from Voorwerp WHERE veilingGesloten = 'niet' ORDER BY eindmoment ASC");
    }

    public function voegVoorwerpToe($voorwerp) {
        $this->database->query("INSERT INTO Voorwerp(titel, beschrijving, startprijs, betalingswijze, betalingsinstructie, plaatsnaam,
            land, looptijd, startmoment, verzendkosten, verzendinstructies, verkoper) VALUES
        ('".$voorwerp['titel']."', '".$voorwerp['beschrijving']."', ".$voorwerp['startprijs'].", '".$voorwerp['betalingswijze']."',
            '".$voorwerp['betalingsinstructie']."', '".$voorwerp['plaatsnaam']."', 'nederland', ".$voorwerp['looptijd'].", '".date("Y-m-d H:i:s")."', ".$voorwerp['verzendkosten'].", '".$voorwerp['verzendinstructies']."', '".$_SESSION['gebruikersnaam']."')");

    }

    public function voegVoorwerpRubriekToe($categorie) {
        $queryVoorwerp = $this->database->query("select TOP(1) * from Voorwerp ORDER BY voorwerpnummer DESC");
        while( $voorwerp = sqlsrv_fetch_object($queryVoorwerp)) {
            $voorwerpVoorId = $voorwerp;
        }
        $this->database->query("INSERT INTO VoorwerpInRubriek(voorwerp, rubriekOpLaagsteNiveau) VALUES
        (".$voorwerpVoorId->voorwerpnummer.", ".$categorie.")");

    }

    public function voegAfbeeldingenToe($product, $voorwerpafbeelding) {
        if(!empty($product)) {
            $queryVoorwerp = $this->database->query("select TOP(1) * from Voorwerp ORDER BY voorwerpnummer DESC");
            while( $voorwerp = sqlsrv_fetch_object($queryVoorwerp)) {
                $voorwerpVoorId = $voorwerp;
            }
            $this->database->query("INSERT INTO Bestand(filenaam, voorwerp) VALUES('".$voorwerpafbeelding."',".$voorwerpVoorId->voorwerpnummer.")");
        }
    }

} 