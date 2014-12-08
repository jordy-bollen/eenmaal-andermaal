$(function() {

    // Setup form validation on the #register-form element
    $("#register").validate({

        // Specify the validation rules
        rules: {
            gebruikersnaam: "required",
            voornaam: "required",
            achternaam: "required",
            email: {
                required: true,
                email: true
            },
            wachtwoord: {
                required: true,
                minlength: 5
            },
            code: "required",
            antwoord: "required",
            adres1: "required",
            postcode: "required",
            woonplaats: "required",
            telefoonnummer: "required"
        },

        // Specify the validation error messages
        messages: {
            gebruikersnaam: "Voer een gebruikersnaam in",
            voornaam: "Voer een voornaam in",
            achternaam: "Voer een achternaam in",
            wachtwoord: {
                required: "Voer een wachtwoord in",
                minlength: "Wachtwoord moet minstens 5 karakters lang zijn"
            },
            email: "Voer een geldig e-mailadres in",
            code: "Voer een geldige code in",
            antwoord: "Voer een antwoord in",
            adres1: "Voer een adres in",
            postcode: "Voer een postcode in",
            woonplaats: "Voer een woonplaats in",
            telefoonnummer: "Voer een telefoonnummer in"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

    $("#bod").validate({

        // Specify the validation rules
        rules: {
            bodbedrag: "required"
        },

        // Specify the validation error messages
        messages: {
        bodbedrag: "Voer een bod in"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

    $("#submitRegistratie").click(function(){
        $(".error").hide();
        var hasError = false;
        var passwordVal = $("#wachtwoord").val();
        var checkVal = $("#wachtwoordbev").val();
        if (passwordVal == '') {
            $("#wachtwoord").after('<label class="error">Voer een wachtwoord in.</span>');
            hasError = true;
        } else if (checkVal == '') {
            $("#wachtwoordbev").after('<label class="error">Voer uw wachtwoord nog een keer in.</span>');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#wachtwoordbev").after('<label class="error">wachtwoorden niet hetzelfde.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });

});