Geef antwoord op de volgende vraag:
<?php while( $vr = sqlsrv_fetch_object( $data['vragen'] )) {
echo $vr->tekstVraag;
} ?>
<form id='vraag' action='<?php echo SITE_URL ?>vergeten' method='post'
      accept-charset='UTF-8'>
<label for='vraag' class="three columns" >Geheime vraag*</label>
<input type="text" />
    <input type='submit' name='submitVraag' value='Submit' />
    </form>