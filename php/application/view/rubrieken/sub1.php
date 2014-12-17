<div class="veilingCat">
    <label for='rubriek' class="two column">Subrubriek 1</label><br>
<select  id="subchild1" name="subchild1" class="invoerveld" size="15">
    <?php while( $rubriek = sqlsrv_fetch_object($data['rubrieken'])): ?>
            <option value="<?= $rubriek->rubrieknummer ?>"><?= $rubriek->rubrieknaam; ?></option>
        <?php endwhile; ?>
</select>
</div>