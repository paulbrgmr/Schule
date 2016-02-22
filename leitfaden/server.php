<?php 
    include 'content.php';
?>
</div>
<div class="bg-wrapper">
    <div class="server-bg-img bg-img">
        <h1 class="text-center bg-headline">Webserver</h1>
    </div>
</div>
<div class="container content-webserver">
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
        <div class="col-sm-6">
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
        <div class="col-sm-6">
            <a href="_resources/img/xampp-server.png" data-lightbox="image-1" data-title="Manage Servers">
                <img src="_resources/img/xampp-server.png" height="472" width="670" class="img-responsive">
            </a>
        </div>
        <div class="col-sm-6">
            <h4>1. Schritt:</h4>
            <p>XAMPP wird über die Online Plattform installiert bzw heruntergeladen.</p>
            <p>Ein Webserver wird in XAMPP anschließend über den Reiter „<code>Manage Servers</code>“ gestartet.</p>
            <p>Im Alltagsgebrauch kann auf "<code>Start all</code>" geklickt werden und es muss nichts weiter konfiguriert werden.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a href="_resources/img/xampp-start.png" data-lightbox="image-2" data-title="Start XAMPP">
                <img src="_resources/img/xampp-start.png" height="472" width="670" class="img-responsive">
            </a>
        </div>
        <div class="col-sm-6">
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
        <div class="col-sm-6">
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
        <div class="col-sm-6">
            <p>PHP ist eine Skriptsprache, die hauptsächlich zur Erstellung dynamischer Webseiten oder Webanwendungen verwendet wird.</p>
            <p>Damit PHP auf auf dem Server ausgeführt werden kann muss die entsprechende Datei mit .php enden.</p>
            <p>Der Inhalt einer PHP Datei beginnt mit <code>&lt;?php</code> und endet mit <code>?&gt;</code>.</p>
        </div>
    </div>

            <p>Ein Webserver wird in XAMPP über den Reiter "<code>Manage Servers</code>" gestartet werden.</p>
            <div class="row">
                <div class="col-lg-5">
                    
                </div>
            </div>
            <p>Im Alltagsgebrauch kann auf "<code>Start all</code>" geklickt werden und es muss nichts weiter konfiguriert werden.</p>
            <p>Für einen schnellen Zugriff auf den Hauptordner kann auf "<code>Open Applications Folder</code>" geklickt werden und dann der Ordner "<code>htdocs</code>" ausgewählt werden.
            Alle Dateien, die sich in diesem Ordner befinden, können im Browser unter <a href="http://localhost/" target="_blank">localhost</a> abgerufen werden.</p>
            <div class="row">
                <div class="col-lg-5">
                    
                </div>
            </div>
            <hr>
            <h2 class="text-center">PHP</h2>
            <p>PHP ist eine Skriptsprache, die hauptsächlich zur Erstellung dynamischer Webseiten oder Webanwendungen verwendet wird.</p>
            <div class="row">
                <div class="equal-height">
                    <div class="col-md-6">
                        <div class="info-wrapper">
                            <div class="info-wrapper-inner">
                                <p>Damit PHP auf auf dem Server ausgeführt werden kann muss die entsprechende Datei mit <code>.php</code> enden.</p>
                                <div class="code-wrapper">
                                    <?php 
                                        highlight_string('<?php');
                                    ?>
                                </div>
                                <div class="code-wrapper">
                                    <?php 
                                        highlight_string('echo "Ich bin ein Beispieltext.";');
                                    ?>
                                </div>
                                <div class="code-wrapper">
                                    <?php 
                                        highlight_string('?>');
                                    ?>
                                </div>
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
                    </div>
                    <div class="col-md-6">
                        <div class="text-wrapper">
                            <div class="text-wrapper-inner">
                                <p>PHP wird in dieser Datei wird wie folgt gestartet:</p>
                                <p>Durch ein <code>echo</code> kann unformatierter Text ausgegeben werden:</p>
                                <p>Um den PHP Code zu schließen schreibt man folgendes:</p>
                                <p>Zusammengesetzt sieht der funktionierende Code so aus:</p>
                                <p>Und gibt folgendes aus:</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Das wären ein Einstieg. Um diesen Einstieg mit anderen Grundlagen zu erweitern können z.B. Variablen verwendet werden.</p>
            <div class="info-wrapper-inner">
                <p>Eine Variable wird durch <code>$[text]</code> definiert.</p>
                <p>Im PHP sieht das dann so aus:</p>
                <div class="code-wrapper">
                    <?php 
                        echo "$" . "myVariable = 'abc';";
                    ?>
                </div>
                <p>Wird nun an einer anderen Stelle im PHP Code die Variable <code>$myVariable</code> aufgerufen, so wird 
                <code>abc</code> ausgegeben.</p>
            </div>




            <div class="section" id="css-comments">
                <div class="col">
                    <h3>Comments</h3>
                    <p>Code is written and maintained by people. Ensure your code is descriptive, well commented, and approachable by others. Great code comments convey context or purpose. Do not simply reiterate a component or class name.</p>
                    <p>Be sure to write in complete sentences for larger comments and succinct phrases for general notes.</p>
                </div>
                <div class="col">
                    <div class="highlight"><pre><code class="language-css" data-lang="css">
                        <span class="c">/* Bad example */</span>
                        <span class="c">/* Modal header */</span>
                        <span class="nc">.modal-header</span> <span class="p">{</span>
                        <span class="o">...</span>
                        <span class="p">}</span>

                        <span class="c">/* Good example */</span>
                        <span class="c">/* Wrapping element for .modal-title and .modal-close */</span>
                        <span class="nc">.modal-header</span> <span class="p">{</span>
                        <span class="o">...</span>
                        <span class="p">}</span></code></pre></div>
                    </div>
                </div>





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



    <!-- <h3>Webserver - Ein System, das Websites bereitstellt</h3> -->
<!--             <p>Ein Webserver ist ein Server, der Dokumente an Clients wie z. B. Webbrowser überträgt. 
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
            <p>Durch die Bereitstellung von Apache und MySQL ist es mit beiden Programmen sehr einfach, lokal einen vollwertigen Webserver zu betreiben.</p> -->