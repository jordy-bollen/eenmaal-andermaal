<?php
/**
 * klasse voor connectie met de database
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */



class db_connect {

    private $gebruikersnaam;
    private $wachtwoord;
    private $connectie;
    private $connectionInfo;

    /**
     * Constructor
     *
     * @param $database
     * @param $gebruikersnaam
     * @param $wachtwoord
     */
    function __construct($database, $gebruikersnaam, $wachtwoord) {
        $this->connectionInfo = array( "Database"=>$database, "UID"=>$gebruikersnaam, "PWD"=>$wachtwoord);
    }

    /**
     * connect
     *
     * Maakt connectie met de database host
     */
    public function connect() {
        $this->connectie = sqlsrv_connect("mssql.iproject.icasites.nl",$this->connectionInfo) or die(print_r( sqlsrv_errors(), true));

    }


    public function query($query) {
        $resultaat = sqlsrv_query($this->connectie,$query)  or die(print_r( sqlsrv_errors(), true));
        return $resultaat;
    }

    /**
     * disconnectdb
     *
     * disconnect de database
     */
    public function disconnectdb(){
        mysql_close($this->connectdb())
        OR die("Er was een probleem bij het disconnecten van de database.");
    }

} 