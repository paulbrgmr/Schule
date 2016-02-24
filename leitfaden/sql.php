<?php 
    include 'content.php';
?>

</div>
<div class="bg-wrapper">
    <div class="sql-bg-img bg-img">
        <h1 class="text-center bg-headline">SQL</h1>
    </div>
</div>
<div class="container content-container">
    <div class="content-sql">
        <p>Um SQl zu verstehen reicht es nicht sich ausschließlich mit dieser Abfragesprache auseinanderzusetzen.</p>
        <p>Das Netz um SQL ist weitaus größer als man denkt, daher erst einmal die Theorie:</p>
        <div class="row">
            <div class="col-xs-12 col-md-offset-4 col-md-4">
                <hr class="primary">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <p class="headline">Was ist eine <strong>Datenbank</strong>?</p>
                <p>Der Speicherort sämtlicher Daten auf einem physikalischen Datenträger. Die Art und Weise, wie diese Daten verwaltet werden, hängt vom Dateisystem und dem jeweiligen Datenbankmodell ab. </p>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-2">
                <p class="headline">Was ist ein <strong>Datenbankmanagement-System</strong>?</p>
                <p>Die Schnittstelle zwischen der Datenbank und der Kommunikationsschnittstelle zum Benutzer. <br> z.B MySQL</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <p class="headline">Was ist eine <strong>Datenbank-Kommunikationsstelle</strong>?</p>
                <p>Sie erweitert das Datenbankmanagement-System, indem es Hilfen für Anfragen oder Einträge an die Datenbank sendet. <br> z.B. phpMyAdmin</p>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-2">
                <p class="headline">Was ist eine <strong>Datenbankmodellierung</strong>?</p>
                <p>Die Struktur einer Datenbank muss zunächst aufgestellt werden, indem Objekte mit ihren Eigenschaften und Beziehungen (Relationen) konzipiert werden. Daraus wird eine logische Datenstruktur abgeleitet. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3>Primärschlüssel</h3>
                <p>Dieser ist für die <strong>eindeutige Identifikation</strong> eines Datensatzes zuständig. 
Der Primärschlüssel besteht meist aus einem oder mehreren Attributen z.B. ID</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h3>Fremdschlüssel</h3>
                <p>Dieser ist dafür zuständig <strong>Beziehungen zwischen Tabellen</strong> herzustellen. Zum Beispiel kann der Primäschlüssel ID in einer Tabelle aufgenommen werden um eine Verknüpfung beider herzustellen..</p>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-xs-12">
                <h3>Beziehungen und Normalformen</h3>
                <p>Wir bewegen uns immer weiter hin zur praktischen Anwendung. 
