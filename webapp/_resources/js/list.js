$(function() {
    $.ajax({
        url: "_resources/json/schueler.json",
    }).done(function(data) {
        var schuelerSession = sessionStorage.schueler;
        $.each(data.schueler, function(i, schueler) {
            // i = index
            // schueler = schuelerObject
       
            // schueler Liste
            var schuelerNameClear = schueler.Name.split(' ').join('-');
            $('<li class="' + schuelerNameClear + '">'
                +'<a href="detail.php" class="ui-btn ui-btn-icon-right ui-icon-carat-r" data-transiction="slide" onClick="javascript:sessionStorage.schueler=\'' + schuelerNameClear + '\';">'
                +'<div>'+schueler.Name+'</div>'
                +'<div>'+schueler.Beruf+'</div>'
                +'<div>'+schueler.Wohnort+'</div>' + '</a></li>')
            .appendTo('#schuelerList');
        });
    });
});