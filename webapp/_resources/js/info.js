$(function() {
    $.ajax({
        url: "_resources/json/faecher.json",
    }).done(function(data) {
        // var schuelerSession = sessionStorage.schueler;
        $.each(data.faecher, function(i, faecherList) {
            // i = index
            // faecherList = faecherObject
            // console.log(faecherList.Fachname, faecherList.Fachbeschreibung);
        
            // Faecher Liste
            $('<dl>'
                + '<dt>'
                + faecherList.Fachname
                + ': <dt>'
                + '<dd>'
                + faecherList.Fachbeschreibung
                + '<dd>'
                + '</dl>')
            .appendTo('#faecher-list')
        });
        $.each(data.wahlmodule, function(i, moduleList) {
            // i = index
            // faecherList = faecherObject
            // console.log(faecherList.Fachname, faecherList.Fachbeschreibung);
        
            // Faecher Liste
            $('<dl>'
                + '<dt>'
                + moduleList.Modulname
                + ': <dt>'
                + '<dd>'
                + moduleList.Modulbeschreibung
                + '<dd>'
                + '</dl>')
            .appendTo('#module-list')
        });
    });
});