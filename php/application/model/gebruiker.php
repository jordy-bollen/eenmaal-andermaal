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
        $gebruikerQuery = "INSERT INTO Gebruiker (gebruikersnaam, voornaam, achternaam, adresregel1, adresregel2, postcode, plaatsnaam, land, geboorteDatum, mailadres, wachtwoord, vraag, antwoordtekst, verkoper)
        VALUES ('".$gebruikersdata['gebruikersnaam']."','".$gebruikersdata['voornaam']."', '".$gebruikersdata['achternaam']."', '".$gebruikersdata['straat']. $gebruikersdata['huisnummer'] ."', NULL, '".$gebruikersdata['postcode']."', '".$gebruikersdata['plaats']."', '".$gebruikersdata['land']."'
        , '".$gebruikersdata['geboortedatum']."', '".$gebruikersdata['email']."', '".$gebruikersdata['wachtwoord']."', ".$gebruikersdata['vraag']." ,'".$gebruikersdata['antwoord']."', 'niet')";
        $this->database->query($gebruikerQuery);
        //telefoonnummer(s) worden toegevoegd aan database
        $telefoonQuery = "INSERT INTO Gebruikerstelefoon (gebruiker, telefoon) VALUES ('".$gebruikersdata['gebruikersnaam']."', '".$gebruikersdata['telefoonnummer']."')";
        $this->database->query($telefoonQuery);
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
        return $this->database->query("SELECT * FROM Gebruiker WHERE gebruikersnaam = '".$gebruikersnaam."' and wachtwoord = '".$wachtwoord."'");

    }

} 