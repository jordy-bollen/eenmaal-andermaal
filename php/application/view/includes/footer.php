<!-- Footer
            ====================================================
            -->



<div class="sixteen columns footer">
    <a href=<"<?= SITE_URL ?>pagina">Sitemap</a> -
    <?php if(!isset($_SESSION['username'])) { ?>
    <a href="<?= SITE_URL ?>registreren">Registreren</a> -
    <?php } ?>
    <a href="<?= SITE_URL ?>algemenevoorwaarden">Algemene Voorwaarden</a> -
    <a href="<?= SITE_URL ?>contact">Contact</a>
    <p>Copyright © 2014 EenmaalAndermaal.nl b.v.</p>
</div>


</body>
</html>