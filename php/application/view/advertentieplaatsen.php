<? $i = 0; ?>
<div class="thirtheen columns"><h3>Advertentie plaatsen</h3>
   <form id="kiesCategorie">
       <div class="veilingCat" >
                <label for='rubriek' class="two column">Rubriek*</label><br>
        <select id="main" name="rubriek" class="invoerveld" size="15">
            <?php while( $rubriek = sqlsrv_fetch_object($data['hoofdrubrieken'])):
                if($rubriek->rubriek == NULL):
                    ?>
                    <option value="<?= $rubriek->rubrieknummer; ?>"><?= $rubriek->rubrieknaam; ?></option>
                <?php endif; endwhile; ?>
        </select>
       </div>
       <div id="sub1" align="center">
           <img src="<?php SKINS_DIR ?>img/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
       </div>
       <div id="sub2" align="center">
           <img src="<?php SKINS_DIR ?>img/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
       </div>
       <div id="sub3" align="center">
           <img src="<?php SKINS_DIR ?>img/loader.gif" style="margin-top:8px; float:left" id="loader" alt="" />
       </div>

                <input type='submit' name='submit' value='Advertentie plaatsen' />
   </form>
    <script type="text/javascript">

        $(document).ready(function() {

            $('#loader').hide();
            $('#show_heading').hide();

            $('#main').change(function(){
                $('#sub1').fadeOut();
                $('#loader').show();
                $.post("childcats", {
                    parent_id: $('#main').val(),
                    field_id: 1
                }, function(response){

                    setTimeout("finishAjax('sub1', '"+escape(response)+"')", 400);
                });
                return false;
            });

            $('#sub1').change(function(){
                $('#sub2').fadeOut();
                $('#loader').show();
                $.post("childcats", {
                    parent_id: $('#sub1').val(),
                    field_id: 2
                }, function(response){

                    setTimeout("finishAjax('sub2', '"+escape(response)+"')", 400);
                });
                return false;
            });

            $('#sub2').change(function(){
                $('#sub3').fadeOut();
                $('#loader').show();
                $.post("childcats", {
                    parent_id: $('#sub2').val()
                }, function(response){

                    setTimeout("finishAjax('sub3', '"+escape(response)+"')", 400);
                });
                return false;
            });
        });

        function finishAjax(id, response){
            $('#loader').hide();
            $('#show_heading').show();
            $('#'+id).html(unescape(response));
            $('#'+id).fadeIn();
        }

        function alert_id()
        {
            if($('#sub').val() == '')
                alert('Please select a sub category.');
            else
                alert($('#sub').val());
            return false;
        }

    </script>

</div>
