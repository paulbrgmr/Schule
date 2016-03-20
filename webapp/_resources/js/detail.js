$(function() {
    $.ajax({
        url: "_resources/json/schueler.json",
    }).done(function(data) {
        // $('#detail-content').empty();
        var schuelerSession = sessionStorage.schueler;
        $.each(data.schueler, function(i, schueler) {
            var schuelerNameClear = schueler.Name.split(' ').reverse().join('-');
            if(schuelerSession == schuelerNameClear){
                $('<h1>' + schueler.Name + '</h1>'
                + '<p>' + schueler.Geburtstag + '</p>'
                + '<p>' + schueler.Telefon + '</p>'
                + '<p>' + schueler.EMail + '</p>'
                + '<p>' + schueler.Wohnort + '</p>')
                .appendTo('#schueler-data');
                // $('<img src="bilder/'+item.bild+'" class="schatten" /><h3>' + item.name + '</h3>' + '<p>' + item.untertitel + '</p>' + '<p>' + item.preis + '</p>').appendTo('#gericht-inhalt');
            }
        });
        // console.log('detail');
    });
});