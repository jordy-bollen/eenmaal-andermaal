<div class="veilingCat">
    <label for='rubriek' class="two column">Subrubriek 4</label><br>
<select  id="subchild4" name="subchild4" class="invoerveld" size="15">
    <?php while( $rubriek = sqlsrv_fetch_object($data['rubrieken'])): ?>
            <option value="<?= $rubriek->rubrieknummer ?>"><?= $rubriek->rubrieknaam; ?></option>
        <?php endwhile; ?>
</select>
</div>