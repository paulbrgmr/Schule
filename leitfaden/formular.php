<?php 
    include 'content.php';
?>
</div>
<div class="bg-wrapper">
    <div class="formular-bg-img bg-img">
            <h1 class="text-center bg-headline">Formular</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="content-formular">
        <p>Die wohl bekannteste und einfachste Übung in und mit PHP ist es, ein Formular zu erstellen.</p>
        <p>Es gibt zwei Arten von Formularen:</p>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <hr class="primary">
            </div>
            <div class="col-lg-6">
                <h3><code>GET</code>-Formular</h3>
                <p>Bei GET sieht der User, welche Daten übergeben werden (kann man als Vorteil oder als Nachteil sehen)</p>
                <p>Wenn wir ein Formular mit GET verschicken, wird in der URL-Zeile des Browser die Variablen + ihrem Wert angezeigt.</p>
                <p>Bei GET ist die Länge begrenzt, bei POST nicht.</p>
                <p>Gerade wenn man ein Formularfeld hat, indem sehr sehr viele Daten reinkommen können (z.b. ein Blog-Artikel, ein Forumbeitrag, ein Wikipedia-Artikel) muss man POST verwenden, da die get-Methode begrenzt ist.</p>
                <p>Bzw eigentlich ist nicht GET begrenzt, sondern die Url-Zeile des Browsers. Je nach Browser hat man eine maximale Länge um 1024 Zeichen und für Artikel ist das in der Regel nicht ausreichend.</p>
                <p>Die Ergebnisseite eines GET-Formulars kann man bookmarken, da alle nötigen Informationen in der URL enthalten sind</p>
            </div>
            <div class="col-lg-6">
                <h3><code>POST</code>-Formular</h3>
                <p>Die Ergebnisseite eines POST-Formulars kann man weder bookmarken noch im Browser aktualisieren, da die Daten nicht mehr zur Verfügung stehen.</p>
                <p>File-Upload ist nur mit POST möglich.</p>
                <p>Weitere Informationen zu GET und POST findest du unter: </p>
                <a href="http://www.informatikzentrale.de/formulare-get-post-auswerten.html" target="_blank">http://www.informatikzentrale.de/formulare-get-post-auswerten.html</a>
            </div>
        </div>
        <h3>Grundaufbau eines Formulars</h3>
        <p>Alle Daten, die in einem Formular eingegeben werden, werden im HTML in einen <code>form</code>-Tag eingetragen.</p>
        <div class="row">
            <div class="col-xs-12">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="info-wrapper-inner">
                    <form action="" method="POST">
                        <input type="text">
                        <input type="submit">
                        <input type="reset">
                    </form>
                    <div class="code-wrapper">
                        <?php 
                            highlight_string(
'<form action="testfile.php" method="POST">
    <input type="text">
    <input type="submit">
    <input type="reset">
</form>');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <p><code>action="testfile.php"</code> bestimmt, wohin weitergeleitet werden soll, nachdem der User die Daten eingegeben und das Formular abgeschickt hat.</p>
                <p><code>method="POST"</code> gibt an, mit welcher der oben genannten Methoden das Formular abgeschickt werden soll.</p>
                <p><code>&lt;input type="text"&gt;</code> definiert, welche Art von input-Feld dargestellt werden soll.</p>
                <p><code>&lt;input type="submit"&gt;</code> bzw. <code>&lt;input type="reset"&gt;</code> 
                ermöglichen das Abschicken bzw. das Zurücksetzen des Formulars. Der Text in diesen Buttons kann durch <code>value=""</code> verändert werden.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="info-wrapper-inner">
                    <label for="Vorname">Vorname:</label>
                    <input id="Vorname" type="text" placeholder="Vorname" name="Vorname">
                    <div class="code-wrapper">
                        <?php 
                            highlight_string(
'<label for="Vorname">Vorname:</label>
<input id="Vorname" type="text" 
placeholder="Vorname" name="Vorname">');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <p>Um ein <code>input</code> korrekt, für Sehschwache und benutzerfreundlich zu schreiben, wird ein <code>label</code> empfohlen.</p>
                <p>Um den gewünschten Effekt zu erreichen müssen <code>label</code> und <code>input</code> miteinander verknüpft werden.</p>
                <p>Das geschieht mit einem <code>for="Vorname"</code> im <code>label</code> und einem <code>id="Vorname"</code> im <code>input</code></p>
                <p>Ziel ist, dass auf das <code>label</code> geklickt werden kann und das <code>input</code> wird ausgewählt.</p>
                <p>Mit <code>placeholder="Vorname"</code> setzt man den Platzhalter, der ausgeblendet wird, sobald in das <code>input</code> geschrieben wird.</p>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>GET und POST - Praxis</h3>
                <p>Du hast nun einen grundlegenden Einblick in Formulare und dne Unterschied zwischen GET und POST bekommen.</p>
                <p>Klicke den unten stehenden Button, um auszuprobieren inwieweit du Formulare verstanden hast:</p>
            </div>
            <div class="col-lg-3">
                <a href="form/post-get.php" class="btn btn-primary btn-block" target="_blank">
                    GET / POST ausprobieren
                </a>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>Client- und Serverseitige Formularprüfung</h3>
                <p>Es wird empfohlen bei jedem Formular eine <strong>Prüfung</strong> einzubauen, ob die notwendigen Fehler auch korrekt ausgefüllt wurden.</p>
                <p>Hierbei gibt es zwei Methoden: die Clientseitige und die Serverseitige Prüfung.</p>
            </div>
            <div class="col-sm-6">
                <div class="info-wrapper-inner">
                    <div class="code-wrapper">
                    <?php 
                            highlight_string(
'<form action="testfile.php" method="POST">
    <label for="Vorname">Vorname:</label>
    <input id="Vorname" type="text" 
    placeholder="Vorname" name="Vorname" required>
</form>');
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h4>Clientseitige Prüfung</h4>
                <p>Die Clientseitige Prüfung ist einfacher umzusetzen, jedoch fehleranfälliger.</p>
                <p>Um ein Formularelement als benötigt zu kennzeichnen, kann das Attribut required im <code>&lt;input&gt;</code> verwendet werden.</p>
                <p>Von dieser Verwendung ist inzwischen jedoch abzuraten, da Safari mit dieser Angabe nicht umgehen kann. </p>
                <p>Alternativ kann man die Prüfung mit JavaScript durchführen. Es kann jedoch sein, dass der Client JavaScript im Browser deaktiviert hat und somit keine Prüfung möglich wäre.</p>
            </div>
            <div class="col-sm-3">
                <a href="form/validation.php" class="btn btn-primary btn-block" target="_blank">
                    Validierung ausprobieren
                </a>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <h4>Serverseitige Prüfung</h4>
                <p>Die sicherste Formularprüfung ist daher die Serverseitige Prüfung.</p>
                <p>Klicke auf den linksstehenden Button und du kannst eine serverseitige Prüfung eines Formulars ausprobieren.</p>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>