Dafür sind die Beziehungen (Verbindungsarten zwischen Tabellen) und Normalformen (Vermeidung von Redundanzen) bei der Erstellung von Datenbanken sehr wichtig. 
Hier ein kleiner Überblick:</p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/1-1_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>1:1 Beziehung:</strong>
                <p>monogame Beziehungen, Datenfelder beziehen sich nur auf ein anderes.</p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/1-n_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>1:n Beziehung:</strong>
                <p>Ein Dtatenfeld bezieht sich auf mehrere andere. </p>
            </div>
        </div>
        <div class="row erm">
            <div class="col-md-6">
                <img src="_resources/img/sql/n-m_beziehungen.jpg" class="img-responsive">
            </div>
            <div class="col-md-6 erm-text">
                <strong>n:m Beziehung:</strong>
                <p>Mehrere Datenfelder beziehen sich auf mehrere andere.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
            <div class="col-md-6">
                <img src="_resources/img/sql/normalform.png" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h4>1. Normalform</h4>
                <p>Atomisieren, das Datenfeld darf nur gleichartigen Inhalt enthalten, z.B. Name wird zu Vor und Nachname</p>
                <h4>2. Normalform</h4>
                <p>Die Erste muss erfüllt sein.</p> 
                <p>Die 2. Normalform besagt die Trennung der Tabelle in mehrere thematisch angepasste Datensätze.</p>
                <p>z.B. aufgeteilt in Kundendaten/Artikeldaten etc.</p>
                <h4>3. Normalform</h4>
                <p>transitive Abhängigkeiten, erst wenn 1. und 2. Normalform erfüllt sind.</p>
                <p>Hier geht es um die indirekten Abhängigkeiten, in Tabellen sollen nur direkte Abhängigkeiten vorhanden sein. </p>
                <p>z.B. eine Tabelle mit name-plz-ort hat eine direkte Abhängigkeit von name zu zu plz, plz hat eine direkte zu ort, name somit eine indirekte zu ort.</p>
                <p>Nach der Anwendung würde name mit plz und plz mit ort in einer eigenständigen Tabelle zu finden sein.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h3>Entity Relationship Modell</h3>
                <p>Das ERM ist im Prinzip nichts anderes als ein Modell das die Beziehungen zwischen Objekten darstellt, siehe Beziehungen und Normalformen.</p>
            </div>
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
            <div class="row">
                <div class="col-xs-12">
                    <h3>Die Praxis-Datenbank anlegen</h3>
                    <p>Die Praxis gibt uns die Möglichkeit die Theorie in praktischer Anwendung verstehen zu können. Dort werden auch schnell die Vorteile ersichtlich die MySQL bietet.</p>
                </div>
                <div class="col-xs-12">
                    <div class="row mbl">
                        <div class="col-sm-6">
                            <a href="_resources/img/sql/database/db-overview.png" data-lightbox="image-1" data-title="">
                                <img src="_resources/img/sql/database/db-overview.png" class="img-responsive">
                            </a>
                            <a href="_resources/img/sql/database/db-create.png" data-lightbox="image-1" data-title="">
                                <img src="_resources/img/sql/database/db-create.png" class="img-responsive mtl">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <strong>1. Schritt:</strong>
                            <p>Wie XAMPP gestartet wird hast du bei den Servern schon gelernt.</p>
                            <p>Über localhost hast du Zugriff auf phpMyAdmin, der Webanwendung mit der die Administration von MySQL Datenbanken gesteuert wird.</p>
                            <p>Erstelle eine neue Datenbank, indem du den Namen eingibst und deine gewünschte Kollation (utf general).</p>
                            <strong>2. Schritt:</strong>
                            <p>Klicke nun auf den Reiter Datenbank um eine Tabelle anzulegen.</p>
                            <p>Daraufhin wird ein Fenster erscheinen, indem der Name der Tabelle mit den gewünschten Feldern eingegeben werden muss.
                                Du siehst wie einfach du schon deine erste Tabelle anlegen kannst, MySQL bietet dir viele Vorteile:</p>
                            <ul class="list-unstyled">
                                <li>- Einfache Handhabung</li>
                                <li>- flexible Datenspeicherung</li>
                                <li>- strukturierte Tabellen</li>
                                <li>- große Datenbestände möglich</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row mtl">
                        <div class="col-xs-12">
                            <p>Nun sollte dein Tabellenfeld angezeigt werden. In der ersten Spalte gibst du deine Tabelleninhalte an, die du weiter spezifizieren musst:</p>
                            <a href="_resources/img/sql/database/db-content-all.png" data-lightbox="image-1" data-title="">
                                <img src="_resources/img/sql/database/db-content-all.png" class="img-responsive mbl">
                            </a>
                            <div class="row">
                                <div class="col-xs-12 col-sm-2">
                                    <dl>
                                        <dt>Feldname:</dt>
                                        <dd>ID ist oft sinvoll (Primärschlüssel)</dd>
                                    </dl>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <dl>
                                        <dt>Typ:</dt>
                                        <dd>
                                            <ul class="list-unstyled">
                                                <li>
                                                    int= Zahl
                                                </li>
                                                <li>
                                                    Var= Text/Zahl
                                                </li>
                                                <li>
                                                    Date= Datum
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <dl>
                                        <dt>Länge:</dt>
                                        <dd>max. Länge</dd>
                                    </dl>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <dl>
                                        <dt>Kollation:</dt>
                                        <dd>Die Kollation hast du am Anfang angegeben</dd>
                                    </dl>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <dl>
                                        <dt>Festlegung:</dt>
                                        <dd>Primärschlüssel</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <h3>Auf die Datenbank zugreifen</h3>
                    <p>Wie du per PHP auf deine Datenbank zugreifen kannst, zeigt dir der folgende Screen:</p>
                    <!-- Screen SQL -->
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <div class="info-wrapper-inner">
                                <div class="code-wrapper">
                                    <?php highlight_string(
'<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Schule";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "UserID: " . $row["UserID"] . "<br>";
        }
    }
    else {
        echo "0 results";
    }

    $conn->close();
?>');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 mtl-xs">
                            <h4>Verbindungsaufbau</h4>
                            <p>Für einen Verbindungsaufbau werden folgende Daten benötigt:</p>
                            <ul class="list-unstyled">
                                <li>- <code>servername</code>: Pfad unter dem die Datenbank zu erreichen ist</li>
                                <li>- <code>username</code>: Der Benutzername, mit dem man sich in PMA einloggt</li>
                                <li>- <code>password</code>: Das Passowort, mit dem man sich in PMA einloggt</li>
                                <li>- <code>dbname</code>: Der Name der Datenbank, aus der die Inhalt kommen</li>
                            </ul>
                            <p>Mit <code>mysqli</code> wird definiert, mit welcher Methode die Verbindung aufgebaut werden soll.</p>
                            <p>Mit der <code>if / while</code>-Schleife wird jede DB-Zeile durchgegangen. Die Daten werden dann durch das <code>echo</code> ausgegeben.</p>
                            <p>Ist die Abfrage fertig, so ist es zu empfehlen die Verbindung zu beenden da dies sonst zu einer starken Serverlast führen könnte.</p>
                        </div>
                    </div>
                    <p>Mit diesem Leitfaden solltest du nun die Grundlagen der Porgrammierung mit PHP verstehen und eigenständig Tabellen und Datenbanken erstellen können.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>