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
        $gebruikerQuery = "INSERT INTO Gebruiker (gebruikersnaam, voornaam, achternaam, geslacht, adresregel1, adresregel2, postcode,
plaatsnaam, land, geboorteDatum, mailadres, wachtwoord, vraag, antwoordtekst)
        VALUES ('".str_replace("'", "''",$gebruikersdata['gebruikersnaam'])."','".str_replace("'", "''",$gebruikersdata['voornaam'])."', '".str_replace("'", "''",$gebruikersdata['achternaam'])."', '".$_POST['aanhef']."' ,'".str_replace("'", "''",$gebruikersdata['adres1'])."', NULL, '".str_replace("'", "''",$gebruikersdata['postcode'])."', '".str_replace("'", "''",$gebruikersdata['plaats'])."', '".str_replace("'", "''",$gebruikersdata['land'])."'
        , '".$gebruikersdata['geboortedatum']."', '".$gebruikersdata['email']."', '".$gebruikersdata['wachtwoord']."', ".$gebruikersdata['vraag']." ,'".$gebruikersdata['antwoord']."')";
        $this->database->query($gebruikerQuery);
    }

    public function voegtelefoonnummerstoe($telefoonnummers, $gebruikersnaam) {
        for($i = 0; $i < count($telefoonnummers['telefoonnummer']); $i++) {
            $this->database->query("INSERT INTO Gebruikerstelefoon (gebruiker, telefoon) VALUES ('".$gebruikersnaam."', '".$telefoonnummers['telefoonnummer'][$i]."')");
        }
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

    public function getGebruikerTelefoon() {
        return $this->database->query("SELECT * FROM Gebruikerstelefoon");
    }

    public function checkMail($email) {
        return $this->database->query("SELECT * FROM Gebruiker WHERE mailadres ='".$email."'");
    }

    public function registreerVerkoper($verkoperdata) {
        $gebruikerQuery = "INSERT INTO Verkoper (gebruiker, bank, bankrekening, controleOptie, creditcard)
        VALUES ('".$_SESSION['gebruikersnaam']."','".$verkoperdata['banknaam']."', '".$verkoperdata['bankrekening']."', '".$verkoperdata['verificatieMethode']."', '".$verkoperdata['creditcard']."')";
        $this->database->query($gebruikerQuery);
    }

    public function wijzigenPersoonsGegevens($gebruikersdata) {
        $query = "UPDATE Gebruiker
SET voornaam='".$gebruikersdata['voornaam']."', achternaam='".$gebruikersdata['achternaam']."', mailadres='".$gebruikersdata['email']."', adresregel1 = '".$gebruikersdata['adres1']."', adresregel2='".$gebruikersdata['adres2']."', postcode='".$gebruikersdata['postcode']."', plaatsnaam='".$gebruikersdata['plaats']."', land='".$gebruikersdata['land']."'
WHERE gebruikersnaam='".$_SESSION['gebruikersnaam']."'";
        $this->database->query($query);
    }

    public function wachtwoordWijzigen($gebruikersnaam, $wachtwoord) {
        $query = "UPDATE gebruiker SET wachtwoord='".$wachtwoord."' WHERE gebruikersnaam='".$gebruikersnaam."'";
        $this->database->query($query);
    }

    public function wijzigVerkoper($gebruikersdata) {
        $query = "UPDATE Verkoper SET bank='".$gebruikersdata['bank']."', bankrekening='".$gebruikersdata['rekeningnummer']."', creditcard='".$gebruikersdata['creditcardnummer']."'
         WHERE gebruiker='".$_SESSION['gebruikersnaam']."'";
        $this->database->query($query);
    }

} 