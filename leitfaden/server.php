<?php 
    include 'content.php';
?>
</div>
<div class="bg-wrapper">
    <div class="server-bg-img bg-img">
        <h1 class="text-center bg-headline">Webserver</h1>
    </div>
</div>
<div class="container content-webserver content-container">
    <p>Webserver oder lokaler Server? Und wozu brauche ich dafür PHP?</p>
    <p>Den Unterschied zwischen Webserver und lokalem lernst du u.a. hier:</p>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <hr class="primary">
        </div>
        <div class="col-sm-6">
            <h4>Webserver</h4>
            <p>Ein Webserver ist ein Server, der Dokumente an Clients wie z. B. Webbrowser überträgt. Als Webserver bezeichnet man den Computer mit Webserver-Software oder nur die Webserver-Software selbst.</p>
            <p>Typische Webserver-Software ist der <strong>Apache Webserver</strong>, Nginx oder Abyss. Beim Apache Webserver handelt es sich um den wohl bekanntesten Vertreter seiner Art.</p>
            <p>Relativ neuer und erfolgreicher Mitbewerber ist <strong>Nginx</strong> ("engine-ex"). Der Grund für den Erfolg liegt darin, dass Nginx bei hoher Last schneller als Apache ist und insbesondere deutlich weniger Speicher verbraucht.</p>
            <p><a href="http://www.zdnet.de/41559930/mehr-leistung-im-www-nginx-statt-apache-nutzen/" target="_blank">Weitere Details zu Nginx statt Apache</a></p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <h4>Lokaler Server</h4>
            <p>Für die lokale Webentwicklung sind Programme wie XAMPP oder MAMP verfügbar. Diese basieren auf dem sogenannten <strong>LAMP</strong>-System.</p>
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
            <p>Durch die Bereitstellung von Apache und MySQL sehr einfach, lokal einen vollwertigen Webserver zu betreiben.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>XAMPP</h3>
            <p>XAMPP ist wie eben erwähnt ein Porgramm für die lokale Webentwicklung. Wie du XAMPP startest und verwendest lernst du in dem folgenden Abschnitt.</p>
        </div>
        <div class="col-xs-12 col-sm-6">
            <a href="_resources/img/xampp-server.png" data-lightbox="image-1" data-title="Manage Servers">
                <img src="_resources/img/xampp-server.png" height="472" width="670" class="img-responsive">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6">
            <h4>1. Schritt:</h4>
            <p>XAMPP wird über die Online Plattform installiert bzw heruntergeladen.</p>
            <p>Ein Webserver wird in XAMPP anschließend über den Reiter „<code>Manage Servers</code>“ gestartet.</p>
            <p>Im Alltagsgebrauch kann auf "<code>Start all</code>" geklickt werden und es muss nichts weiter konfiguriert werden.</p>
        </div>
    </div>
    <div class="row mtl">
        <div class="col-xs-12 col-sm-6">
            <a href="_resources/img/xampp-start.png" data-lightbox="image-2" data-title="Start XAMPP">
                <img src="_resources/img/xampp-start.png" height="472" width="670" class="img-responsive">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6">
            <h4>2. Schritt:</h4>
            <p>Für einen schnellen Zugriff auf den Hauptordner kann auf "<code>Open Applications Folder</code>" geklickt werden und dann der Ordner "<code>htdocs</code>" ausgewählt werden.</p> 
            <p>Alle Dateien, die sich in diesem Ordner befinden, können im Browser unter <code>localhost</code> abgerufen werden.</p>
            <code>http://localhost/Dateiname</code>
        </div>
        <div class="col-xs-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3>PHP</h3>
            <p>Die Verwendung eines Web- oder lokalen Servers nützt nichts ohne eine PHP Datei die der Server zum lesen erhält.</p>
            <p>Die Grundlagen und Funktionen von PHP siehst du hier.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="info-wrapper-inner">
                <div class="code-wrapper">
                    <?php 
                        highlight_string('<?php echo "Ich bin ein Beispieltext."; ?>');
                    ?>
                </div>
                <div class="code-wrapper">
                    <?php 
                        echo "Ich bin ein Beispieltext.";
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>PHP ist eine Skriptsprache, die hauptsächlich zur Erstellung dynamischer Webseiten oder Webanwendungen verwendet wird.</p>
            <p>Damit PHP auf auf dem Server ausgeführt werden kann muss die entsprechende Datei mit .php enden.</p>
            <p>Der Inhalt einer PHP Datei beginnt mit <code>&lt;?php</code> und endet mit <code>?&gt;</code>.</p>
        </div>
    </div>
    <hr>
            
    <p>Das wären ein Einstieg. Um diesen Einstieg mit anderen Grundlagen zu erweitern können z.B. Variablen verwendet werden.</p>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="info-wrapper-inner">
                <div class="code-wrapper">
                    <?php 
                        echo "$" . "myVariableString = 'abc';" . "<br>";
                        echo "$" . "myVariableInteger = 123;" . "<br>";
                        echo '$' . 'myVariableVar = ' . '$' . '_POST["input-text"];';
                    ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <p>Eine Variable wird durch <code>$[text]</code> definiert.</p>
            <p>Im PHP sieht das dann so aus:</p>
            <p>Wird nun an einer anderen Stelle im PHP Code die Variable <code>$myVariableString / -Integer / -Var</code> aufgerufen, so wird 
            <code>abc</code>, <code>123</code> oder <code>Hallo</code> ausgegeben.</p>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>