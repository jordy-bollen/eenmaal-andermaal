<form id='register' action='<?php echo SITE_URL ?>registreren' method='post'
      accept-charset='UTF-8'>
<label for='email' >code*:</label>
        <input type='text' name='code' id='code' maxlength="50" /><br />
    <input type='hidden' name='email' value="<?php echo $_POST['email'] ?>" maxlength="50" />
    <input type='submit' class="zoekknop" name='submitValidatie' value='Submit' />
</form>