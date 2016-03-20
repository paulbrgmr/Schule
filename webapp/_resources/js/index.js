$(function() {
    $.ajax({
        url: "_resources/json/schueler.json",
    }).done(function(data) {
        // $('#index-content').empty();
        var schuelerSession = sessionStorage.schueler;
        $.each(data.schueler, function(i, schueler) {
            // i = index
            // schueler = schuelerObject

            // Alle Fächer pro Person
            $.each(schueler.Fach, function(i, fach) {
                // console.log(fach);
            })
        
            // schueler Liste
            var schuelerNameClear = schueler.Name.split(' ').reverse().join('-');
            $('<li class="' + schuelerNameClear + '">'
                +'<a href="detail.html" class="ui-btn ui-btn-icon-right ui-icon-carat-r" data-transition="slide" onClick="javascript:sessionStorage.schueler=\'' + schuelerNameClear + '\';">'
                +'<div>'+schueler.Name+'</div>'
                +'<div>'+schueler.Beruf+'</div>'
                +'<div>'+schueler.Wohnort+'</div>' + '</a></li>')
            .appendTo('#schuelerList');
        });
    });
});