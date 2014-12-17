<?php
/**
 * Author: B & T IT
 * Date: 25-11-14
 * Time: 14:19
 */
class gebruiker extends model{

    /**
     * registreer
     *
     * registreert gebruiker op basis van meegegeven gebruikersdata($_POST)
     *
     * @param array $gebruikersdata
     */
    public function registreer(array $gebruikersdata) {
       //gebruiker wordt toegevoegd aan database
        $gebruikerQuery = "INSERT INTO Gebruiker (gebruikersnaam, voornaam, achternaam, adresregel1, adresregel2, postcode,
plaatsnaam, land, geboorteDatum, mailadres, wachtwoord, vraag, antwoordtekst, verkoper)
        VALUES ('".str_replace("'", "''",$gebruikersdata['gebruikersnaam'])."','".str_replace("'", "''",$gebruikersdata['voornaam'])."', '".str_replace("'", "''",$gebruikersdata['achternaam'])."', '".str_replace("'", "''",$gebruikersdata['adres1'])."', NULL, '".str_replace("'", "''",$gebruikersdata['postcode'])."', '".str_replace("'", "''",$gebruikersdata['plaats'])."', '".str_replace("'", "''",$gebruikersdata['land'])."'
        , '".$gebruikersdata['geboortedatum']."', '".$gebruikersdata['email']."', '".$gebruikersdata['wachtwoord']."', ".$gebruikersdata['vraag']." ,'".$gebruikersdata['antwoord']."', 'niet')";
        $this->database->query($gebruikerQuery);
    }

    public function wijzig($gebruikersdata) {
        $this->database->query("UPDATE Gebruiker SET gebruikersnaam = '".str_replace("'", "''",$gebruikersdata['gebruikersnaam'])."',
        voornaam = '".str_replace("'", "''",$gebruikersdata['voornaam'])."',
        achternaam = '".str_replace("'", "''",$gebruikersdata['achternaam'])."',
        adresregel1 = '".str_replace("'", "''",$gebruikersdata['adres1'])."',
        adresregel2 = '".str_replace("'", "''",$gebruikersdata['adres2'])."',
        postcode = '".str_replace("'", "''",$gebruikersdata['postcode'])."',
        plaatsnaam = '".str_replace("'", "''",$gebruikersdata['plaatsnaam'])."',
        land = '".str_replace("'", "''",$gebruikersdata['land'])."',
        geboorteDatum = '".str_replace("'", "''",$gebruikersdata['geboorteDatum'])."',
        mailadres = '".str_replace("'", "''",$gebruikersdata['mailadres'])."'
        WHERE
        gebruikersnaam = '".str_replace("'", "''",$gebruikersdata['gebruikersnaam'])."'");
    }

    /**
     * login
     *
     * Kijkt of meegegeven gebruikersnaam en wachtwoord voorkomen in de database. returned op basis hiervan true of false
     *
     * @param $gebruikersnaam
     * @param $wachtwoord
     * @return bool
     */
    public function login($gebruikersnaam, $wachtwoord) {
        return $this->database->query("SELECT * FROM Gebruiker WHERE gebruikersnaam = '".str_replace("'","''",$gebruikersnaam)."' and wachtwoord = '".str_replace("'","''",$wachtwoord)."'");

    }

    public function getGebruiker($gebruikersnaam) {
        return $this->database->query("SELECT * FROM Gebruiker WHERE gebruikersnaam = '".$gebruikersnaam."'");
    }

    public function getGebruikerVraag($mailadres) {
        return $this->database->query("SELECT * FROM Gebruiker WHERE mailadres = '".$mailadres."'");
    }

    public function checkMail($email) {
        return $this->database->query("SELECT * FROM Gebruiker WHERE mailadres ='".$email."'");
    }

} 