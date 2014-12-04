<?php

class index {

    function __constructor() {
        parent::__construct();
    }

    public function index() {
        echo '<a href="'.SITE_URL.'registreren" >Registreren</a><br />';
        echo '<a href="'.SITE_URL.'veilingen" >Veilingen</a><br />';
        echo '<a href="'.SITE_URL.'login" >Inloggen</a><br />';
    }
} 