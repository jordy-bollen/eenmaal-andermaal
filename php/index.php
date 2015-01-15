<?php
/**
 * De basis van het framework.
 *
 * @author     B & T IT
 * @version    Versie 1.0
 * ...
 */

/**
 * zet de tijdzone
 */
date_default_timezone_set('Europe/Amsterdam');
?>
<script type="text/javascript">
$(document).ready(function(){
    setInterval(function() {
        jQuery.ajax({
            type: "GET",
            url: "sessioncheck.php",
            dataType:"json",
            success:function(response){
            if (response) {
                window.location.href = 'check.php';
            }
            else {
                // Process the expected results...
            }
        }

        });
    }, 30000);
});
</script>
<?php
/**
 * Definieer directory seperator en root van de applicatie
 */
define('DS', DIRECTORY_SEPARATOR);
//define root
define("ROOT", __DIR__ ."/");
//define site url
define("SITE_URL", "http://localhost/eenmaal-andermaal/php/");
//styles
define("SKINS_DIR", SITE_URL . "application/skins/");
define("PICS_DIR", SITE_URL . "http://iproject1.icasites.nl/pics");
define("VAL_DIR", SITE_URL . "application/validation/");
define("MAIL_DIR", ROOT . "mail/Mail/");
/**
 * alle segmenten achter de base url worden opgeslagen
 */
if(isset($_GET['url'])) $url = $_GET['url'];
else $url = 'index';

/**
 * laadt benodigde bestanden in voor het runnen van de applicatie
 */
require_once (ROOT . DS . 'system' . DS . 'page_setup.php');





