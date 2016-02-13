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
        <div class="col-lg-6">
            <h3><code>GET</code>-Formular</h3>
            <p>Bei <code>GET</code> sieht der User, welche Daten übergeben werden (kann man als Vorteil oder als Nachteil sehen)</p>
            <ul>
                <li>Wenn wir ein Formular mit <code>GET</code> verschicken, wird in der URL-Zeile des Browser die Variablen + ihrem Wert angezeigt.</li>
            </ul>
            <p>Bei <code>GET</code> ist die Länge begrenzt, bei <code>POST</code> nicht</p>
            <ul>
                <li>
                    <p>Gerade wenn man ein Formularfeld hat, indem sehr sehr viele Daten reinkommen können (z.b. ein Blog-Artikel, ein Forumbeitrag, ein Wikipedia-Artikel) muss man <code>POST</code> verwenden, 
                    da die get-Methode begrenzt ist.</p>
                    <p>Bzw eigentlich ist nicht <code>GET</code> begrenzt, sondern die Url-Zeile des Browsers. Je nach Browser hat man eine maximale Länge um 1024 Zeichen und für Artikel ist das in der Regel nicht ausreichend.</p>
                </li>
            </ul>
            <p>Die Ergebnisseite eines <code>GET</code>-Formulars kann man bookmarken, da alle nötigen Informationen in der URL enthalten sind</p>
        </div>
        <div class="col-lg-6">
            <h3><code>POST</code>-Formular</h3>
            <p>Die Ergebnisseite eines <code>POST</code>-Formulars kann man weder bookmarken noch im Browser aktualisieren, da die Daten nicht mehr zur Verfügung stehen</p>
            <p>File-Upload ist nur mit <code>POST</code> möglich</p>
        </div>
    </div>
    <h3>Grundaufbau eines Formulars</h3>
    <p>Alle Daten, die in einem Formular eingegeben werden, werden im HTML in einen <code>form</code>-Tag eingetragen.</p>
    <form action="" method="POST">
        <input type="text">
        <input type="submit">
        <input type="reset">
    </form>
    <div class="info-wrapper">
        <p>Die grundlegende Struktur eines Formulars:</p>
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
        <p><code>action="testfile.php"</code> bestimmt, wohin weitergeleitet werden soll, nachdem der User die Daten eingegeben und das
        Formular abgeschickt hat. Wird das Attribut leer oder weggelassen, so wird der User nach dem Abschicken des Formulars nicht weitergeleitet.</p>
        <p><code>method="POST"</code> gibt an, mit welcher der oben genannten Methoden das Formular abgeschickt werden soll.</p>
        <p><code>&lt;input type="text"&gt;</code> definiert, welche Art von input-Feld dargestellt werden soll.</p>
        <p><code>&lt;input type="submit"&gt;</code> bzw. <code>&lt;input type="reset"&gt;</code> 
        ermöglichen das Abschicken bzw. das Zurücksetzen des Formulars. Der Text in diesen Buttons kann durch <code>value=""</code> verändert werden.</p>
    </div>
    <label for="Vorname">Vorname:</label>
    <input id="Vorname" type="text" placeholder="Vorname" name="Vorname">
    <div class="info-wrapper">
        <p>Um ein <code>input</code> korrekt, für Sehschwache und benutzerfreundlich zu schreiben, wird ein <code>label</code> empfohlen.</p>
        <div class="code-wrapper">
            <?php 
                highlight_string(
'<label for="Vorname">Vorname:</label>
<input id="Vorname" type="text" placeholder="Vorname" name="Vorname">');
            ?>
        </div>
        <p>Um den gewünschten Effekt zu erreichen müssen <code>label</code> und <code>input</code> miteinander verknüpft werden.</p>
        <p>Das geschieht mit einem <code>for="Vorname"</code> im <code>label</code> und einem <code>id="Vorname"</code> im <code>input</code></p>
        <p>Ziel ist, dass auf das <code>label</code> geklickt werden kann und das <code>input</code> wird ausgewählt.</p>
        <p>Mit <code>placeholder="Vorname"</code> setzt man den Platzhalter, der ausgeblendet wird, sobald in das <code>input</code> geschrieben wird.</p>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <a href="form/post-get.php" class="btn btn-primary btn-block" target="_blank">
                Formular ausprobieren
            </a>
        </div>
    </div>
</div>
</div>

<?php
    include 'footer.php';
?>