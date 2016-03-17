$(function() {
    $.ajax({
        url: "_resources/schueler.json",
    }).done(function(result) {
        var schueler = result;
        // console.log(schueler);
        for (var schuelerArray in schueler) {
            for (var schuelerObject in schueler[schuelerArray]) {
                var schuelerDataPath    = schueler[schuelerArray][schuelerObject],
                    schuelerName        = schuelerDataPath.Name, 
                    schuelerGeburtstag  = schuelerDataPath.Geburtstag,
                    schuelerBeruf       = schuelerDataPath.Beruf,
                    schuelerKontakt     = schuelerDataPath.Kontakt,
                    schuelerAllData     = [schuelerName, schuelerGeburtstag, schuelerBeruf, schuelerKontakt];

                var listWrapper = $('#demo')
                $.each(schuelerAllData, function(i) {
                    var li = $('<li/>')
                        .text(schuelerAllData[i])
                        .appendTo(listWrapper);
                });
                console.log(schuelerAllData);
            }
        }
    });
});