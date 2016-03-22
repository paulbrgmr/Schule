$(function() {
    $.ajax({
        url: "_resources/json/schueler.json",
    }).done(function(data) {
        var schuelerSession = sessionStorage.schueler;
        $.each(data.schueler, function(i, schueler) {
            var schuelerNameClear = schueler.Name.split(' ').reverse().join('-');
            if(schuelerSession == schuelerNameClear){
                $('#schueler-name').text(schueler.Name);
                $('<img src="' + schueler.Bild + '">').appendTo($('#portrait-img, #portrait-img-bg'));
                $('<h2>'
                    + schueler.Name
                    + '</h2>'
                    + '<p>'
                    + schueler.Geburtstag
                    + '</p>'
                    + '<h4>Ausbildung:</h4>'
                    + '<p>'
                    + schueler.Ausbildung
                    + '</p>'
                    + '<h4>Berufserfahrung:</h4>'
                    + '<p>'
                    + schueler.Berufserfahrung
                    + '</p>')
                .appendTo('#schueler-data');

                $.each(schueler.Fach, function(i, faecher) {
                    $('<li>'
                        + faecher
                        + '</li>')
                    .appendTo('#schueler-faecher');
                })

                $('<p>Mobil: ' 
                    + '<a href="tel:'
                    + schueler.Telefon.split(' ').join('/')
                    + '">'
                    + schueler.Telefon 
                    + '</a>'
                    + '</p>')
                .appendTo('#schueler-phone');

                $('<p>'
                    + schueler.Wohnort
                    + '</p>'
                    + '<div>'
                    + schueler.Karte
                    + '</div>')
                .appendTo('#schueler-maps');

                $('<p>'
                    + '<a href="mailto:'
                    + schueler.EMail
                    + '?subject=Wir suchen Sie!">'
                    + schueler.EMail
                    + '</a>'
                    + '</p>')
                .appendTo('#schueler-contact');
                // $('<img src="bilder/'+item.bild+'" class="schatten" /><h3>' + item.name + '</h3>' + '<p>' + item.untertitel + '</p>' + '<p>' + item.preis + '</p>').appendTo('#gericht-inhalt');
            }
        });
        // $('#detail-description')
        // $('#detail-phone')
        // $('#detail-maps')
        // $('#detail-contact')
        function showDetailTabs(tab) {
            $('#detail-content-nav li').each(function() {
                $(this).removeClass('active');
            });
            $('#detail-' + tab).addClass('active');
            if (tab == 'description') {
                $('#detail-description-content').show();
                $('#detail-phone-content').hide();
                $('#detail-maps-content').hide();
                $('#detail-contact-content').hide();
            }
            else if (tab == 'phone') {
                $('#detail-description-content').hide();
                $('#detail-phone-content').show();
                $('#detail-maps-content').hide();
                $('#detail-contact-content').hide();
            }
            else if (tab == 'maps') {
                $('#detail-description-content').hide();
                $('#detail-phone-content').hide();
                $('#detail-maps-content').show();
                $('#detail-contact-content').hide();
            }
            else if (tab == 'contact'){
                $('#detail-description-content').hide();
                $('#detail-phone-content').hide();
                $('#detail-maps-content').hide();
                $('#detail-contact-content').show();
            }
            // $('#detail-description-content').hide();
            // $('#detail-phone-content').hide();
            // $('#detail-maps-content').hide();
            // $('#detail-contact-content').hide();
        }
        if ($('#detail-description').hasClass('active')) {
            showDetailTabs('description');
        }
        $('#detail-description').on('click', function() {
            showDetailTabs('description');
        })
        $('#detail-phone').on('click', function() {
            showDetailTabs('phone');
        })
        $('#detail-maps').on('click', function() {
            showDetailTabs('maps');
        })
        $('#detail-contact').on('click', function() {
            showDetailTabs('contact');
        })
            
    


            
            
    }); // done
});