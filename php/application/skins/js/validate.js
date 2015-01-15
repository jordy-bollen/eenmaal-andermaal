



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
            
            geboortedatum: {dateFormat: true},
            code: "required",
            antwoord: "required",
            adres1: "required",
            postcode: "required",
            woonplaats: "required",
            geboortedatum: {
                required: true,
                date: true
            },
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
            geboortedatum: "Voer een geldige datum in",
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

    $("#registreerVerkoper").validate({

        // Specify the validation rules
        rules: {
            creditcard: "required"
        },

        // Specify the validation error messages
        messages: {
            creditcard: "Voer een creditcardnummer in"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

    $("#contactform").validate({

        // Specify the validation rules
        rules: {
            voornaam: "required",
            achternaam: "required",
            email: "required",
            onderwerp: "required",
            bericht: "required"
        },

        // Specify the validation error messages
        messages: {
            voornaam: "Voer uw voornaam in",
            achternaam: "Voer uw achternaam in",
            email: "Voer uw email in",
            onderwerp: "Voer een onderwerp in",
            bericht: "Voer uw bericht in"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

<<<<<<< HEAD
    $("#bankgegevens").validate({

        // Specify the validation rules
        rules: {
            rekeningnummer: {
                required: true,
                number: true
            },
            creditcardnummer: {
                required: true,
                number: true
            }
        },

        // Specify the validation error messages
        messages: {
            rekeningnummer: {
                required: "Dit veld is verplicht",
                number: "rekeningnummer moet een nummeriek getal zijn"
            },
            creditcardnummer: {
                required: "Dit veld is verplicht",
                number: "Creditcardnummer moet een nummeriek getal zijn"
            }
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

=======
>>>>>>> edd54b1da70d9ed3cf6ecaffdb7d67c297a996c6

    $("#submitRegistratie").click(function(){
        $(".error").hide();
        var hasError = false;
        var passwordVal = $("#wachtwoord").val();
        var checkVal = $("#wachtwoordbev").val();
        if (passwordVal == '') {
            $("#wachtwoord").after('Voer een wachtwoord in.');
            hasError = true;
        } else if (checkVal == '') {
            $("#wachtwoordbev").after('Voer uw wachtwoord nog een keer in.');
            hasError = true;
        } else if (passwordVal != checkVal ) {
            $("#wachtwoordbev").after('wachtwoorden niet hetzelfde.');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});