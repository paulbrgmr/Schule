<?php 
    include 'content.php';
?>

<div class="content-webserver">
    <h1 class="text-center">Webserver</h1>
    <h3>Webserver - Ein System, das Websites bereitstellt</h3>
            <p>Ein Webserver ist ein Server, der Dokumente an Clients wie z. B. Webbrowser überträgt. 
                Als Webserver bezeichnet man den Computer mit Webserver-Software oder nur die Webserver-Software selbst.</p>
            <p>Typische Webserver-Software ist der Apache Webserver, Nginx oder Abyss.
                Beim Apache Webserver handelt es sich um den wohl bekanntesten Vertreter seiner Art.</p>
            <p>Relativ neuer und erfolgreicher Mitbewerber ist Nginx. Der Grund für den Erfolg liegt darin, dass Nginx bei hoher Last schneller als Apache ist und insbesondere deutlich weniger Speicher verbraucht.
            Zudem gilt es als äußerst robust und überzeugt durch zahlreiche Features und hohe Flexibilität.</p>
            <p><a href="http://www.zdnet.de/41559930/mehr-leistung-im-www-nginx-statt-apache-nutzen/" target="_blank">Weitere Details zu Nginx statt Apache</a></p>
            <h3>Lokale Webentwicklung</h3>
            <p>Für die lokale Webentwicklung sind Prgrammie wie XAMPP oder MAMP verfügbar. Diese basieren auf dem sogenannten LAMP-System.</p>
            <p>LAMP steht für:</p>
            <dl class="lamp dl-horizontal">
                <dt>Betriebssystem:</dt>
                <dd><strong>L</strong>inux</dd>
                <dt>Webserver:</dt>
                <dd><strong>A</strong>pache</dd>
                <dt>Datenbank:</dt>
                <dd><strong>M</strong>ySQL</dd>
                <dt>Programmiersprache:</dt>
                <dd><strong>P</strong>HP</dd>
            </ul>
            <p>Durch die Bereitstellung von Apache und MySQL ist es mit beiden Programmen sehr einfach, lokal einen vollwertigen Webserver zu betreiben.</p>
            <h3>XAMPP</h3>
            <p>Ein Webserver wird in XAMPP über den Reiter "Manage Servers" gestartet werden.</p>
            <img src="_resources/img/xampp-server.png" height="472" width="670" class="img-responsive">
            <p>Im Alltagsgebrauch kann auf "Start all" geklickt werden und es muss nichts weiter konfiguriert werden.</p>
            <p>Für einen schnellen Zugriff auf den Hauptordner kann auf "Open Applications Folder" geklickt werden und dann der Ordner "htdocs" ausgewählt werden.
            Alle Dateien, die sich in diesem Ordner befinden, können im Browser unter <a href="http://localhost/" target="_blank">localhost</a> abgerufen werden.</p>
            <img src="_resources/img/xampp-start.png" height="472" width="670" class="img-responsive">





<p>Als Webclient wird der Anwendungsteil einer Webanwendung bezeichnet, welcher dem Benutzer in einem Webbrowser angezeigt wird und über den Webbrowser bedient werden kann.</p>
    <img src="_resources/img/server.svg" width="125px">
    <img src="_resources/img/client.svg" width="125px">
    <!-- <img src="_resources/img/mac.svg" width="125px"> -->

<!-- <p>
    <sup id="fnref:1">
        <a href="#fn:1" rel="footnote">1</a>
    </sup>
</p>

<div class="footnotes">
    <ol>
        <li class="footnote" id="fn:1">
            <p>footnote.<a href="#fnref:1" title="return to article"> ↩</a><p>
        </li>
    </ol>
</div> -->


</div>


<?php
    include 'footer.php';
?>