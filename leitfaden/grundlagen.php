<?php 
    include 'content.php';
?>

<div class="content-basics">
    <h1 class="text-center">Grundlagen</h1>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Clientseitige Programmierung</h3>
            <p>Clientseitige Programmierung bedeutet, dass sowohl der HTML Code, als auch der Programmcode auf dem Endgerät des Benutzers ausgeführt werden.</p>
            <!-- <ul class="list-unstyled">
                <li>Clientseitige Programmierung bedeutet, dass sowohl der HTML Code, als auch der Programmcode auf dem Endgerät des Benutzers ausgeführt werden.</li>
            </ul> -->
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Serverseitige Programmierung</h3>
            <p>Bei der serverseitigen Programmierung </p>
        </div>
        <div class="col-md-12">
            <p><a href="http://www.edv-lehrgang.de/serverseitige-clientseitige-programmierung/" target="_blank">Weitere Informationen zur Clientseitigen / Serverseitigen Programmierung</a></p>
        </div>
        <div class="col-xs-12">
            <h3>HTML als zustandsloses Netzwerkprotokoll</h3>
            <p>HTTP ist ein zustandsloses Protokoll. Informationen aus früheren Anforderungen gehen, sobald eine neue Anforderung durchgeführt wurde, verloren.</p>
            <p>Die für die Abfrage einer Seite verwendete Verbindung zwischen dem Rechner des Benutzers und dem Server, auf dem die Website liegt, ist keine dauerhafte Verbindung.
            Sie wird für jede Anfrage neu aufgebaut. Deshalb wird das http-Protokoll als zustandsloses Protokoll bezeichnet.</p>
            <p>Ein zuverlässiges Mitführen von Sitzungsdaten kann erst durch Implementierung von Cookies erreicht werden. Dadurch sind dauerhafte Logins, Warenkörbe, 
            persönliche Einstellungen bei einer Website, usw. möglich.</p>
        </div>
    </div>
</div>


<?php
    include 'footer.php';
?>