$(function() {
    $.ajax({
        url: "_resources/schueler.json",
    }).done(function(data) {
        $.each(data.schueler, function(i, item) {
            $('<li class="' + item.Name + '">' + item.Name + item.Geburtstag + item.Beruf + item.Kontakt + '</li>').appendTo('#schuelerList');
        });
        for (var schuelerArray in schueler) {
            for (var schuelerObject in schueler[schuelerArray]) {
                var schuelerDataPath    = schueler[schuelerArray][schuelerObject],
                    schuelerName        = schuelerDataPath.Name, 
                    schuelerGeburtstag  = schuelerDataPath.Geburtstag,
                    schuelerBeruf       = schuelerDataPath.Beruf,
                    schuelerKontakt     = schuelerDataPath.Kontakt,
                    schuelerAllData     = [schuelerName, schuelerGeburtstag, schuelerBeruf, schuelerKontakt],
                    schuelerNameClass   = schuelerName.split(' ').join('-');

                // $.each(schueler, function(i, data) {
                //     $('<li class="' + schuelerNameClass + '">' + schuelerAllData[data.Name] + '</li>').appendTo('#schuelerList');
                //     console.log(schuelerAllData);
                // })


// $.getJSON('gerichte.json', function(data) {
//     $.each(data.gerichte, function(i,item){
//         $('<li><a href="gericht-detail.html" data-transition="slide" onClick="javascript:sessionStorage.gericht=\''+item.name+'\';"><img src="bilder/'+item.bild+'" /><h3>' + item.name + '</h3>' + '<p>' + item.untertitel + '</p></a></li>').appendTo('#gerichteliste');
//     });
//     $('#gerichteliste').listview('refresh');
// });
                    // schuelerNameClass.val()
                    //         .replace(/ä/g,"ae")
                    //         .replace(/ö/g,"ae")
                    //         .replace(/ü/g,"ae")
                    //         .replace(/ß/g,"ae")

                    // console.log(schuelerNameClass);

                // $.each(schueler, function() {
                //     $('<ul class="' + schuelerNameClass + '"></ul>').appendTo('#schuelerList');
                // });

                // var ListName = $('<ul class="' + schuelerNameClass + '">');



                // console.log($('<ul class="' + schuelerNameClass + '">'));
                // console.log(schuelerAllData);





                // console.log(schuelerAllData);

                // $('<ul class="' + schuelerNameClass + '">').$.each(schuelerAllData, function(i) {
                //     $('<li>' + schuelerAllData[i] + '</li>')
                // });

                // $.each(schuelerAllData, function(i) {
                //     $('<li>' + schuelerAllData[i] + '</li>').appendTo('#schuelerList');
                // });
            }
        }
    });
});