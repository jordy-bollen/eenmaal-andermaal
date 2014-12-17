<div class="veilingCat">
    <label for='rubriek' class="two column">Subrubriek 2</label><br>
<select  id="subchild2" name="subchild2" class="invoerveld" size="15">
    <?php while( $rubriek = sqlsrv_fetch_object($data['rubrieken'])): ?>
            <option value="<?= $rubriek->rubrieknummer ?>"><?= $rubriek->rubrieknaam; ?></option>
        <?php endwhile; ?>
</select>
</div>