<?php 
    include 'content.php';
?>

<div class="content-basics">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Grundlagen</h1>
            <p>Um sich mit datenbankgestützten Webanwendungen vertraut machen zu können, 
ist es wichtig grundlegende Begriffe und Vorgänge zu klären.</p>
<p>Von den unterschiedlichen Programmierungen bis hin zu AJAX und Cookies.</p>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <hr class="primary">
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Serverseitige Programmierung</h3>
            <p>Serverseitige Programmierung bedeutet, dass die auf einem Server hinterlegte Website erst durch einen Interpreter zb PHP Interpreter läuft und im Nachhinein wieder über den Server dem Benutzer ausgespielt wird. Sie enthält am Ende nur HTML Code.</p>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Clientseitige Programmierung</h3>
            <p>Clientseitige Programmierung bedeutet, dass sowohl der HTML Code, als auch der Programmcode auf dem Endgerät des Benutzers ausgeführt werden.</p>
        </div>
        <div class="col-md-12">
            <a href="http://www.edv-lehrgang.de/serverseitige-clientseitige-programmierung/" target="_blank">Weitere Informationen zur Clientseitigen / Serverseitigen Programmierung</a>
        </div>
        <div class="col-xs-12">
            <h3>Webanwendung-Definition</h3>
            <p>Website, deren Seiteninhalt noch nicht oder nur zum Teil festgelegt ist. Der endgültige Inhalt einer Seite wird erst festgelegt, wenn der Besucher die Seite vom Webserver anfordert.</p>
            <p>z.B. Amazon (Inhalt finden), CNN (Aktualisierung der Inhalte)</p>
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
        <div class="col-xs-12">
            <h3>Webanwendung Funktionsweise</h3>
            <p>Bei der Funktionsweise von Webanwendungen muss man sich zuerst den Unterschied von <strong>statischen und dynamischen Websites</strong> vor Augen führen.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="_resources/img/grundlagen/ds_process_static.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h4>Statische Websites</h4>
            <p>Der gesamte HTML-Code der Seite wird vom Designer geschrieben, bevor die Seite auf dem Server abgelegt wird. </p>
            <p>Da der HTML-Code sich nicht mehr ändert, wenn die Seite einmal auf dem Server abgelegt wurde, bezeichnet man eine solche Seite als statisch.</p>
            <p>- Sie wird ohne Änderungen an den Browser gesendet.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img src="_resources/img/grundlagen/ds_process_dynamic.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h4>Dynamische Websites</h4>
            <p>Die dynmische Seite wird an eine spezielle Software weitergeleitet, die für die Fertigstellung der Seite zuständig ist. Diese Software wird als <strong>Anwendungsserver</strong> bezeichnet.</p>
            <p>Der Anwendungsserver liest den Code auf der Seite, stellt die Seite gemäß den Anweisungen im Code fertig und entfernt dann den Code aus der Seite. Daraus ergibt sich eine statische Seite, die der Anwendungsserver an den Webserver zurückgibt. Der Webserver sendet die Seite anschließend an den Browser.</p>
            <strong>ASP.NET bzw ASP und JSP sind zudem Technologien um dynamische Websites serverbasiert zu erstellen, jedoch kommt in über 80% der Fälle PHP zum Einsatz.</strong>
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>HTTP und Cookies</h3>
            <p>Was HTTP (Hypertext Transfer Protocol) als zustandsloses Netzwerkprotokoll mit Cookies zu tun haben soll 
und was dir das für Vorteile bieten kann erfährst du hier.</p>
        </div>
        <div class="col-md-6">
            <img src="_resources/img/grundlagen/grafik_cookie.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-6">
            <h4>HTTP</h4>
            <p>Die für die Abfrage einer Seite verwendete Verbindung zwischen dem Rechner des Benutzers und dem Server, auf dem die Website liegt, ist keine dauerhafte Verbindung. Sie wird für jede Anfrage neu aufgebaut.</p>
            <p>Daher spricht man von einem Zustandslosem Protokoll.</p>
            <p>Ein zuverlässiges Mitführen von Sitzungsdaten kann erst durch Implementierung von Cookies erreicht werden. Dadurch sind dauerhafte Logins, Warenkörbe, persönliche Einstellungen bei einer Website, usw. möglich.</p>
            <p>Der Client schickt einen HTTP Request, der Server gibt eine HTTP Response inkl. einem neuen Cookie zurück. In diesem Cookie sind Informationen gespeichert, die der Seitenbetreiber selbst festlegen kann. Beim nächsten HTTP Request vom Client schickt der Client den Request inkl. den Cookie Informationen an den Server / Seitenbetreiber. Somit weiß dieser, wer den Request abgeschickt hat und gibt die entsprechende Response zurück.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <hr>
        </div>
        <div class="col-xs-12">
            <h3>Datenaustausch mit AJAX</h3>
            <p>AJAX beschreibt ein Konzept des asynchronen Datenaustauschs zwischen Browser und Server.</p>
            <p>Wer kennt nicht die Anzeige der Suchvorschläge in Google ohne überhaupt die Enter Taste betätigt zu haben?</p>
        </div>
        <div class="col-sm-6">
            <img src="_resources/img/grundlagen/AJAX_Bild.png" alt="" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <h4>Asynchroner Datenaustausch</h4>
            <p>Zum Vergleich: bei einem synchronen Datenaustausch wechseln sich Benutzeraktivität und Verarbeitung auf dem Server ab.</p>
            <p>z.B. reguläre Suche auf Suchmaschinen mit Verwendung der Eingabetaste.</p>
            <p><strong>asynchroner Datenaustausch:</strong> der Benutzer kann weiter arbeiten, während im Hintergrund Daten ausgetauscht werden, nicht die gesamte Seite sondern nur die relevanten Teile werden neu geladen.</p>
            <p>z.B. Anzeige von Suchergebnissen in Goolge während der Eingabe im Suchfeld</p>
            <p>Mit XMLHttpRequest wird dieses Vorgehen möglich, mehr dazu unter: <a href="https://wiki.selfhtml.org/wiki/JavaScript/XMLHttpRequest" title="HTML Request">https://wiki.selfhtml.org/wiki/JavaScript/XMLHttpRequest</a></p>
            <a href="form/ajax-form.php" class="btn btn-primary">AJAX Beispiel</a>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>