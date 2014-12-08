<!-- Registratie pagina
==================================================== -->
<div class="thirtheen columns">
    <h1>Verkoper Registreren</h1>
    <form id='registreerVerkoper' action='' method='post'
    accept-charset='UTF-8'>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <div id='registratievelden'>
        <!-- Geslacht: Is alleen mogelijk Dhr. of mevr.
        ==================================================== -->
        <div class="twelve columns verkoperReg">
            <p>LET OP: U moet een rekeningnummer en/of creditcardnummer invullen i.v.m toekomstige afschrijvingen.</p>
            <label for='verificatieMethode'>Verificatie Methode:</label>
            <input type="radio" name="verificatieMethode" value="Post">Post&nbsp;
            <input type="radio" name="verificatieMethode" value="Creditcard">Creditcard<br><br>
            
            <!-- Voornaam, achternaam, gebruikersnaam, e-mailadres, geboortedatum, wachtwoord en bevestig wachtwoord
            ==================================================== -->
           
            <label for='bank'>Banknaam</label>
            <select name="banknaam">
                <option value="ABN Amro">Abn Amro</option>
                <option value="SNS Bank">SNS Bank</option>
            </select>

            <label for='achternaam' >Rekeningnummer</label>
            <input type='text' name='bankrekening' maxlength="255" />
                
            
            <label for='creditcard'>Creditcard nummer</label>
            <input type='text' name='bankrekening' maxlength="255" />
            
            <input type='submit' name='submit' value='Registreer Verkoper' class="verkoperregistratiebutton"/>

            

           
        </div>
 
        
        </div>
    </form> 
</div>