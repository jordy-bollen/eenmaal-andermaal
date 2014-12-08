<?php
if(preg_match('^[a-zA-Z0-9]+$', $_POST['gebruikersnaam'])) {
 echo 'true';
}
else {
    echo 'false';
}