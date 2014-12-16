<div class="veilingCat">
    <label for='rubriek' class="two column">Rubriek*</label><br>
<select  id="sub3" name="rubriek" class="invoerveld" size="15">
    <?php while( $rubriek = sqlsrv_fetch_object($data['rubrieken'])): ?>
            <option value="<?= $rubriek->rubrieknummer ?>"><?= $rubriek->rubrieknaam; ?></option>
        <?php endwhile; ?>
</select>
</div>