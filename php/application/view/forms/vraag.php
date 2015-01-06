<div class="thirteen columns">
    Geef antwoord op de volgende vraag:
<?php
echo $data['vragen']->tekstVraag;
 ?>
<form id='vraag' action='<?php echo SITE_URL ?>vergeten' method='post'
      accept-charset='UTF-8'>
<label for='vraag' class="three columns" >Geheime vraag*</label>
<input type="text" name="antwoord" />
    <input type="hidden" name="email" value="<?= $_POST['email'] ?>" />
    <input type='submit' class="zoekknop" name='submitVraag' value='Submit' />
    </form></div>