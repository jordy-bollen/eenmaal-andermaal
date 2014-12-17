<div class="veilingCat">
    <label for='rubriek' class="two column">Subrubriek 3</label><br>
<select  id="subchild3" name="subchild3" class="invoerveld" size="15">
    <?php while( $rubriek = sqlsrv_fetch_object($data['rubrieken'])): ?>
            <option value="<?= $rubriek->rubrieknummer ?>"><?= $rubriek->rubrieknaam; ?></option>
        <?php endwhile; ?>
</select>
</div>