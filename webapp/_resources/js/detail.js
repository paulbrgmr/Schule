$(function() {
    $.ajax({
        url: "_resources/json/schueler.json"
    }).done(function(data) {
        var schuelerSession = sessionStorage.schueler;
        $.each(data.schueler, function(i, schueler) {
            var schuelerNameClear = schueler.Name.split(' ').join('-');
            if (schuelerSession == schuelerNameClear) {
                // setting the name as param executes infinite page reload
                var pathname = window.location.pathname; // Returns path only
                var schuelerUrl = pathname + '?name=' + schuelerNameClear;
                // window.location.href = schuelerUrl;
                $('#schueler-name').text(schueler.Name);
                if (schueler.Bild != '') {
                    $('<img src="' + schueler.Bild + '">').appendTo($('#portrait-img, #portrait-img-bg'));
                }
                else {
                    $('#portrait-img, #portrait-img-bg').remove();
                    $('#detail-content-nav').addClass('no-img');
                }
                $('<h2>'
                    + schueler.Name
                    + '</h2>'
                    + '<h4>Geburtstag:</h4>'
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
                    + schueler.Telefon.split(' ').join('')
                    + '">'
                    + schueler.Telefon 
                    + '</a>'
                    + '</p>')
                .appendTo('#schueler-phone');

                $('<p>'
                    + schueler.Wohnort
                    + '</p>')
                .appendTo('#schueler-maps');

                // Currently doesn't work
                // var gMaps = schueler.Wohnort.split(' ').join('+');
                // var mapsLat, mapsLng;
                // $.ajax({
                //     url: "https://maps.googleapis.com/maps/api/geocode/json?address=" + gMaps + "&key=AIzaSyAmJfTM5F0gNCWQEBd3dt3u0Eg3oDiWKwY"
                // }).done(function(gMaps) {
                //     $.each(gMaps.results[0].geometry, function(i, geometry) {
                //         if (i == 'location') {
                //             // console.log(geometry.lat, geometry.lng);
                //             mapsLat = geometry.lat;
                //             mapsLng = geometry.lng;
                //         }
                //     })
                // });
                
                $('<p>'
                    + '<a href="mailto:'
                    + schueler.EMail
                    + '?subject=Wir suchen Sie!">'
                    + schueler.EMail
                    + '</a>'
                    + '</p>')
                .appendTo('#schueler-contact');
            }
        });
        function showDetailTabs(tab) {
            $('#detail-content-nav li').each(function() {
                $(this).removeClass('active');
            });
            $('#detail-' + tab).addClass('active');
            if (tab == 'description') {
                $('[id^="detail-"][id$=-content]').hide();
                $('#detail-description-content').show();
            }
            else if (tab == 'phone') {
                $('[id^="detail-"][id$=-content]').hide();
                $('#detail-phone-content').show();
            }
            else if (tab == 'maps') {
                $('[id^="detail-"][id$=-content]').hide();
                $('#detail-maps-content').show();
            }
            else if (tab == 'contact'){
                $('[id^="detail-"][id$=-content]').hide();
                $('#detail-contact-content').show();
            }
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